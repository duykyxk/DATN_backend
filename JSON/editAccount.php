<?php
include "config.php";

$body=$_POST['body'];
$data = json_decode($body);
$playerId=$_POST['playerId'];
$id = $data->id;
$name = $data->name;
$phone =  $data->phone;
$address= $data->address;
$email = $data->email;

$statuscheck;

$sql= "SELECT status from `device` where `uid`=".$id." and `playerId`='".$playerId."'";
$result= mysqli_query($conn, $sql);
if($r = mysqli_fetch_array($result) ){
	$statuscheck=$r['status'];
} 

if ($statuscheck ==2){
	$json2 = array("message"=>"Logout");

	echo json_encode($json2,JSON_UNESCAPED_SLASHES);
}else {

	if (property_exists($data,"password")){
		$password = $data->password;
		if($password!=null){
			$password_hash = password_hash($password, PASSWORD_BCRYPT);
			$sql = "UPDATE `user` SET `password`='".$password_hash."',`name`='".$name."',`phone`='".$phone."',`address`='".$address."', `email`='".$email."' WHERE id='".$id."'";
			$cs = mysqli_query($conn,$sql);
			$cs = file_put_contents("date.txt", $sql, FILE_APPEND);
			echo json_encode(array("message" => "Data successfully uploaded") );
		}
		else{
			$sql ="UPDATE `user` SET `name`='".$name."',`phone`='".$phone."',`address`='".$address."', `email`='".$email."' WHERE id='".$id."'";
			$cs = mysqli_query($conn,$sql);
			$cs = file_put_contents("date.txt", $sql, FILE_APPEND);
			echo json_encode(array("message" => "Data successfully uploaded") );
		}
	}else{

		$sql ="UPDATE `user` SET `name`='".$name."',`phone`='".$phone."',`address`='".$address."', `email`='".$email."' WHERE id='".$id."'";
		$cs = mysqli_query($conn,$sql);
		$cs = file_put_contents("date.txt", $sql, FILE_APPEND);
		echo json_encode(array("message" => "Data successfully uploaded") );
	}
}
?>