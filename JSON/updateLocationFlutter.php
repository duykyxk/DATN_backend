
<?php
include 'config.php';
$body= $_POST['body'];
$data = json_decode($body);
$playerId=$_POST['playerId'];

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

$uid = $_POST['uid'];
$dt = "$longitude,"."$latitude,"."$time"."\n";
// $stime=date('Y/m/d H:i:s');

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
	$sql="SELECT `locationFile` FROM `user_event` WHERE `groupEventId`='".$user_group."' and uid =".$uid."";

	$update= mysqli_query($conn, $sql);
	if($r = mysqli_fetch_array($update) ) 
		$locationFile= $r[0];

	file_put_contents("$locationFile",$dt, FILE_APPEND );
	echo json_encode(array('message' =>"success") );

}
?>