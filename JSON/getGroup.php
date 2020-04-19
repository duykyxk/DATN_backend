
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
		$sql="SELECT `group`.`id`, `group`.`name`,  `group`.`description`,`group`.`own`, `group`.`parentId`, `group`.`stime`, `group`.`etime` FROM `group_user`, `group` where `group_user`.`uid`=".$uid." and `group_user`.`groupId`= `group`.`id`";
		$cs = file_put_contents("date.txt", $sql, FILE_APPEND);
		$check= mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($check,MYSQLI_ASSOC)) {
				// $jsonimage[] =array(); 
				
				$id = $row['id'];
				$name = $row['name'];
				$description = $row['description'];
				$own = $row['own'];
				$stime=$row['stime'];
				$etime=$row['etime'];
				$parentId=$row['parentId'];
				

				$json1 []= array("id" => $id,"name"=>$name,"des"=>$description,"own"=>$own, "stime"=>$stime,"etime"=>$etime,"parentId"=>$parentId);
				// $cs = file_put_contents("date.txt", json_encode($aplace,JSON_UNESCAPED_SLASHES));

				// $json1 []= array("id" => $id,"areaId"=>$areaId,"longitude"=>$longitude, "latitude"=>$latitude,"name"=>$name,"description"=>$description, "imageList"=>$jsonimage);
		}
		// $cs = file_put_contents("date.txt", $json, FILE_APPEND);
		$json2 = array("groups"=>$json1);

		echo json_encode($json2,JSON_UNESCAPED_SLASHES);
		// $cs = file_put_contents("date.txt",json_encode($json2,JSON_UNESCAPED_SLASHES));
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
			"groups" => "Access denied.",
			
		));
	}
}
// error if jwt is empty will be here
// show error message if jwt is empty
else{
    // set response code
	http_response_code(401);
    // tell the user access denied
	echo json_encode(array("groups" => "Access denied."));
}
?>