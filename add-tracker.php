<html>
<head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
<body>
  <?php 
  include 'config.php';
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
         $user_insert = mysqli_query($conn,"INSERT INTO `family_user`(`monitor`, `tracker`) VALUES (".$id.",".$uid.")");
    }
  

  
   ?>


   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script type="text/javascript">
    swal({
      title: "Lưu tracker thành công ",
      text: "",
      icon: "success",button: "close"
    }).then(function() {
// Redirect the user
window.location.href = "viewfamily.php?id=<?php echo base64_encode($id);?>";
//console.log('The Ok Button was clicked.');
});
</script>
    