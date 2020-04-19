<?php 
//session_destroy();
session_start();
include 'config.php';?>
<html>
    <head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
    <body>
    <?php
  $mainpath=$_GET['img'];
$clickid=$_GET['clickid'];
  $id=$_SESSION['placemain_id'];
  $placeidincat=$_SESSION['place_id'];

$path=str_replace($serveradd,'',$mainpath);
$defimg=str_replace($serveradd,'',$defimg);
  //echo $path;
  //exit();
if($path==$defimg){ ?><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "You can't delete default image",
  text: "fail to perform action ",
  icon: "error",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script><?php exit(); }else{

$sql="SELECT * FROM `app_placesmain` where id='".$id."' ";
         //var_dump($sql);

          $check= mysqli_query($conn, $sql);
          $resultcheck= mysqli_fetch_array($check,MYSQLI_ASSOC);
          //echo'<pre>'; var_dump($resultcheck);
                  
          $pid=$resultcheck['place_id'];
//var_dump($pid);










switch ($clickid) {
    case 1:
        $sql="UPDATE `app_placesmain` SET image1='NULL' where id='".$id."' ";
         //var_dump($sql);

          $check= mysqli_query($conn, $sql); 
          
          $query="UPDATE `app_places` SET image1='NULL' where place_id='".$pid."' ";
          $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());
         // echo $path;
         // exit();
          unlink($path);
          
          
          ?>
           <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "Image Deleted Successfully",
  text: "Now you can add new one ",
  icon: "success",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>

<!-----------------------------------SECOND IMAGE CASE ----------------------------------------------------------->
<?php
        break; 
         
        case 2:
        
        $sql="UPDATE `app_placesmain` SET image2='NULL' where id='".$id."' ";
         //var_dump($sql);

          $check= mysqli_query($conn, $sql); 
          
          $query="UPDATE `app_places` SET image2='NULL' where place_id='".$pid."' ";
          $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());
          unlink($path);
          
          
          ?>
           <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "Image Deleted Successfully",
  text: "Now you can add new one ",
  icon: "success",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>

<!-----------------------------------------------------------case  start-------------------------->

<!-----------------------------------SECOND IMAGE CASE ----------------------------------------------------------->
<?php
        break; 
         
        case 3:
        
        $sql="UPDATE `app_placesmain` SET image3='NULL' where id='".$id."' ";
         //var_dump($sql);

          $check= mysqli_query($conn, $sql); 
          
          $query="UPDATE `app_places` SET image3='NULL' where place_id='".$pid."' ";
          $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());
          unlink($path);
          
          
          ?>
           <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "Image Deleted Successfully",
  text: "Now you can add new one ",
  icon: "success",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>
<!----------------------------------------------------case 4 -------------------------------------------------->
<?php
        break; 
         
        case 4:
        
        $sql="UPDATE `app_placesmain` SET image4='NULL' where id='".$id."' ";
         //var_dump($sql);

          $check= mysqli_query($conn, $sql); 
          
          $query="UPDATE `app_places` SET image4='NULL' where place_id='".$pid."' ";
          $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());
          unlink($path);
          
          
          ?>
           <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "Image Deleted Successfully",
  text: "Now you can add new one ",
  icon: "success",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>
<!----------------------------------------------------case 4 -------------------------------------------------->
<php <?php
        break; 
         
        case 5:
        
        $sql="UPDATE `app_placesmain` SET image5='NULL' where id='".$id."' ";
         //var_dump($sql);

          $check= mysqli_query($conn, $sql); 
          
          $query="UPDATE `app_places` SET image5='NULL' where place_id='".$pid."' ";
          $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());
          unlink($path);
          
          
          ?>
           <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "Image Deleted Successfully",
  text: "Now you can add new one ",
  icon: "success",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>
<!----------------------------------------------------case 4 -------------------------------------------------->
    <?php break;
          }
           }?>