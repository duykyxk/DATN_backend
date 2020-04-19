<?php
$raw=file_get_contents("php://input");

if(isset($raw)){
	include "config.php";
	$data=json_decode($raw);
	$uid= $_GET['uid'];
	$name = $_GET['name'];
	$latitude = $_GET['latitude'];
	
	$longitude = $_GET['longitude'];

	$sqluplace="INSERT into `uplace`(`name`,`latitude`,`longitude`) values ('".$name."','".$latitude."','".$longitude."')";
	file_put_contents("date.txt", $sqluplace, FILE_APPEND);
	$check=mysqli_query($conn, $sqluplace);
	$placeID= mysqli_insert_id($conn);
	file_put_contents("date.txt", $placeID, FILE_APPEND);
	$groupId= $data->groupId;
	$nameEvent = $data->name;
	$stime = $data->stime;
	$etime =$data->etime;
	$checkPlace = $data->checkPlace;
	$description= $data->description;
	$sql="INSERT INTO `group_event`(`groupId`, `placeID`, `name`,`description`,`stime`, `etime`, `checkPlace`) VALUES ('".$groupId."','".$placeID."','".$nameEvent."','".$description."','".$stime."','".$etime."','".$checkPlace."')";
	file_put_contents("date.txt", $sql, FILE_APPEND);
	$insert = mysqli_query($conn, $sql);
	$grevId= mysqli_insert_id($conn);
	$stime =date('Y/m/d H:i:s');
	$insertuser=  mysqli_query($conn, "INSERT into `user_event` (`groupEventId`, `uid`, `status`, `time`) values ('".$grevId."','".$uid."',2,'".$stime."')");
	if($insert){
		echo json_encode(array('message' => "Success"));
	} else 
	echo json_encode(array('message' => "insert faild"));
}


?>