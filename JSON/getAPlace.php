
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
// file_put_contents("date.txt", "a",FILE_APPEND);
$data = json_decode(file_get_contents("php://input"));
// file_put_contents("date.txt", $data ,FILE_APPEND);
$page = $_GET['page'];
$pageSize= $_GET['pageSize'];
$offset = ($page -1) * $pageSize;
// file_put_contents("date.txt", $page ,FILE_APPEND);
// $cs = file_put_contents("date.txt", $pageSize, FILE_APPEND);
// get jwt
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
		$json ;
		$jsonimage=null;
		$json1;
		$sql="SELECT * FROM `place` Limit ".$offset.", ".$pageSize."";
		// $cs = file_put_contents("date.txt", $sql, FILE_APPEND);
		$check= mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($check,MYSQLI_ASSOC)) {
				// $jsonimage[] =array(); 
				//$jsonimage=null;
				// $id = $row['id'];
				// $areaId = $row['areaId'];
				// $longitude = $row['longitude'];
				// $latitude = $row['latitude'];
				// $name = $row['name'];
				// $description = $row['description'];
			
			$json []= $row;
				// $sql1="SELECT image FROM `images` WHERE idItem ='".$id."', `tb`='place'";
				// $cs = file_put_contents("date.txt", $sql1, FILE_APPEND);
				// $check2= mysqli_query($conn, $sql1);
			
				// while($result=mysqli_fetch_array($check2,MYSQLI_ASSOC))
				// {
					// $jsonimage []= $result;
				// }

				// $json1 []= array("id" => $id,"areaId"=>$areaId,"longitude"=>$longitude, "latitude"=>$latitude,"name"=>$name,"description"=>$description, "imageList"=>$jsonimage);

				// unset($jsonimage);

				// $json1 []= array("id" => $id,"areaId"=>$areaId,"longitude"=>$longitude, "latitude"=>$latitude,"name"=>$name,"description"=>$description, "imageList"=>$jsonimage);
		}
		// $cs = file_put_contents("date.txt", $json, FILE_APPEND);
		$json2 = array("aPlaces"=>$json);
		echo json_encode($json2,JSON_UNESCAPED_SLASHES);
		// $cs = file_put_contents("date.txt", $json2, FILE_APPEND);
		// }
		// else {
		// 	$cat1id = $decoded ->data->cat1id;
		// 	include 'config.php';
		// 	$json =null ;
		// 	$sql="SELECT * FROM `item` where cat1id = '".$cat1id."' ORDER BY stime DESC, -etime Limit ".$offset.", ".$pageSize." ";
		// 	$check= mysqli_query($conn, $sql);
		// 	while ($row = mysqli_fetch_array($check,MYSQLI_ASSOC)) {
		// 		$json []= $row;

		// 	}

		// 	$json1 = array("items"=>$json);
		// 	echo json_encode($json1,JSON_UNESCAPED_SLASHES);
		// }
		

	}

    // if decode fails, it means jwt is invalid
	catch (Exception $e){

    // set response code
		http_response_code(401);

    // tell the user access denied  & show error message
		echo json_encode(array(
			"aPlaces" => "Access denied.",
			
		));
	}
}
// error if jwt is empty will be here
// show error message if jwt is empty
else{
    // set response code
	http_response_code(401);
    // tell the user access denied
	echo json_encode(array("aPlaces" => "Access denied."));
}
?>