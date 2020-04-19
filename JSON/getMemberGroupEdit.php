
<?php

$groupId= $_GET['groupId'];
// $cs = file_put_contents("date.txt", $eventId, FILE_APPEND);
include 'config.php';

$json1;

if(isset($groupId)){
	$sql="SELECT user.`id`, user.`name`, user.`code`, user.`phone`, user.`email`, user.`address` FROM user INNER JOIN `group_user` on user.`id`= `group_user`.`uid` WHERE `group_user`.`groupId`=".$groupId."";

$cs = file_put_contents("date.txt", $sql, FILE_APPEND);
$check= mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($check)) {
				// $jsonimage[] =array(); 
	$id = $row['id'];
	$name = $row['name'];
	$code = $row['code'];
	$phone=$row['phone'];
	$email=$row['email'];
	$address=$row['address'];


	$json1 []= array("id" => $id,"name"=>$name,"code"=>$code, "phone"=>$phone,"email"=>$email,"address"=>$address);

}

$json2 = array("users"=>$json1);
$cs = file_put_contents("date.txt", json_encode($json2,JSON_UNESCAPED_SLASHES));
echo json_encode($json2,JSON_UNESCAPED_SLASHES);
}

?>