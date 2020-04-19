<?php
include "header.php";
// $sql = "UPDATE `group_event` SET `groupId` ='3', `placeID`='3', `name`='Đi xe máy', `description`='Đi bằng 2 chân', `stime`='08/02/2019 12:00 AM ', `etime`=' 08/03/2019 12:00 AM' where id='9'  
//  ";
// $check= mysqli_query($conn, $sql);

// $sql = "ALTER TABLE `user_event` ADD `time` VARCHAR(255) NULL AFTER `status`";
// $check = mysqli_query($conn, $sql);
// while($r = mysqli_fetch_array($check)){
// 	echo $r['uid'];
// echo $r['groupId'];
// }
// $time = "08/02/2019 12:00 AM - 08/03/2019 12:00 AM";
// $a = explode('-', $time);
// echo $a[0];
// echo $a[1];

// $currentTimeinSeconds = time();  
//   $a=11111111111;
// $code= $currentTimeinSeconds.$a;

// echo $code;
$sql="select * from `user_event` where`id` =10 ";
$check = mysqli_query($conn, $sql);
if($r=mysqli_fetch_array($check)){
	echo $r['status'];
}
?>
