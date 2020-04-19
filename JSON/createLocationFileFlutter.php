<?php
include 'config.php';

$locationFile = $_POST['locationFile'];
$id = $_POST['id'];
$uid =$_POST['uid'];
$playerId =$_POST['playerId'];
$locationFile= "../Location/".$locationFile;
$statuscheck;

$sql= "SELECT status from `device` where `uid`=".$uid." and `playerId`='".$playerId."'";
$result= mysqli_query($conn, $sql);
if($r = mysqli_fetch_array($result) ){
	$statuscheck=$r['status'];
} 

if ($statuscheck ==2){
	$json2 = array("message"=>"Logout");

	echo json_encode($json2,JSON_UNESCAPED_SLASHES);
}else {
	$sql="UPDATE `user_event` SET `locationFile`='".$locationFile."' WHERE `groupEventid` =".$id." and `uid`=".$uid." ";
	if($check= mysqli_query($conn, $sql)){
		echo json_encode(array('message' => "update success" ));
	}
}
?>