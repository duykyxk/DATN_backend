
<?php
// required header
// files for decoding jwt will be here
// required to decode jwt
include_once '../JSON/core.php';
include_once '../Libs/php-jwt-master/src/BeforeValidException.php';
include_once '../Libs/php-jwt-master/src/ExpiredException.php';
include_once '../Libs/php-jwt-master/src/SignatureInvalidException.php';
include_once '../Libs/php-jwt-master/src/JWT.php';
use \Firebase\JWT\JWT;

// retrieve gieve jwt here
// get posted data
$data = json_decode(file_get_contents("php://input"));
// file_put_contents("date.txt", $data ,FILE_APPEND);
// file_put_contents("date.txt", $page ,FILE_APPEND);
// get jwt
$name = $_GET['name'];
$des =$_GET['des'];
$id = $_GET['id'];
$token=isset($data->token) ? $data->token : "";

// decode jwt here
// if jwt is not empty
if($token){
   // if decode succeed, show user details
	try {
        // decode jwt
		$decoded = JWT::decode($token, $key, array('HS256'));
		http_response_code(200);
		// if ( $decoded ->data->role == 0){

		include 'config.php';
		$uid =  $decoded ->data->id;
		$checkName=0;
		$sql="SELECT `group`.`name` FROM `group` where id != ".$id."";
		$check= mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($check,MYSQLI_ASSOC)) {
			if($row['name']==$name){
				$checkName=1;
				
			}
		}
		if($checkName==1){
			echo json_encode(array("message" => "Access denied.") );
		}else {
			$stime=date('Y/m/d H:i:s');

			$sql="UPDATE `group` set `name`='".$name."',`description`='".$des."' where id=".$id."";
			file_put_contents("date.txt", $sql);
			$check= mysqli_query($conn, $sql);
			
			echo json_encode(array("message" => "Success"));
		}

	}

    // if decode fails, it means jwt is invalid
	catch (Exception $e){

    // set response code
		http_response_code(401);

    // tell the user access denied  & show error message
		echo json_encode(array(
			"message" => "Access denied.",
			
		));
	}
}
// error if jwt is empty will be here
// show error message if jwt is empty
else{
    // set response code
	http_response_code(401);
    // tell the user access denied
	echo json_encode(array("message" => "Access denied."));
}
?>