<?php
// required headers
// files needed to connect to database

include_once 'config.php' ;

// check email existence here
// get posted data
$raw = file_get_contents("php://input");
file_put_contents("datastorage.txt", "dayaa".$raw, FILE_APPEND);
file_put_contents("datastorage.txt", $raw, FILE_APPEND);
$data = json_decode($raw);
 file_put_contents("datastorage.txt", $data, FILE_APPEND);
// set product property values
$json;
$id ;
$name;
$phone;
$email;
$roleId;
$address;
$gender;
$password;
$role ;

$email = $data->email;

$sql = "SELECT * from `user` where email='".$email."' LIMIT 0,1";
$email_exists = mysqli_query($conn, $sql);
if ($r = mysqli_fetch_array($email_exists )){
  $id = $r['id'];
  $name= $r['name'];
  $phone= $r['phone'];
  $email= $r['email'];
  $roleId= $r['roleId'];
  $address= $r['address'];
  $gender= $r['gender'];
  $password=$r['password'];
  $rolerq= mysqli_query($conn, "select name from `role` where `id` = ".$roleId."");
  if($rr= mysqli_fetch_array($rolerq)){
    $role = $rr['name'];
  }
}
// files for jwt will be here
// generate json web token
include_once 'core.php';
include_once '../libs/php-jwt-master/src/BeforeValidException.php';
include_once '../libs/php-jwt-master/src/ExpiredException.php';
include_once '../libs/php-jwt-master/src/SignatureInvalidException.php';
include_once '../libs/php-jwt-master/src/JWT.php';
use \Firebase\JWT\JWT;

// generate jwt will be here
// check if email exists and if password is correct
$a = password_verify($data->password, $password);
if($email_exists && password_verify($data->password, $password)){

  $token = array(
   "iss" => $iss,
   "aud" => $aud,
   "iat" => $iat,
   "nbf" => $nbf,
   "data" => array(
     "id" => $id,
     "name" => $name,
     "phone" => $phone,
     "email" => $email,
     "role" => $role,
     "address" => $address,
     "gender" => $gender,

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