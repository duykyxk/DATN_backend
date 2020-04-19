<?php

include "config.php";

$raw = file_get_contents("php://input");
// $cs = file_put_contents("date.txt", $raw);
$data = json_decode($raw);
// $cs = file_put_contents("date.txt", $data);
$image = $data->images;
// $cs = file_put_contents("date.txt", $image, FILE_APPEND);
$idItem = $data->idItem;
$cs = file_put_contents("date.txt", $idItem, FILE_APPEND);
$stt = $data->stt;
$cs = file_put_contents("date.txt", $stt, FILE_APPEND);
$image = str_replace('data:image/png;base64,', '', $image);
$image = str_replace(' ', '+', $image);
// $cs = file_put_contents("date.txt", $image,FILE_APPEND);
$dt = base64_decode($image);
if($stt<10){
	
	$file ='../uploads/item/image0'.$stt.$idItem.'.jpg';
	$cs = file_put_contents("date.txt", $file, FILE_APPEND);
	$success = file_put_contents($file, $dt);
	$target_path = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image0'.$stt.$idItem.'s.jpg';
	resizeImage($target_path, $idItem, $filename);
	$target_paths="http://vnitts.com/ionic100".$filename;
	$cs = file_put_contents("date.txt", $target_paths, FILE_APPEND);
}
else {

	$file ='../uploads/item/image'.$stt.$idItem.'.jpg';
	$cs = file_put_contents("date.txt", $file, FILE_APPEND);
	$success = file_put_contents($file, $dt);
	$target_path = "http://vnitts.com/ionic100".$file;
	$cs = file_put_contents("date.txt", $target_path, FILE_APPEND);
	$filename = '../uploads/item/image'.$stt.$idItem.'s.jpg';
	resizeImage($target_path, $idItem, $filename);
	$target_paths="http://vnitts.com/ionic100".$filename;
	$cs = file_put_contents("date.txt", $target_paths, FILE_APPEND);
}


//$stime=date('Y/m/d H:i:s');
$sqlCheck="SELECT * FROM `item` WHERE `id`='".$idItem."' AND `stt` = '".$stt."'";
if (!($check= mysqli_query($conn, $sqlCheck))){
	$mysql = "INSERT INTO `image`(`idItem`, `stt`, `imager`, `images`) VALUES ('".$idItem."','".$stt."','".$target_path."','".$target_paths."')";
	$cs = file_put_contents("date.txt", $mysql, FILE_APPEND);
	if($query = mysqli_query($conn, $mysql)){
		echo json_encode( array("message" => "File successfully uploaded") );
	};
}
// $sql= "SELECT * FROM `item` WHERE `id`='".$idItem."'";
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
// 	}else $etime = null;

// }

function resizeImage($file, $id, $filename){

	$sourceProperties = getimagesize($file);
	// $fileNewName = '../uploads/item/image10'.$id.'s.jpg';
	$imageType = $sourceProperties[2];


	switch ($imageType) {


		case IMAGETYPE_PNG:
		$imageResourceId = imagecreatefrompng($file); 
		$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
		imagepng($targetLayer, $filename);
		break;


		case IMAGETYPE_GIF:
		$imageResourceId = imagecreatefromgif($file); 
		$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
		imagegif($targetLayer, $filename);
		break;


		case IMAGETYPE_JPEG:
		$imageResourceId = imagecreatefromjpeg($file); 
		$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
		imagejpeg($targetLayer,$filename);
		break;


		default:
		echo "Invalid Image type.";
		exit;
		break;
	}


	move_uploaded_file($file,$filename);
	// echo "Image Resize Successfully.";
}

function imageResize($imageResourceId,$width,$height) {


	$targetWidth =200;
	$targetHeight =200;
	$targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
	imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);
	return $targetLayer;
}
?>