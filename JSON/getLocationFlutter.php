<?php

include "config.php";
$id = $_POST['id'];
$uid = $_POST['uid'];
$userId = $_POST['userId'];
$playerId = $_POST['playerId'];

$sql= "SELECT status from `device` where `uid`=".$userId." and `playerId`='".$playerId."'";
$result= mysqli_query($conn, $sql);
if($r = mysqli_fetch_array($result) ){
	$statuscheck=$r['status'];
} 

if ($statuscheck ==2){
	$json2 = array("location"=>"Logout");

	echo json_encode($json2,JSON_UNESCAPED_SLASHES);
}else {
	$locationFile;
	$sql="SELECT `locationFile` FROM `user_event` WHERE `groupEventId`='".$id."' and `uid`=".$uid."";
	$cs = file_put_contents("date.txt", $sql);
	$update= mysqli_query($conn, $sql);
	if($r = mysqli_fetch_array($update) ) 
		$locationFile= $r[0];


	$pieces;
	$route;
	$file_lines = file("$locationFile");
	foreach ($file_lines as $line) {
    // echo $line;
		$pieces = explode(",", $line);
		$pieces[2] = str_replace("\r\n", "", $pieces[2]);
		$route[]= array('longitude'=>$pieces[0], 'latitude'=>$pieces[1],'time'=>$pieces[2]);

	}
	$json= array("location" => $route );
	echo json_encode($json) ;
}
?>