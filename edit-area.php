<html>
<head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
<body>
  <?php 
  include 'config.php';
  $area_name = $_POST['areaname'];
  $id=$_GET['id'];
  $id= base64_decode($id);

 $country = $_POST['country'];

  $climate = $_POST['climate'];
  

   $category_insert = mysqli_query($conn,"UPDATE area SET name='".$area_name."' , country='".$country."', climate='".$climate."' where id='".$id."'");
   ?>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script type="text/javascript">
    swal({
      title: "Sửa đổi thành công ",
      text: "",
      icon: "success",button: "close"
    }).then(function() {
// Redirect the user
window.location.href = "area.php";
//console.log('The Ok Button was clicked.');
});
</script>
    