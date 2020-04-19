
<?php
include 'config.php';
echo json_encode(array("message" => "Data successfully uploaded") );

$dem =0;

$data = json_decode(file_get_contents("php://input"));


$title = $data->title;

if (property_exists($data,"field1")){
	$field1 = $data->field1;
	$dem=$dem+1;
}

if (property_exists($data,"field2")){
	$field2 = $data->field2;
	$dem=$dem+1;
}

if (property_exists($data,"field3")){
	$field3 = $data->field3;
	$dem=$dem+1;
}
if (property_exists($data,"field4")){
	$field4 = $data->field4;
	$dem=$dem+1;
}
if (property_exists($data,"field5")){
	$field5 = $data->field5;
	$dem=$dem+1;
}
if (property_exists($data,"field6")){
	$field6 = $data->field6;
	$dem=$dem+1;
}
if (property_exists($data,"field7")){
	$field7 = $data->field7;
	$dem=$dem+1;
}
if (property_exists($data,"field8")){
	$field8 = $data->field8;
	$dem=$dem+1;
}
if (property_exists($data,"field9")){
	$field9 = $data->field9;
	$dem=$dem+1;
}
if (property_exists($data,"field10")){
	$field10 = $data->field10;
	$dem=$dem+1;
}
if (property_exists($data,"field11")){
	$field11 = $data->field11;
	$dem=$dem+1;
}
if (property_exists($data,"field12")){
	$field12 = $data->field12;
	$dem=$dem+1;
}
if (property_exists($data,"field13")){
	$field13 = $data->field13;
	$dem=$dem+1;
}
if (property_exists($data,"field14")){
	$field14 = $data->field14;
	$dem=$dem+1;
}
if (property_exists($data,"field15")){
	$field15 = $data->field15;
	$dem=$dem+1;
}
if (property_exists($data,"field16")){
	$field16 = $data->field16;
	$dem=$dem+1;
}
if (property_exists($data,"field17")){
	$field17 = $data->field17;
	$dem=$dem+1;
}
if (property_exists($data,"field18")){
	$field18 = $data->field18;
	$dem=$dem+1;
}
if (property_exists($data,"field19")){
	$field19 = $data->field19;
	$dem=$dem+1;
}
if (property_exists($data,"field20")){
	$field20 = $data->field20;
	$dem=$dem+1;
}
if (property_exists($data,"field21")){
	$field21 = $data->field21;
	$dem=$dem+1;
}
if (property_exists($data,"field22")){
	$field22 = $data->field22;
	$dem=$dem+1;
}
if (property_exists($data,"field23")){
	$field23 = $data->field23;
	$dem=$dem+1;
}
if (property_exists($data,"field24")){
	$field24 = $data->field24;
	$dem=$dem+1;
}
if (property_exists($data,"field25")){
	$field25 = $data->field25;
	$dem=$dem+1;
}
if (property_exists($data,"field26")){
	$field26 = $data->field26;
	$dem=$dem+1;
}
if (property_exists($data,"field27")){
	$field27 = $data->field27;
	$dem=$dem+1;
}
if (property_exists($data,"field28")){
	$field28 = $data->field28;
	$dem=$dem+1;
}
if (property_exists($data,"field29")){
	$field29 = $data->field29;
	$dem=$dem+1;
}
if (property_exists($data,"field30")){
	$field30 = $data->field30;
	$dem=$dem+1;
}

if (property_exists($data,"cat1id"))
	$cat1id =  $data->cat1id;

if (property_exists($data,"cat2id"))
	$cat2id=  $data->cat2id;

if (property_exists($data,"uid"))
	$uid=  $data->uid;


$stime=date('Y/m/d H:i:s');
$qr =mysqli_query($conn, " SELECT COUNT(images)
FROM `image`
WHERE `idItem`= '".$."'");
if ($dem =  mysqli_fetch_array($qr));
echo $dem['COUNT(images)'];
if ($dem==102) $etime = date('Y/m/d H:i:s');
else
	$etime = null;

$sql="INSERT INTO `item`(`uid`,`cat1id`, `cat2id`, `title`, `field1`, `field2`,`field3`, `field4`, `field5`, `field6`, `field7`, `field8`, `field9`, `field10`, `field11`, `field12`, `field13`, `field14`, `field15`, `field16`, `field17`, `field18`, `field19`, `field20`, `field21`, `field22`, `field23`, `field24`, `field25`, `field26`, `field27`, `field28`, `field29`, `field30`,`stime`,`etime`) VALUES ('".$uid."','".$cat1id."','".$cat2id."','".$title."','".$field1."','".$field2."','".$field3."' ,'".$field4."' ,'".$field5."' ,'".$field6."' ,'".$field7."' ,'".$field8."' ,'".$field9."' ,'".$field10."' ,'".$field11."' ,'".$field12."' ,'".$field13."' ,'".$field14."' ,'".$field15."' ,'".$field16."' ,'".$field17."' ,'".$field18."' ,'".$field19."' ,'".$field20."' ,'".$field21."' ,'".$field22."' ,'".$field23."' ,'".$field24."' ,'".$field25."' ,'".$field26."' ,'".$field27."' ,'".$field28."' ,'".$field29."' ,'".$field30."', '".$stime."', '".$etime."') ";
$cs = file_put_contents("date.txt", $sql);
if ($update= mysqli_query($conn, $sql)) {
	echo json_encode(array("message" => "Data successfully uploaded") );
}



?>