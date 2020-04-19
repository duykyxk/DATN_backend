
<?php
include 'config.php';

$data = json_decode(file_get_contents("php://input"));


if (property_exists($data, "user_group")){
	$user_group = $data->user_group;
}
if (property_exists($data, "longitude")){
	$longitude = $data->longitude;
}
if (property_exists($data, "latitude")){
	$latitude = $data->latitude;
}
if (property_exists($data, "time")){
	$time = $data->time;
}

$uid = $_GET['uid'];
$dt = "$longitude,"."$latitude,"."$time"."\n";
// $stime=date('Y/m/d H:i:s');


$sql="SELECT `locationFile` FROM `user_event` WHERE `groupEventId`='".$user_group."' and uid =".$uid."";

$update= mysqli_query($conn, $sql);
if($r = mysqli_fetch_array($update) ) 
	$locationFile= $r[0];

file_put_contents("$locationFile",$dt, FILE_APPEND );
echo json_encode(array('message' =>"success") );


?>