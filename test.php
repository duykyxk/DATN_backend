<?php 
include 'config.php';
include 'sendToASub.php';
$message = "Yêu cầu phê duyệt sự kiện ";
$re1=mysqli_query($conn, "select `playerId` from `device` where `status`=1 and `uid` in (select id from `user` where `roleId`=2) ");
while ($r1 =mysqli_fetch_array($re1)) {
	$playerId = $r1['playerId'];
	sendMessage($message, $playerId);
}

	?>