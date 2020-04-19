<html>
<head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
<body>
  <?php 
  include 'config.php';
  include 'sendToASub.php';
  include 'sendToASubFlutter.php';
  $id=$_GET['id'];
  $id= base64_decode($id);

  $adduser = $_POST['adduser'];
  $n = count($adduser);

  for($i = 0 ; $i<$n; $i ++){
    $uid=0;
    $uidqr = mysqli_query($conn,"SELECT `id` FROM `user` WHERE email ='".$adduser[$i]."'");
    if($r=mysqli_fetch_array($uidqr)){
      $uid=$r[0];
     
    }

    $stime=date('Y/m/d H:i:s'); 
    $user_insert = mysqli_query($conn,"INSERT INTO `user_event`(`groupEventId`, `uid`,  `status`) VALUES (".$id.",".$uid.",9)");
    $monitorr= mysqli_query($conn, "select monitor from family_user where `tracker`=".$uid."");
    while ($rr = mysqli_fetch_array($monitorr)) {
      $monitor=$rr['monitor'];
      $message = "Yêu cầu phê duyệt sự kiện ";
      $re1=mysqli_query($conn, "select `playerId` from `device` where `status`=1 and `uid` = ".$monitor." ");
      while ($r1 =mysqli_fetch_array($re1)) {
        $playerId = $r1['playerId'];
        sendMessage($message, $playerId);
        sendMessageFlutter($message, $playerId);
      }
         // echo "INSERT INTO `user_event`(`groupEventId`, `uid`,  `status`) VALUES (".$id.",".$uid.",9)";
    }
  }


    ?>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
      swal({
        title: "Lưu user thành công ",
        text: "",
        icon: "success",button: "close"
      }).then(function() {
// Redirect the user
window.location.href = "addMemberEvent.php?id=<?php echo base64_encode($id);?>";
//console.log('The Ok Button was clicked.');
});
</script>
