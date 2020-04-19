
<?php
// required header
// files for decoding jwt will beLoginResponse token here
// required to decode jwt
include_once '../JSON/core.php';
include_once '../Libs/php-jwt-master/src/BeforeValidException.php';
include_once '../Libs/php-jwt-master/src/ExpiredException.php';
include_once '../Libs/php-jwt-master/src/SignatureInvalidException.php';
include_once '../Libs/php-jwt-master/src/JWT.php';
use \Firebase\JWT\JWT;


$body = $_POST['body'];
$data = json_decode($body);
$token=isset($data->token) ? $data->token : "";
$eventId= $_POST['eventId'];
$status=$_POST['status'];
$playerId = $_POST['playerId'];
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
		$json ;

		$json1;
		$statuscheck;

		$sql= "SELECT status from `device` where `uid`=".$uid." and `playerId`='".$playerId."'";
		$result= mysqli_query($conn, $sql);
		if($r = mysqli_fetch_array($result) ){
			$statuscheck=$r['status'];
		} 

		if ($statuscheck ==2){
			$json2 = array("users"=>"Logout");

			echo json_encode($json2,JSON_UNESCAPED_SLASHES);
		}else {
		if($status == 0){
			$sql=	"SELECT user.`id`, user.`name`, user.`code`, user.`phone`, user.`email`, user.`address` FROM user INNER JOIN family_user on user.`id`= `family_user`.`tracker` WHERE family_user.`monitor`=".$uid." and `family_user`.`tracker` in (SELECT `uid` from user_event where `user_event`.`groupEventId`='".$eventId."' and `user_event`.`status`> 5 )";
		} else if($status==1){
			$sql=	"SELECT user.`id`, user.`name`, user.`code`, user.`phone`, user.`email`, user.`address` FROM user INNER JOIN family_user on user.`id`= `family_user`.`tracker` WHERE family_user.`monitor`=".$uid." and `family_user`.`tracker` in (SELECT `uid` from user_event where `user_event`.`groupEventId`='".$eventId."' and `user_event`.`status` < 6 )";
		}
		


		$cs = file_put_contents("date.txt", $sql, FILE_APPEND);
		$check= mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($check,MYSQLI_ASSOC)) {
				// $jsonimage[] =array(); 
				
				$id = $row['id'];
				$statusr= mysqli_query($conn, "SELECT `status` from user_event where `user_event`.`groupEventId`='".$eventId."' and `user_event`.`uid` =".$id." ");
				if ($rr = mysqli_fetch_array($statusr)){
					$statusu = $rr['status'];
				}
				$name = $row['name'];
				$code = $row['code'];
				$phone=$row['phone'];
				$email=$row['email'];
				$address=$row['address'];
				

				$json1 []= array("id" => $id,"name"=>$name,"code"=>$code, "phone"=>$phone,"email"=>$email,"address"=>$address, "status"=>$statusu);
				// $cs = file_put_contents("date.txt", json_encode($aplace,JSON_UNESCAPED_SLASHES));

				
		}
		// $cs = file_put_contents("date.txt", $json, FILE_APPEND);
		$json2 = array("users"=>$json1);

		echo json_encode($json2,JSON_UNESCAPED_SLASHES);
		// $cs = file_put_contents("date.txt",json_encode($json2,JSON_UNESCAPED_SLASHES));
		

	}
}
    // if decode fails, it means jwt is invalid
	catch (Exception $e){

    // set response code
		http_response_code(401);

    // tell the user access denied  & show error message
		echo json_encode(array(
			"users" => "Access denied.",
			
		));
	}
}
// error if jwt is empty will be here
// show error message if jwt is empty
else{
    // set response code
	http_response_code(401);
    // tell the user access denied
	echo json_encode(array("users" => "Access denied."));
}
?>