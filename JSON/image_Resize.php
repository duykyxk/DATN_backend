<?php 
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
}?>