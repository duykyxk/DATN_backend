<html>
<head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
<body>
  <?php 
  include 'config.php';

  $id=$_GET['id'];
  $id=base64_decode($id);
  //var_dump($id);



  $query="DELETE FROM `place` where id='".$id."' ";
  $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());
  if($result==TRUE)
  { 



    $query="DELETE FROM `cat_place` where placeId='".$id."' ";
    $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());


    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
      swal({
        title: "Place Deleted Successfully",
        text: "All data  ",
        icon: "success",button: "close"
      }).then(function() {
// Redirect the user
window.location.href = "place.php";
//console.log('The Ok Button was clicked.');
});
      </script><?php
    }else
    {?>

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script type="text/javascript">
        swal({
          title: "Place NOt Deleted",
          text: "Fail to Deleted Try again ",
          icon: "error",button: "close"
        }).then(function() {
// Redirect the user
window.location.href = "place.php";
//console.log('The Ok Button was clicked.');
});
</script>
<?php }
?>