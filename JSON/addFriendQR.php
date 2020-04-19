
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
$inviter = $_GET['inviter'];
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
		$friend =  $decoded ->data->id;
		
		$sql="INSERT into `friends`(`inviter`, `friend`, `pending`) values (".$inviter.", ".$friend.", 2)";
		$cs = file_put_contents("date.txt", $sql, FILE_APPEND);
		$check= mysqli_query($conn, $sql);
		file_put_contents("date.txt", $json, FILE_APPEND);

		echo json_encode( array("message"=>"Success"));
	
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