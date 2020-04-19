<html>
<head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
<body>
  <?php 
  include 'config.php';
  if(isset($_POST['addarea']))
  {
//echo 'button pressed';
    $ok=0;
    $area_name = $_POST['areaname'];
///////////////////////////////////////////////////
    $sql="SELECT * FROM `area` ";
         // var_dump($sql);
    $check= mysqli_query($conn, $sql);
    $resultcheck= mysqli_fetch_array($check,MYSQLI_BOTH);
         // $catname=$resultcheck['category_name'];


    foreach($check as $checkcat){
      if($checkcat['name']==$area_name)
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
        title: "Area đã tồn tại ",
        text: "Hãy chọn một tên khác",
        icon: "error",button: "close"
      }).then(function() {
// Redirect the user
window.location.href = "area.php";
//console.log('The Ok Button was clicked.');
});
</script>
<?php }else{          

 $country = $_POST['country'];
 $climate = $_POST['climate'];
  $category_insert = mysqli_query($conn,"INSERT INTO area (name,country, climate) VALUES('".$area_name."','".$country."','".$climate."')");
  ?>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    swal({
      title: "Area Added ",
      text: "Successfully",
      icon: "success",button: "close"
    }).then(function() {
// Redirect the user
window.location.href = "area.php";
//console.log('The Ok Button was clicked.');
});
</script>
<?php


}


}

else {

  header("location:dashboard.php"); }
