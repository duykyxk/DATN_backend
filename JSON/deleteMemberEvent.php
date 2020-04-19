<?php 

$eventId=$_GET['eventId'];
$uid = $_GET['uid'];

include "config.php";


$query="DELETE FROM `user_event` where uid='".$uid."' and `groupEventId`=".$eventId."";
$result=mysqli_query($conn,$query);

if($result){
 echo json_encode( array('message' => "Success" )); 
} echo json_encode( array('message' => "Fail" ));
?>