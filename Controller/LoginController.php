<?php 
require_once 'config.php';
//var_dump($_POST);
session_start();
if (empty($_SESSION['id']) && empty($_SESSION['name'])){
  if(isset($_POST['submit'])){


   $user_email = $_POST['email'];
  // $user_email=filter_var($user_email, FILTER_SANITIZE_EMAIL);
   $password = $_POST['password'];

   if(!empty($user_email) && !empty($password) ){

    $query = mysqli_query($conn,"SELECT * FROM `user` WHERE email like '".$user_email."'");
    mysqli_num_rows($query);
    if(mysqli_num_rows($query) > 0){
      if($row = mysqli_fetch_array($query)){
        if ($row['roleId'] == 1){
          if(password_verify($password, $row['password'])){
            $_SESSION['id'] = $row['id'];
            $_SESSION['name']=$row['name'];
            $_SESSION['cat1id']=$row['cat1id'];
            $_SESSION['email']=$row['email'];
            $_SESSION['role']=$row['roleId'];
            header("Location: dashboard.php");
          }else $msg = 'Invalid  password';

        }else $msg = 'Sorry you are not admin';
      }}
      else{
       $msg = 'Invalid username or password';
     }
   }
   else{
    $msg = "Fields cannot be empty";
  }
}

?>