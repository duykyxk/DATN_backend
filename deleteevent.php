<html>
    <head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
    <body>
<?php 
include 'config.php';

  $id=$_GET['id'];
  $id=base64_decode($id);
  //var_dump($id);
        
       
          
           $query="DELETE FROM `group_event` where id='".$id."' ";
          $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());
           $query="DELETE FROM `user_event` where groupEventId='".$id."' ";
          $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());
              ?>
               <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "Event đã xóa",
  text: "Event Image Deleted ",
  icon: "success",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "event.php";
//console.log('The Ok Button was clicked.');
});
</script><?php
         
          ?>
