
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
// $checkinput = file_get_contents("php://input");
// file_put_contents("httprequest.txt", "raw:".$checkinput, FILE_APPEND);
// $data = json_decode(file_get_contents("php://input"));

// $status=isset($data->status) ? $data->status : "000000000000000000000000000000000000000000000000000000000000000000";
// file_put_contents("datastorage.txt", "data in php://input".$status ,FILE_APPEND);
$body= $_POST['body'];
$status = $_POST['status'];$admin = $_POST['admin'];
$data = json_decode($body);
$token=isset($data->token) ? $data->token : "";
$playerId=$_POST['playerId'];
// decode jwt here
// if jwt is not empty
if($token){
   // if decode succeed, show user details
	try {
        // decode jwt
		$decoded = JWT::decode($token, $key, array('HS256'));
		http_response_code(200);
		// if ( $decoded ->data->role == 0){

		include 'checkEvent.php';
		$uid =  $decoded ->data->id;
		$json ;
		$aplace;
		$jsonimage=null;
		$aplace=null;
		$json1=null;
		$statuscheck;

		$sql= "SELECT status from `device` where `uid`=".$uid." and `playerId`='".$playerId."'";
		$result= mysqli_query($conn, $sql);
		if($r = mysqli_fetch_array($result) ){
			$statuscheck=$r['status'];
		} 

		if ($statuscheck ==2){
			$json2 = array("events"=>"Logout");

			echo json_encode($json2,JSON_UNESCAPED_SLASHES);
		}else {
			if ($admin == 0){
				if($status==0){
					$sql="SELECT `group_event`.`id`, `group_event`.`groupId`, `group_event`.`etime`, `group_event`.`placeID`, `group_event`.`stime`, `group_event`.`name`, `group_event`.`description`, `group_event`.`checkPlace` FROM `user_event`, `group_event`, `group` where `group`.`own`=".$uid." and `group`.`id`=`group_event`.`groupId` and`user_event`.`uid`=".$uid." and `user_event`.`groupEventId`= `group_event`.`id` ";
				}else
				$sql="SELECT `group_event`.`id`, `group_event`.`groupId`, `group_event`.`etime`, `group_event`.`placeID`, `group_event`.`stime`, `group_event`.`name`, `group_event`.`description`, `group_event`.`checkPlace` FROM `user_event`, `group_event` where `user_event`.`uid`=".$uid." and `user_event`.`groupEventId`= `group_event`.`id` and `user_event`.`status`=".$status." ";
				$cs = file_put_contents("date.txt", $sql, FILE_APPEND);
				$check= mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_array($check,MYSQLI_ASSOC)) {
				// $jsonimage[] =array(); 

					$id = $row['id'];
					$groupId = $row['groupId'];
					$placeID = $row['placeID'];
					$name = $row['name'];
					$description = $row['description'];
					$stime=$row['stime'];
					$etime=$row['etime'];
					$checkPlace=$row['checkPlace'];
					file_put_contents("date.txt", $checkPlace, FILE_APPEND);
					$sql1= "SELECT name from `group` where `id`=".$groupId."";

					$check1=mysqli_query($conn, $sql1);
					if ($row1=mysqli_fetch_array($check1))
						$groupName= $row1['name'];

					if($checkPlace==0){
						$sql2="SELECT * FROM `place` WHERE id ='".$placeID."'";
					} else 	$sql2="SELECT * FROM `uplace` WHERE id ='".$placeID."'";

					$cs = file_put_contents("date.txt", $sql2, FILE_APPEND);
					$check2= mysqli_query($conn, $sql2);

					if($result=mysqli_fetch_array($check2,MYSQLI_ASSOC))
					{
						$aplace []= $result;
					}

					$json1 []= array("id" => $id,"name"=>$name,"description"=>$description, "stime"=>$stime,"etime"=>$etime,"groupName"=>$groupName, "aplace"=>$aplace);
				// $cs = file_put_contents("date.txt", json_encode($aplace,JSON_UNESCAPED_SLASHES));
					unset($aplace);

				}
			} else {
				if($status==0){
					$sql="SELECT `group_event`.`id`, `group_event`.`groupId`, `group_event`.`etime`, `group_event`.`placeID`, `group_event`.`stime`, `group_event`.`name`, `group_event`.`description`, `group_event`.`checkPlace` FROM `user_event` inner join `group_event` on  `user_event`.`groupEventId`= `group_event`.`id` where `user_event`.`status`>1 and `user_event`.`uid` in (SELECT `tracker` from `family_user` where `monitor`=".$uid.")  ";
				} else
				$sql="SELECT `group_event`.`id`, `group_event`.`groupId`, `group_event`.`etime`, `group_event`.`placeID`, `group_event`.`stime`, `group_event`.`name`, `group_event`.`description`, `group_event`.`checkPlace` FROM `user_event` inner join `group_event` on  `user_event`.`groupEventId`= `group_event`.`id` where `user_event`.`status`=".$status." and `user_event`.`uid` in (SELECT `tracker` from `family_user` where `monitor`=".$uid.")  ";
				$cs = file_put_contents("date.txt", $sql, FILE_APPEND);
				$check= mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_array($check,MYSQLI_ASSOC)) {
				// $jsonimage[] =array(); 

					$id = $row['id'];
					$groupId = $row['groupId'];
					$placeID = $row['placeID'];
					$name = $row['name'];
					$description = $row['description'];
					$stime=$row['stime'];
					$etime=$row['etime'];
					$checkPlace=$row['checkPlace'];
					file_put_contents("date.txt", $checkPlace, FILE_APPEND);
					$sql1= "SELECT name from `group` where `id`=".$groupId."";

					$check1=mysqli_query($conn, $sql1);
					if ($row1=mysqli_fetch_array($check1))
						$groupName= $row1['name'];

					if($checkPlace==0){
						$sql2="SELECT * FROM `place` WHERE id ='".$placeID."'";
					} else 	$sql2="SELECT * FROM `uplace` WHERE id ='".$placeID."'";

					$cs = file_put_contents("date.txt", $sql2, FILE_APPEND);
					$check2= mysqli_query($conn, $sql2);

					if($result=mysqli_fetch_array($check2,MYSQLI_ASSOC))
					{
						$aplace []= $result;
					}

					$checkjs=0;
					if($json1!=null)
						foreach ($json1 as $js) {

							if($js['name']==$name)	$checkjs = 1;
						}

						file_put_contents("date.txt", "check:".$checkjs);
						if ($checkjs==0)
							$json1 []= array("id" => $id,"name"=>$name,"description"=>$description, "stime"=>$stime,"etime"=>$etime,"groupName"=>$groupName, "aplace"=>$aplace);
				// $cs = file_put_contents("date.txt", json_encode($aplace,JSON_UNESCAPED_SLASHES));
						unset($aplace);

					}

				}	
		// $cs = file_put_contents("date.txt", $json, FILE_APPEND);
				$json2 = array("events"=>$json1);

				echo json_encode($json2,JSON_UNESCAPED_SLASHES);
				$cs = file_put_contents("date.txt",json_encode($json2,JSON_UNESCAPED_SLASHES), FILE_APPEND);
			}

		}

    // if decode fails, it means jwt is invalid
		catch (Exception $e){

    // set response code
			http_response_code(401);

    // tell the user access denied  & show error message
			echo json_encode(array(
				"events" => "Access denied.",

			));
		}
	}
// error if jwt is empty will be here
// show error message if jwt is empty
	else{
    // set response code
		http_response_code(401);
    // tell the user access denied
		echo json_encode(array("events" => "Access denied."));
	}
	?>