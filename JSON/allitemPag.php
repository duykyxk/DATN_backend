
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

$page = $_GET['page'];
$pageSize= $_GET['pageSize'];
$offset = ($page -1) * $pageSize;

// $cs = file_put_contents("date.txt", $pageSize);
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
		// echo json_encode(array(
		// 	"message" => "Access granted.",
		// 	"data" => $decoded->data
		// ));
		if ( $decoded ->data->role == 0){

			include 'config.php';
			$json ;
			$jsonimage=null;
			$json1;
			$sql="SELECT * FROM `item` ORDER BY stime DESC, -etime Limit ".$offset.", ".$pageSize."";
			// $cs = file_put_contents("date.txt", $sql, FILE_APPEND);
			$check= mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($check,MYSQLI_ASSOC)) {
				// $jsonimage[] =array(); 
				$jsonimage=null;
				$id = $row['id'];
				$uid = $row['uid'];
				$cat1id = $row['cat1id'];
				$cat2id = $row['cat2id'];
				$title = $row['title'];
				$field1 = $row['field1'];
				$field2 = $row['field2'];
				$field3 = $row['field3']; 
				$field4 = $row['field4']; 
				$field5 = $row['field5']; 
				$field6 = $row['field6']; 
				$field7 = $row['field7']; 
				$field8 = $row['field8']; 
				$field9 = $row['field9']; 
				$field10 = $row['field10']; 
				$field11 = $row['field11']; 
				$field12 = $row['field12']; 
				$field13 = $row['field13']; 
				$field14 = $row['field14']; 
				$field15 = $row['field15']; 
				$field16 = $row['field16']; 
				$field17 = $row['field17']; 
				$field18 = $row['field18']; 
				$field19 = $row['field19']; 
				$field20 = $row['field20']; 
				$field21 = $row['field21']; 
				$field22 = $row['field22']; 
				$field23 = $row['field23']; 
				$field24 = $row['field24']; 
				$field25 = $row['field25']; 
				$field26 = $row['field26']; 
				$field27 = $row['field27']; 
				$field28 = $row['field28']; 
				$field29 = $row['field29']; 
				$field30 = $row['field30']; 
				$stime = $row['stime'];
				$etime = $row['etime'];
				// $json []= $row;
				$sql1="SELECT idItem, stt, images FROM `image` WHERE idItem ='".$id."'";
				// $cs = file_put_contents("date.txt", $sql1, FILE_APPEND);
				$check2= mysqli_query($conn, $sql1);
				
				while($result=mysqli_fetch_array($check2,MYSQLI_ASSOC))
				{
					$jsonimage []= $result;
				}

				$json1 []= array("id" => $id,"uid"=>$uid,"cat1id"=>$cat1id, "cat2id"=>$cat2id,"title"=>$title,"field1"=>$field1,"field2"=>$field2,"field3"=>$field3 ,"field4"=>$field4 ,"field5"=>$field5 ,"field6"=>$field6 ,"field7"=>$field7 ,"field8"=>$field8 ,"field9"=>$field9 ,"field10"=>$field10 ,"field11"=>$field11 ,"field12"=>$field12 ,"field13"=>$field13 ,"field14"=>$field14 ,"field15"=>$field15 ,"field16"=>$field16 ,"field17"=>$field17 ,"field18"=>$field18 ,"field19"=>$field19 ,"field20"=>$field20 ,"field21"=>$field21 ,"field22"=>$field22 ,"field23"=>$field23 ,"field24"=>$field24 ,"field25"=>$field25 ,"field26"=>$field26 ,"field27"=>$field27 ,"field28"=>$field28 ,"field29"=>$field29 ,"field30"=>$field30,"stime"=>$stime,"etime"=>$etime, "imageList"=>$jsonimage);

				unset($jsonimage);
			}

			$json2 = array("items"=>$json1);
			echo json_encode($json2,JSON_UNESCAPED_SLASHES);
		}
		else {
			$cat1id = $decoded ->data->cat1id;
			include 'config.php';
			$json =null ;
			$sql="SELECT * FROM `item` where cat1id = '".$cat1id."' ORDER BY stime DESC, -etime Limit ".$offset.", ".$pageSize." ";
			$check= mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($check,MYSQLI_ASSOC)) {
				$json []= $row;

			}

			$json1 = array("items"=>$json);
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