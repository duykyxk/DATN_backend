
<?php

?>

<?php
// required headers
header("Access-Control-Allow-Origin: http://localhost/rest-api-authentication-example/");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

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

// get jwt
$token=isset($data->token) ? $data->token : "";

// decode jwt here
// if jwt is not empty
if($token){
	
    // if decode succeed, show user details
	try {
        // decode jwt
		$decoded = JWT::decode($token, $key, array('HS256'));
		
        // set response code
		http_response_code(200);
		
        // show user details
        // echo json_encode(array(
        //     "message" => "Access granted.",
        //     "data" => $decoded->data
        // ));
		if($decoded->data->role == 0){
			include 'config.php';
			$json ;
			$sql="SELECT * FROM `user` order by id DESC ";
			$check= mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($check,MYSQLI_ASSOC)) {
				$json []= $row;
  //echo $row;
			}

			$json1 = array("user"=>$json);
			echo json_encode($json1,JSON_UNESCAPED_SLASHES);
		}
		
	}
	
    // if decode fails, it means jwt is invalid
	catch (Exception $e){
		
    // set response code
		http_response_code(401);
		
    // tell the user access denied  & show error message
		echo json_encode(array(
			"message" => "Access denied.",
			"error" => $e->getMessage()
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