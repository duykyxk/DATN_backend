<?php
include 'config.php';
$routeId = $_GET['routeId'];

$locationSql =  "SELECT min(`id`) FROM `location` where `routeId`='".$routeId."'";
$qr =  mysqli_query($conn, $locationSql );
if( $r = mysqli_fetch_array($qr)) 
	$start = $r[0];
$etime=date('Y/m/d H:i:s');
$mysql = "UPDATE `route` SET `start`='".$start."',`etime`='".$etime."' WHERE `id` = '".$routeId."'";
if(mysqli_query($conn, $mysql))
 echo json_encode( array('message' => $start ));
?>