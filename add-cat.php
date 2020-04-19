<html>
<head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
<body>
  <?php 
  include 'config.php';
  if(isset($_POST['addcat']))
  {
//echo 'button pressed';
    $ok=0;
    $category_name = $_POST['catname'];
///////////////////////////////////////////////////
    $sql="SELECT * FROM `cat` ";
         // var_dump($sql);
    $check= mysqli_query($conn, $sql);
    $resultcheck= mysqli_fetch_array($check,MYSQLI_BOTH);
         // $catname=$resultcheck['category_name'];


    foreach($check as $checkcat){
      if($checkcat['name']==$category_name)
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
        title: "Category đã tồn tại ",
        text: "Hãy chọn một tên khác",
        icon: "error",button: "close"
      }).then(function() {
// Redirect the user
window.location.href = "category.php";
//console.log('The Ok Button was clicked.');
});
</script>
<?php 
}else{          

  $parent = $_POST['cat1parent'];
  if ($parent == "Không có cat cha") {
   $parentId=0;
 }else {
   $getcat1idp = mysqli_query($conn, "SELECT * from cat WHERE name like '".$parent."'");
 if($tr=mysqli_fetch_array($getcat1idp)){
  $parentId = $tr[0];
}
 }

$category_insert = mysqli_query($conn,"INSERT INTO cat (name,parentId) VALUES('".$category_name."','".$parentId."')");
?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  swal({
    title: "Category Added ",
    text: "Successfully",
    icon: "success",button: "close"
  }).then(function() {
// Redirect the user
window.location.href = "category.php";
//console.log('The Ok Button was clicked.');
});
</script>
<?php


}


}

else {

  header("location:dashboard.php"); }
