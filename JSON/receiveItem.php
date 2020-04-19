<?php
// header('Access-Control-Allow-Origin: *');
$target_path = "../uploads/item/";
include 'config.php';


$target_path = $target_path . basename( $_FILES['file']['name']);

if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
	// header('Content-type: application/json');
	$name = $_FILES['file']['name'];
	$stt = substr($name, 0, 7);
	$id = substr($name, 7);
	$target_path = "http://vnitts.com/ionic".$target_path;
	$mysql = "UPDATE `item` SET `".$stt."` ='".$target_path."'  WHERE `id`='".$id."'";
	$query = mysqli_query($conn, $mysql);

	echo json_encode( array("message" => "File successfully uploaded") );
} else{
	header('Content-type: application/json');
	// $data = ['success' =>  'There was an error uploading the file, please try again!'];
	// echo json_encode( $data );
}

?>