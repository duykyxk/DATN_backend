
<?php

$eventId= $_GET['eventId'];
$cs = file_put_contents("date.txt", $eventId, FILE_APPEND);
include 'config.php';
$json ;
$json1;
$a = "SELECT `groupId` from `group_event` where `id`=".$eventId."";
$cs = file_put_contents("date.txt", $a, FILE_APPEND);
$sql1= mysqli_query($conn,$a );

if ($check1=mysqli_fetch_array($sql1))
$groupId=$check1['groupId'];

$sql=	"SELECT user.`id`, user.`name`, user.`code`, user.`phone`, user.`email`, user.`address` FROM user INNER JOIN `group_user` on user.`id`= `group_user`.`uid` WHERE `group_user`.`groupId`=".$groupId."  and `user`.`id` not in (SELECT `uid` from `user_event` where `user_event`.`groupEventId`='".$eventId."')";

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

$json2 = array("users"=>$json1);

echo json_encode($json2,JSON_UNESCAPED_SLASHES);


?>