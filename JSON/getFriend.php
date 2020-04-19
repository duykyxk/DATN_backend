
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
$groupId= $_GET['groupId'];
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
		$sql=	"SELECT user.`id`, user.`name`, user.`code`, user.`phone`, user.`email`, user.`address` FROM user INNER JOIN friends on user.`id`= friends.`friend` WHERE friends.`inviter`=".$uid." and friends.`pending`=2 and friends.`id` not in (SELECT `uid` from group_user where group_user.`groupId`='".$groupId."')";


		$cs = file_put_contents("date.txt", $sql, FILE_APPEND);
		$check= mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($check,MYSQLI_ASSOC)) {
				// $jsonimage[] =array(); 
				
				$id = $row['id'];
				$name = $row['name'];
				$code = $row['code'];
				$phone=$row['phone'];
				$email=$row['email'];
				$address=$row['address'];
				

				$json1 []= array("id" => $id,"name"=>$name,"code"=>$code, "phone"=>$phone,"email"=>$email,"address"=>$address);
				// $cs = file_put_contents("date.txt", json_encode($aplace,JSON_UNESCAPED_SLASHES));

				
		}
		// $cs = file_put_contents("date.txt", $json, FILE_APPEND);
		$json2 = array("users"=>$json1);

		echo json_encode($json2,JSON_UNESCAPED_SLASHES);
		// $cs = file_put_contents("date.txt",json_encode($json2,JSON_UNESCAPED_SLASHES));
		

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