<html>
<head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
<body>
  <?php 
  include 'config.php';
  $id=$_GET['id'];
  $id= base64_decode($id);
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $password = $_POST['password'];

  $role= $_POST['role'];
  
  $password_hash = password_hash($password, PASSWORD_BCRYPT);
$gender=$_POST['gender'];
if($gender == "Nam") $gender=1;elseif ($gender=="Nữ") {
    $gender =2;
  }else
  $gender =3;
  $user_insert = mysqli_query($conn,"UPDATE `user` SET `password`='".$password_hash."',`gender`='".$gender."',`roleId`='".$role."',`name`='".$name."',`phone`='".$phone."',`address`='".$address."' WHERE id='".$id."'");
  ?>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script type="text/javascript">
    swal({
      title: "Sửa đổi thành công ",
      text: "",
      icon: "success",button: "close"
    }).then(function() {
// Redirect the user
window.location.href = "alluser.php";
//console.log('The Ok Button was clicked.');
});
</script>
    



