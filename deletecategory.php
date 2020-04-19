<html>
    <head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
    <body>
<?php 
include 'config.php';

  $id=$_GET['id'];
  $id=base64_decode($id);
  //var_dump($id);
        
         //   $sql="SELECT * FROM `cat` where id='".$id."' ";
         // // var_dump($sql);
         //  $check= mysqli_query($conn, $sql);
         //  $resultcheck= mysqli_fetch_array($check,MYSQLI_ASSOC);
          
          $query="DELETE FROM `cat` where id='".$id."' ";
          $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());
              ?>
               <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "Category đã xóa",
  text: "Category Image Deleted ",
  icon: "success",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "category.php";
//console.log('The Ok Button was clicked.');
});
</script><?php
         
          ?>
