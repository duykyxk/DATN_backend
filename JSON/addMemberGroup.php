<?php

include "config.php";
include "sendToASub.php";
include "sendToASubFlutter.php";

$groupId = $_GET['groupId'];
$uid = $_GET['uid'];

// save into database
$stime=date('Y/m/d H:i:s');
$sql = "INSERT INTO `group_user`(`groupId`, `uid`, `stime`) VALUES ('".$groupId."','".$uid."', '".$stime."')";
$check=mysqli_query($conn, $sql);
if($check){
	echo json_encode(array("message" => "success"));
	//send notify
	$name;
	$re= mysqli_query($conn, "select `name` from `group` where `id` ='".$groupId."' ");
	if($r = mysqli_fetch_array($re)){
		$name = $r['name'];
	}
	$message = "Bạn đã được thêm vào nhóm ".$name;
	$re1=mysqli_query($conn, "select `playerId` from `device` where `uid`=".$uid." and `status`=1");
	while ($r1 =mysqli_fetch_array($re1)) {
		$playerId = $r1['playerId'];
		sendMessage($message, $playerId);
		sendMessageFlutter($message, $playerId);
	}
	
}else echo json_encode(array("message" => "fail"));
?>