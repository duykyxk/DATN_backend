 <html>
 <head>
 </head>
 <title></title>
 <body> 


   <?php  if(isset($_POST['update']))
   {
    include 'config.php';
    // include_once 'core.php';
    // include_once '../libs/php-jwt-master/src/BeforeValidException.php';
    // include_once '../libs/php-jwt-master/src/ExpiredException.php';
    // include_once '../libs/php-jwt-master/src/SignatureInvalidException.php';
    // include_once '../libs/php-jwt-master/src/JWT.php';
    // use \Firebase\JWT\JWT;

    $old=$_POST['oldpass'];

    $email=$_POST['email'];
    $name=$_POST['name'];
    $phone =$_POST['phone'];
    $address = $_POST['address'];
    $newpass=$_POST['password'];
//$email=filter_var($email, FILTER_SANITIZE_EMAIL);
//var_dump($uid);
//var_dump($email);
//var_dump($password);
    $sql="SELECT * FROM `user` where email like '".$email."' ";
         // var_dump($sql);
    $check= mysqli_query($conn, $sql);
    $resultcheck= mysqli_fetch_array($check,MYSQLI_ASSOC);
    $oldpass=$resultcheck['password'];
    if (password_verify($old, $oldpass))
    {
      $password_hash = password_hash($newpass, PASSWORD_BCRYPT); 
      $sql1="UPDATE `user` SET name='".$name."', phone='".$phone."', password='".$password_hash."',address='".$address."' where email like '".$email."' ";
      $update_admin = mysqli_query($conn,$sql1);
      if($update_admin){
        ?>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
          swal({
            title: "Password Updated Successfully",
            text: "Please Login Again",
            icon: "success",button: "close"
          }).then(function() {
// Redirect the user
window.location.href = "logout.php";
//console.log('The Ok Button was clicked.');
});
          </script><?php
        } else {

         echo 'query fail';

       }
   //exit();
     } 

     else
      {?>
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <script type="text/javascript">
        swal({
          title: "Incorrect old Password",
          text: "enter your previous password",
          icon: "error",button: "close"
        }).then(function() {
// Redirect the user
window.location.href = "profile.php";
//console.log('The Ok Button was clicked.');
});
</script>
<?php
}
}else {

  echo "button is not pressed ";
  echo'<script>
  window.location.href = "profile.php"</script>';

}
?>