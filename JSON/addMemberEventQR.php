
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
// $status = $_GET['status'];
$token=isset($data->token) ? $data->token : "";
$eventId = $_GET['eventId'];
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
		include "sendToASubFlutter.php";
		include "sendToASub.php";
		$uid =  $decoded ->data->id;
		$stime=date('Y/m/d H:i:s');
		$sql = "INSERT INTO `user_event`(`groupEventId`, `uid`,`status`) VALUES ('".$eventId."','".$uid."',1)";
		file_put_contents("date.txt", $sql);
		$check=mysqli_query($conn, $sql);
		if($check){
			echo json_encode(array("message" => "success"));
	//send notify
			$name;
			$re= mysqli_query($conn, "select `name` from `group_event` where `id` ='".$eventId."' ");
			if($r = mysqli_fetch_array($re)){
				$name = $r['name'];
			}
			$message = "Bạn đã được thêm vào event ".$name;
			$re1=mysqli_query($conn, "select `playerId` from `device` where `uid`=".$uid." and `status`=1");
			while ($r1 =mysqli_fetch_array($re1)) {
				$playerId = $r1['playerId'];
				sendMessage($message, $playerId);
				sendMessageFlutter($message, $playerId);
			}
		}else echo json_encode(array("message" => "fail"));
		
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