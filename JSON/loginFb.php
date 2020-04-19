<?php
// files needed to connect to database
include_once 'database.php';
include_once '../objects/user.php';
include_once 'config.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// instantiate user object
$user = new User($db);

// check email existence here
// get posted data
$raw = file_get_contents("php://input");

$data = json_decode($raw);

// set product property values
$json;
$name = $data->password;
$email = $data->email;
$user->email = $data->email;
$email_exists = $user->emailExists(); 
// files for jwt will be here
// generate json web token
include_once 'core.php';
include_once '../libs/php-jwt-master/src/BeforeValidException.php';
include_once '../libs/php-jwt-master/src/ExpiredException.php';
include_once '../libs/php-jwt-master/src/SignatureInvalidException.php';
include_once '../libs/php-jwt-master/src/JWT.php';
use \Firebase\JWT\JWT;

if(!$email_exists){
 $currentTimeinSeconds = time();  
 $password_hash = password_hash($user->email, PASSWORD_BCRYPT);
 $user_insert = mysqli_query($conn,"INSERT INTO `user`( `email`, `password`, `gender`, `roleId`, `name`, `phone`, `address`) VALUES ('".$email."','".$password_hash."',1,2,'".$name."','0','0')");
 $last_id = mysqli_insert_id($conn);
 $code = $currentTimeinSeconds.$last_id;
 $user_update =mysqli_query($conn, "UPDATE `user` SET `code`='".$code."' WHERE `id` = ".  $last_id."");
}

$email_exists = $user->emailExists(); 

if($email_exists){

  $token = array(
   "iss" => $iss,
   "aud" => $aud,
   "iat" => $iat,
   "nbf" => $nbf,
   "data" => array(
     "id" => $user->id,
     "name" => $user->name,
     "phone" => $user->phone,
     "email" => $user->email,
     "roleId" => $user->roleId,
     "address" => $user->address,
     "gender" => $user->gender,
   )
 );

    // set response code
  http_response_code(200);

    // generate jwt
  $jwt = JWT::encode($token, $key);
  $fileStatus=file_put_contents("datastorage.txt",$jwt,FILE_APPEND);
    // $datasend->message= "Login sucscess";
    // $datasend = new \stdClass();
    // $datasend->token=$jwt;

    // $json1 = array("loginResponse"=>$datasend);
    //   echo json_encode($json1,JSON_UNESCAPED_SLASHES);
  echo json_encode( array('token' =>$jwt ));
    // echo ("Thanh cong");
}

// login failed will be here
// login failed
else{

    // set response code
  http_response_code(401);

     // $datasend->message= "Login failed";
    // $datasend->token =   null;// tell the user login failed
  echo json_encode( array('token' =>null ));
}
?>