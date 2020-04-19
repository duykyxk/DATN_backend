<html>
<head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
<body>
  <?php 
  include 'config.php';
  session_start();
  $uid =  $_SESSION['id'];
  if(isset($_POST['addgroup']))
  {

    $ok=0;
    $name = $_POST['groupname'];
///////////////////////////////////////////////////
    $sql="SELECT * FROM `group` ";
         // var_dump($sql);
    $check= mysqli_query($conn, $sql);
    $resultcheck= mysqli_fetch_array($check,MYSQLI_BOTH);
         // $catname=$resultcheck['category_name'];


    foreach($check as $checkgroup){
      if($checkgroup['name']==$name)
      {
        $ok=1;
      }else{
        $ok=0;
      }
    }

    if($ok==1){?>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
      swal({
        title: "Group đã tồn tại ",
        text: "Hãy chọn một tên khác",
        icon: "error",button: "close"
      }).then(function() {
// Redirect the user
window.location.href = "group.php";
//console.log('The Ok Button was clicked.');
});
</script>
<?php 
}else{          

  $parent = $_POST['groupparent'];
  if ($parent == "Không có group cha") {
   $parentId=0;
 }else {
   $getgroupid = mysqli_query($conn, "SELECT * from `group` WHERE name like '".$parent."'");
 if($tr=mysqli_fetch_array($getgroupid)){
  $parentId = $tr[0];
}
 }
$stime=date('Y/m/d H:i:s');
$group_insert = mysqli_query($conn,"INSERT INTO `group`(`name`, `own`, `parentId`, `stime`) VALUES ('".$name."','".$uid."','".$parentId."','".$stime."')");
?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  swal({
    title: "Group Added ",
    text: "Successfully",
    icon: "success",button: "close"
  }).then(function() {
// Redirect the user
window.location.href = "group.php";
//console.log('The Ok Button was clicked.');
});
</script>
<?php


}


}

else {

  header("location:dashboard.php"); }
