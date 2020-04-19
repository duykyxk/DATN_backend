<?php
unset($_SESSION['result']);
include 'header.php';

$title=$_POST['title'];
$msg=$_POST['msg'];
$place_id=$_POST['place'];

$sql="SELECT image FROM `app_placesmain` where place_id='".$place_id."' ";
         
          $check= mysqli_query($conn, $sql);
          $resultcheck= mysqli_fetch_array($check,MYSQLI_ASSOC);

$image=$resultcheck['image'];
//echo $image;
$random=rand(0,999);
$data=array("title"=>$title,"message"=>$msg,"image"=>$image,"place_id"=>$place_id,"random_id"=>$random);

////////////////////////////////GETTING DEVICE DATA///////////////////////////////////


$sql="SELECT * FROM `devices`";
         
          $checkdevices= mysqli_query($conn, $sql);
         
$DeviceIdsArr= array();
//Prepare device ids array
while($rowData = mysqli_fetch_array($checkdevices,MYSQLI_ASSOC)) {
    $DeviceIdsArr[] = $rowData['token'];
}

///////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////SENDING CNOTIFICATION//////////////////////////////////////////


require("fcm.php");
 
$fcm = new Fcm();//Create Fcm class object
 
$dataArr = array();
$dataArr['device_id'] = $DeviceIdsArr;//fcm device ids array which is created previously
$dataArr['message'] = $data['message'];//Message which you want to send
$dataArr['image'] = $data['image']; 
$dataArr['title'] = $data['title'];
$dataArr['place_id'] = $data['place_id'];
$dataArr['random_id']=$data['random_id'];
//Send Notification
$fcm->sendNotification($dataArr);

$results[]=json_decode($_SESSION['result']);
$success=$results[0]->success;
 
if($success!=''){?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script type="text/javascript">
   swal({
 title: "Notification sent",
  text: "successfully ",
  icon: "success",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "notification.php";
//console.log('The Ok Button was clicked.');
});
   </script>
<?php } else echo "không thành công"?>
