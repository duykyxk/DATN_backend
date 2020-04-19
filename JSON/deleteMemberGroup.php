<?php 

$groupId=$_GET['groupId'];
$uid = $_GET['uid'];

include "config.php";



  $query="DELETE FROM `group_user` where uid='".$id."' and `groupId`=".$groupId." ";
  $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());

  $check= "select id from `group_event` where `groupId`=".$groupId."";
  $qr= mysqli_query($conn, $check);
  while ($r = mysqli_fetch_array($qr)){
    $grevid = $r['id'];
    $query="DELETE FROM `user_event` where groupEventId='".$grevid."' and `uid`=".$id."";
    $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());
  }

  if($result){
  	echo json_encode( array('message' => "Success" )); 
  } echo json_encode( array('message' => "Fail" ));
?>