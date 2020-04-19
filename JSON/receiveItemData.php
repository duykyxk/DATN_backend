

<?php

$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$title = $data->title;
$field1 = $data->field1;
$field2 = $data->field2;
$cat2id = $data->cat2id;
$field3 = $data->field3 ;
$field4 = $data->field4 ;
$field5 = $data->field5 ;
$field6 = $data->field6 ;
$field7 = $data->field7 ;
$field8 = $data->field8 ;
$field9 = $data->field9 ;
$field10 = $data->field10 ;
$field11 = $data->field11 ;
$field12 = $data->field12 ;
$field13 = $data->field13 ;
$field14 = $data->field14 ;
$field15 = $data->field15 ;
$field16 = $data->field16 ;
$field17 = $data->field17 ;
$field18 = $data->field18 ;
$field19 = $data->field19 ;
$field20 = $data->field20 ;
$field21 = $data->field21 ;
$field22 = $data->field22 ;
$field23 = $data->field23 ;
$field24 = $data->field24 ;
$field25 = $data->field25 ;
$field26 = $data->field26 ;
$field27 = $data->field27 ;
$field28 = $data->field28 ;
$field29 = $data->field29 ;
$field30 = $data->field30 ;
$dem = 0;
include 'config.php';
$etime;
$stime;
$stime=date('Y/m/d H:i:s');

$sql="UPDATE `item` SEt `title`='".$title."',`field1`='".$field1."',`field2`='".$field2."',`field3`='".$field3."' ,`field4`='".$field4."' ,`field5`='".$field5."' ,`field6`='".$field6."' ,`field7`='".$field7."' ,`field8`='".$field8."' ,`field9`='".$field9."' ,`field10`='".$field10."' ,`field11`='".$field11."' ,`field12`='".$field12."' ,`field13`='".$field13."' ,`field14`='".$field14."' ,`field15`='".$field15."' ,`field16`='".$field16."' ,`field17`='".$field17."' ,`field18`='".$field18."' ,`field19`='".$field19."' ,`field20`='".$field20."' ,`field21`='".$field21."' ,`field22`='".$field22."' ,`field23`='".$field23."' ,`field24`='".$field24."' ,`field25`='".$field25."' ,`field26`='".$field26."' ,`field27`='".$field27."' ,`field28`='".$field28."' ,`field29`='".$field29."' ,`field30`='".$field30."', `cat2id`=".$cat2id." WHERE `id`=".$id."";
// $cs = file_put_contents("date.txt", $sql);
if ($update= mysqli_query($conn, $sql)) {

	echo json_encode(array("message" => "Data successfully uploaded") );
}

// $sql= "SELECT * FROM `item` WHERE `id`='".$id."'";
// $update= mysqli_query($conn, $sql);
// if($r=mysqli_fetch_array($update)){
// 	if (strlen($r["field1"]) > 0) $dem=$dem+1;
// 	if (strlen($r["field2"]) > 0) $dem=$dem+1;
// 	if (strlen($r["image01"]) > 0) $dem=$dem+1;
// 	if (strlen($r["image02"]) > 0) $dem=$dem+1;
// 	if (strlen($r["image03"]) > 0) $dem=$dem+1;
// 	if (strlen($r["image04"]) > 0) $dem=$dem+1;
// 	if (strlen($r["image05"]) > 0) $dem=$dem+1;
// 	if (strlen($r["image06"]) > 0) $dem=$dem+1;
// 	if (strlen($r["image07"]) > 0) $dem=$dem+1;
// 	if (strlen($r["image08"]) > 0) $dem=$dem+1;
// 	if (strlen($r["image09"]) > 0) $dem=$dem+1;
// 	if (strlen($r["image10"]) > 0) $dem=$dem+1;
	
// 	if ($dem==12) {
		
// 		$sql="UPDATE `item` SEt `etime`='".$stime."' WHERE `id`='".$id."'";
// 		$update= mysqli_query($conn, $sql);
// 	}
// 	else $etime = null;

// }
?>