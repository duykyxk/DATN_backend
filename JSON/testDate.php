<?php
// for ($i =11;  $i <=100; $i++){
// 	echo "if (property_exists(\$data,\"image$i\")){
// 	\$image$i=  \$data->image$i;
// 	\$dem=\$dem+1;
// }";
// }

// if(isset($_POST["submit"])) {
//     if(is_array($_FILES)) {


//         $file ="http://vnitts.com/ionic100/uploads/item//image015.jpg";
//         $sourceProperties = getimagesize($file);
//         $fileNewName = time();
//         $folderPath = "../uploads/item/aa.jpg";
        
//         $imageType = $sourceProperties[2];


//         switch ($imageType) {


//             case IMAGETYPE_PNG:
//                 $imageResourceId = imagecreatefrompng($file); 
//                 $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
//                 imagepng($targetLayer,$folderPath);
//                 echo $targetLayer;
//                 break;


//             case IMAGETYPE_GIF:
//                 $imageResourceId = imagecreatefromgif($file); 
//                 $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
//                 imagegif($targetLayer,$folderPath);
//                 echo $targetLayer;
//                 break;


//             case IMAGETYPE_JPEG:
//                 $imageResourceId = imagecreatefromjpeg($file); 
//                 $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
//                 imagejpeg($targetLayer,$folderPath);
//                 echo $targetLayer;
//                 break;


//             default:
//                 echo "Invalid Image type.";
//                 exit;
//                 break;
//         }


//         move_uploaded_file($file, $folderPath);
//         echo " $file";
// //     }
// // }


// function imageResize($imageResourceId,$width,$height) {


//     $targetWidth =200;
//     $targetHeight =200;
//     $targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
//     imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);
//     return $targetLayer;
// }
$file ='../uploads/item/image015.jpg';
$target_path99 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image015s.jpg';
	resizeImage($target_path99, 5, $filename);

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


