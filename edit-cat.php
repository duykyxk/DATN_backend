<html>
<head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
<body>
  <?php 
  include 'config.php';
  $category_name = $_POST['catname'];
  $parentName = $_POST['cat1parent'];
  $id=$_GET['id'];
  $id= base64_decode($id);
  
  if ($parentName=="Không có cat cha"){
    $category_insert = mysqli_query($conn,"UPDATE cat SET name='".$category_name."' , parentId=0 where id='".$id."'");
  }
  else {
    $sql = "SELECT id from cat where name like '".$parentName."'";
    $sqlResult = mysqli_query($conn, $sql);
    if ($tr = mysqli_fetch_array($sqlResult)){
      $parentId = $tr['id'];
    }


    $category_insert = mysqli_query($conn,"UPDATE cat SET name='".$category_name."' , parentId='".$parentId."' where id='".$id."'");
  }


  ?>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    swal({
      title: "Sửa đổi thành công ",
      text: "",
      icon: "success",button: "close"
    }).then(function() {
// Redirect the user
window.location.href = "category.php";
//console.log('The Ok Button was clicked.');
});
</script>




