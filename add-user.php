<html>
<head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
<body>
  <?php 
  include 'config.php';
  if(isset($_POST['adduser']))
  {
//echo 'button pressed';
    $ok=0;
    $email = $_POST['email'];
///////////////////////////////////////////////////
    $sql="SELECT * FROM `user` ";
         // var_dump($sql);
    $check= mysqli_query($conn, $sql);
    $resultcheck= mysqli_fetch_array($check,MYSQLI_BOTH);
         // $catname=$resultcheck['email'];


    foreach($check as $checkemail){
      if($checkemail['email']==$email)
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
        title: "Email đã tồn tại ",
        text: "Hãy chọn một email khác",
        icon: "error",button: "close"
      }).then(function() {
// Redirect the user
window.location.href = "alluser.php";
//console.log('The Ok Button was clicked.');
});
</script>
<?php }else{          

  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  if($gender == "Nam") $gender=1;elseif ($gender=="Nữ") {
    $gender =2;
  }else
  $gender =3;
  $role = $_POST['role'];
 
  $currentTimeinSeconds = time();  
  

  $password_hash = password_hash($password, PASSWORD_BCRYPT);
  
  $user_insert = mysqli_query($conn,"INSERT INTO `user`( `email`, `password`, `gender`, `roleId`, `name`, `phone`, `address`) VALUES ('".$email."','".$password_hash."','".$gender."','".$role."','".$name."','".$phone."','".$address."')");
  $last_id = mysqli_insert_id($conn);
  $code = $currentTimeinSeconds.$last_id;
  $user_update =mysqli_query($conn, "UPDATE `user` SET `code`='".$code."' WHERE `id` = ".  $last_id."");
  ?>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    swal({
      title: "User Added ",
      text: "Successfully",
      icon: "success",button: "close"
    }).then(function() {
// Redirect the user
window.location.href = "alluser.php";
//console.log('The Ok Button was clicked.');
});
</script>
<?php


}


}

else {

  header("location:dashboard.php"); }
