<?php

include "config.php";
$id = $_GET['id'];
$uid = $_GET['uid'];
$locationFile;
$sql="SELECT `locationFile` FROM `user_event` WHERE `groupEventId`='".$id."' and `uid`=".$uid."";
$cs = file_put_contents("date.txt", $sql);
$update= mysqli_query($conn, $sql);
if($r = mysqli_fetch_array($update) ) 
	$locationFile= $r[0];

$cs = file_put_contents("date.txt", $locationFile, FILE_APPEND);
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

?>