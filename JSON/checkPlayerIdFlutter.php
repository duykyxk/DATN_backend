
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
$body = $_POST['body'];
$data = json_decode($body);
$playerId = $_POST['playerId'];
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
		$logout= mysqli_query($conn, "update `device` set `status` = 2 where `playerId`='".$playerId."' and `uid`!='".$uid."'");
		$logout= mysqli_query($conn, "update `device` set `status` = 2 where `uid`='".$uid."' and `playerId`!='".$playerId."'");

		$sql= "SELECT * from `device` where `uid`=".$uid." and `playerId`='".$playerId."'";
		$result= mysqli_query($conn, $sql);
		if($r = mysqli_num_rows($result) > 0){
			$update = mysqli_query($conn, "update `device` set `status`=1 where  `uid`=".$uid." and `playerId`='".$playerId."'");
			file_put_contents("date.txt", "update `device` set `status`=1 where  `uid`=".$uid." and `playerId`='".$playerId."'");
		} else{
			$insert = mysqli_query($conn, "insert into `device`(`playerId`,`uid`,`status`) values ('".$playerId."',".$uid.",1)");
			file_put_contents("date.txt", "insert into `device`(`playerId`,`uid`,`status`) values ('".$playerId."',".$uid.",1)");
		}
		

		echo json_encode( array('message' => "Success" ));
		
	}

    // if decode fails, it means jwt is invalid
	catch (Exception $e){

    // set response code
		http_response_code(401);

    // tell the user access denied  & show error message
		echo json_encode(array(
			"message" => "Fail",
			
		));
	}
}
// error if jwt is empty will be here
// show error message if jwt is empty
else{
    // set response code
	http_response_code(401);
    // tell the user access denied
	echo json_encode(array("message" => "Fail"));
}
?>