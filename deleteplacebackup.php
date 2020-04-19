<html>
    <head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
    <body>
<?php 
include 'config.php';

  $id=$_GET['id'];
  $id=base64_decode($id);
  //var_dump($id);

        
           $sql="SELECT * FROM `app_placesmain` where id='".$id."' ";
         //var_dump($sql);

          $check= mysqli_query($conn, $sql);
          $resultcheck= mysqli_fetch_array($check,MYSQLI_ASSOC);
          //echo'<pre>'; var_dump($resultcheck);
          $imgpath=$resultcheck['image'];
          $op1=$resultcheck['image1'];
          $op2=$resultcheck['image2'];
          $op3=$resultcheck['image3'];
          $op4=$resultcheck['image4'];
          $op5=$resultcheck['image5'];          
          $pid=$resultcheck['place_id'];
//var_dump($pid);


          $query="DELETE FROM `app_placesmain` where id='".$id."' ";
          $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());
          if($result==TRUE)
                                    {
              unlink($imgpath);
unlink($op1);
unlink($op2);
unlink($op3);
unlink($op4);
unlink($op5);


$query="DELETE FROM `app_places` where place_id='".$pid."' ";
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
window.location.href = "places.php";
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
window.location.href = "places.php";
//console.log('The Ok Button was clicked.');
});
</script>
         <?php }
          ?>