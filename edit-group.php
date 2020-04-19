<html>
<head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
<body>
  <?php 
  include 'config.php';
  $name = $_POST['groupname'];
  $parentName = $_POST['groupparent'];
  $id=$_GET['id'];
  $id= base64_decode($id);
  
  if ($parentName=="Không có group cha"){
    $group_insert = mysqli_query($conn,"UPDATE `group` SET name='".$name."' , parentId=0 where id='".$id."'");
  }
  else {
    $sql = "SELECT id from `group` where name like '".$parentName."'";
    $sqlResult = mysqli_query($conn, $sql);
    if ($tr = mysqli_fetch_array($sqlResult)){
      $parentId = $tr['id'];
    }


    $group_insert = mysqli_query($conn,"UPDATE cat SET name='".$name."' , parentId='".$parentId."' where id='".$id."'");
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
window.location.href = "group.php";
//console.log('The Ok Button was clicked.');
});
</script>




