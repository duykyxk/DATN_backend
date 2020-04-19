<?php
$raw=file_get_contents("php://input");

if(isset($raw)){
	include "config.php";
	$data=json_decode($raw);
	$eventId= $_GET['eventId'];
	$name = $_GET['name'];
	$latitude = $_GET['latitude'];
	$longitude = $_GET['longitude'];
	$status = $_GET['status'];

	$groupId= $data->groupId;
	$nameEvent = $data->name;
	$stime = $data->stime;
	$etime =$data->etime;
	$checkPlace = $data->checkPlace;
	$description= $data->description;
	if($status==1){
		$sqluplace="INSERT into `uplace`(`name`,`latitude`,`longitude`) values ('".$name."','".$latitude."','".$longitude."')";
		file_put_contents("date.txt", $sqluplace, FILE_APPEND);
		$check=mysqli_query($conn, $sqluplace);
		$placeID= mysqli_insert_id($conn);
		file_put_contents("date.txt", $placeID, FILE_APPEND);
		$sql="UPDATE `group_event` set `placeID` ='".$placeID."', `name`='".$nameEvent."',`description`='".$description."',`stime`='".$stime."', `etime`='".$etime."', `checkPlace`='".$checkPlace."' where id = ".$eventId." ";
		file_put_contents("date.txt", $sql, FILE_APPEND);
		$insert = mysqli_query($conn, $sql);
	} else{
		$sql="UPDATE `group_event` set  `name`='".$nameEvent."',`description`='".$description."',`stime`='".$stime."', `etime`='".$etime."', `checkPlace`='".$checkPlace."' where id = ".$eventId." ";
		file_put_contents("date.txt", $sql, FILE_APPEND);
		$insert = mysqli_query($conn, $sql);
	} 
	
	
	
	
	if($insert){
		echo json_encode(array('message' => "Success"));
	} else 
	echo json_encode(array('message' => "insert faild"));
}


?>