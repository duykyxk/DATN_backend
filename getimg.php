<?php
include_once("config.php");
if($_REQUEST['placeid']) {
$sql = "SELECT image FROM app_placesmain WHERE place_id='".$_REQUEST['placeid']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$data = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$data = $rows;
}
echo json_encode($data,JSON_UNESCAPED_SLASHES);
} else {
echo 0;
}
?>

