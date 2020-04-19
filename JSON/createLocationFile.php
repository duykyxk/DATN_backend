<?php
include 'config.php';

$locationFile = $_GET['locationFile'];
$id = $_GET['id'];
$uid =$_GET['uid'];
$locationFile= "../Location/".$locationFile;
$sql="UPDATE `user_event` SET `locationFile`='".$locationFile."' WHERE `groupEventid` =".$id." and `uid`=".$uid." ";
if($check= mysqli_query($conn, $sql)){
	echo json_encode(array('message' => "update success" ));
}

?>