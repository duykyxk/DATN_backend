<?php
include 'config.php';
$now =date("m/d/Y");
// echo date("m/d/Y");
$check = mysqli_query($conn, "Select * from `group_event`");
while($r = mysqli_fetch_array($check)){
	$time=$r['etime'];
	$a = explode(' ', $time);
	$etime= $a[1];
	$eventId= $r['id'];
	if($now>$etime){
		$updateStatusEvent=mysqli_query($conn, "Update `group_event` set status = 3 where id = '".$eventId."'");
		$checkUserMiss = mysqli_query($conn, "SELECT * from `user_event` where groupEventId='".$eventId."'");
		while ($rr=mysqli_fetch_array($checkUserMiss)) {
			# code...
			$userEventId=$rr['id'];
			if($rr['status']<4){
				$updateStatusUser=mysqli_query($conn, "Update `user_event` set status = 12 where id = '".$userEventId."'");
			}
			if($rr['status']=4){
				$updateStatusUser=mysqli_query($conn, "Update `user_event` set status = 5 where id = '".$userEventId."'");
			}
		}
	}
	
}
?>