<html>
<head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
<body>
  <?php 
  include 'config.php';
  if(isset($_POST['addevent']))
  {
//echo 'button pressed';
    $ok=0;
    $name = $_POST['eventname'];
    $time = $_POST['time'];

$id=$_GET['id'];
  $id= base64_decode($id);
  

  $group= $_POST['groupId'];
  $sql= "select id from `group` where name='".$group."'";
  $checkgr= mysqli_query($conn, $sql);
  if($r =  mysqli_fetch_array($checkgr))
    $groupId= $r['0'];
  $place= $_POST['placeId'];
  $sql= "select id from `place` where name='".$place."'";
  
  $checkpl= mysqli_query($conn, $sql);
  if($r =  mysqli_fetch_array($checkpl))
    $placeId= $r['0'];
  $des= $_POST['eventdes'];
$a = explode('-', $time);
$stime= $a[0];
$etime= $a[1];


  $event_insert = mysqli_query($conn,"UPDATE `group_event` SET `groupId` ='".$groupId."', `placeID`='".$placeId."', `name`='".$name."', `description`='".$des."', `stime`='".$stime."', `etime`='".$etime."' where id='".$id."'");

  ?>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    swal({
      title: "Event Updated ",
      text: "Successfully",
      icon: "success",button: "close"
    }).then(function() {
// Redirect the user
window.location.href = "event.php";
//console.log('The Ok Button was clicked.');
});
</script>
<?php





}

else {

  header("location:dashboard.php"); }
