
<?php
include 'config.php';
$id;
$data = json_decode(file_get_contents("php://input"));



if (property_exists($data, "uid")){
	$uid = $data->uid;
}
if (property_exists($data, "end")){
	$end = $data->end;
}



$stime=date('Y/m/d H:i:s');

	
	$sql="INSERT INTO `route`(`uid`, `end`, `stime`) VALUES ('".$uid."','".$end."','".$stime."') ";
	$cs = file_put_contents("date.txt", $sql);
	if ($update= mysqli_query($conn, $sql)) {
		$id = mysqli_insert_id($conn);
		$cs = file_put_contents("date.txt", $id);
		echo json_encode(array('message' =>"$id") );
	}

?>