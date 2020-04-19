<html>
<head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
<body>
  <?php 
  include 'config.php';

  $id=$_GET['id'];
  $id=base64_decode($id);
  $monitor=$_GET['monitor'];
  $monitor=base64_decode($monitor);
  //var_dump($id);
  
         //   $sql="SELECT * FROM `user` where id='".$id."' ";
         // // var_dump($sql);
         //  $check= mysqli_query($conn, $sql);
         //  $resultcheck= mysqli_fetch_array($check,MYSQLI_ASSOC);
  
  $query="DELETE FROM `family_user` where tracker='".$id."' and monitor='".$monitor."' ";
  $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());
  
  ?>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    swal({
      title: "Tài khoản đã xóa",
      text: "User Deleted ",
      icon: "success",button: "close"
    }).then(function() {
// Redirect the user
window.location.href = "viewfamily.php?id=<?php echo base64_encode($monitor) ?>";
//console.log('The Ok Button was clicked.');
});
    </script><?php
    
    ?>
