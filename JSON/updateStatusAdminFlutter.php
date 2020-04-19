<?php
include 'config.php';
include 'sendToASub.php';
include 'sendToASubFlutter.php';
$status = $_POST['status'];
// file_put_contents("date.txt", $status, FILE_APPEND);
$id = $_POST['id'];
// file_put_contents("date.txt", $id, FILE_APPEND);
$time = $_POST['time'];
// file_put_contents("date.txt", $time, FILE_APPEND);
$uid =$_POST['uid'];
$playerId = $_POST['playerId'];
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

	if ($time!="0")
		$sql="UPDATE `group_event` SET `status`=".$status.",`time`='".$time."', `uid`=".$uid." WHERE `id` =".$id."";
	else $sql="UPDATE `group_event` SET `status`=".$status.", `uid`=".$uid." WHERE `id` =".$id."";
	if($check= mysqli_query($conn, $sql)){
		echo json_encode(array('message' => "update success" ));
	}
	$grId;

	if($status == "2"){
		$uidarr = array();
		$sqlgr = "SELECT groupId from `group_event`  WHERE `id` =".$id."";
		$result= mysqli_query($conn, $sqlgr);
		if($r=mysqli_fetch_array($result)){
			$grId= $r['groupId'];
		}
		$sqlugr = "SELECT uid from `group_user`  WHERE `groupId` =".$grId."";
		$resultu= mysqli_query($conn, $sqlugr);
		while($ru=mysqli_fetch_array($resultu)){

			$uida= $ru['uid'];
			$uidarr[] = $uida;
			$user_insert = mysqli_query($conn,"INSERT INTO `user_event`(`groupEventId`, `uid`,  `status`) VALUES (".$id.",".$uida.",9)");
		}
		for($i=0; $i<count($uidarr);$i++){
			$monitorr= mysqli_query($conn, "select monitor from family_user where `tracker`=".$uidarr[$i]."");
			while ($rr = mysqli_fetch_array($monitorr)) {
				$monitor=$rr['monitor'];
				$message = "Yêu cầu phê duyệt sự kiện ";
				$re1=mysqli_query($conn, "select `playerId` from `device` where `status`=1 and `uid` = ".$monitor." ");
				while ($r1 =mysqli_fetch_array($re1)) {
					$playerId = $r1['playerId'];
					sendMessage($message, $playerId);
					sendMessageFlutter($message, $playerId);
				}
         // echo "INSERT INTO `user_event`(`groupEventId`, `uid`,  `status`) VALUES (".$id.",".$uid.",9)";
			}
		}
	}
}
?>