
<?php
include 'config.php';
include 'sendToASub.php';include 'sendToASubFlutter.php';

// insert
// $stime=date('Y/m/d H:i:s');

		// $sql="ALTER TABLE `group_event` ADD `uid` INT NOT NULL AFTER `status`, ADD `time` VARCHAR(255) NOT NULL AFTER `uid`;";
		// $check= mysqli_query($conn, $sql);
// $stime=date('Y/m/d H:i:s');
// 	$sql="INSERT INTO `family_user`(`monitor`,  `tracker`, `time`) VALUES (20,15,'".$stime."'), (20,16,'".$stime."'),(20,17,'".$stime."'),(21,17,'".$stime."'),(21,18,'".$stime."'),(21,19,'".$stime."') ";
// 		$check= mysqli_query($conn, $sql);


// $sql=mysqli_query($conn, "INSERT INTO `status`(`id`, `name`) VALUES (12,'Người dùng bỏ lỡ sự kiện')");
// 		$check= mysqli_query($conn, $sql);
		// $sql="INSERT INTO `group_event`(`groupId`, `placeID`, `name`, `description`, `stime`, `etime`) VALUES (3,6,'Cầu Long Biên','Chạy qua cầu ','2019/07/27 00:00:00','2019/07/31 00:00:00') ";
		// $check= mysqli_query($conn, $sql);
		// $sql="INSERT INTO `group_event`(`groupId`, `placeID`, `name`, `description`, `stime`, `etime`) VALUES (2,5,'Đại học Bách Khoa','Thăm thư viện','2019/07/27 00:00:00','2019/07/31 00:00:00') ";
		// $check= mysqli_query($conn, $sql);
	// request table
// echo "a";
		// $sql="SELECT * FROM `group_event` ";
		// // echo ($sql);
		// // $cs = file_put_contents("date.txt", $sql, FILE_APPEND);
		// $check= mysqli_query($conn, $sql);
		// while ($r=mysqli_fetch_array($check)) {
		// 	echo $r['id'];
		// 	echo "_______";
$sql1="select * from `status` ";
// 		// echo ($sql);
// 		// $cs = file_put_contents("date.txt", $sql, FILE_APPEND);
$check1= mysqli_query($conn, $sql1);
while($rr=mysqli_fetch_array($check1)){
	echo $rr['id'];
	echo "_";
	echo $rr['name'];
echo "_";
	// echo $rr['status'];
			// echo $rr['status'];
			// echo "_______";
			// echo $rr['uid'];
	echo "|||||||||||||| ";
}



?>


</body>
</html> 