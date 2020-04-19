
<?php

$data = file_get_contents("php://input");
if (isset($data)) {

include 'config.php';
$url = "../uploads/".$data."";

// unlink($url);
$id = substr($data, 7,-4);
$name = substr($data, 0, 7);

$sql="UPDATE `item` SEt `".$name."`= null WHERE `id`='".$id."'";

if ($update= mysqli_query($conn, $sql)) {
	$d = ['success' => true, 'message' => 'Delete success'];
	echo json_encode( $d );
}
}
?>
