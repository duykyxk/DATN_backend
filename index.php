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
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Map Family | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="logo.png" height="100" width="100"><br>
      <a href="login_pro.php"><b>Map Family Manager</b> Panel</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg"><font color="red"><?php if(isset($_POST['submit'])){ print_r($msg);}else{ ?></p>
        <p class="login-box-msg"><?php echo "Sign in to start your session" ; } ?></p>

        <form method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">

              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <input type="submit" class="btn btn-primary btn-block btn-flat" name="submit" value="Sign In">  
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- /.login-box-body -->
      </div>
      <!-- /.login-box -->

      <!-- jQuery 3 -->
      <script src="bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- iCheck -->
      <script src="plugins/iCheck/icheck.min.js"></script>
      <script>
        $(function () {
          $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
        });
      </script>
    </body>
    </html>
  <?php }else{
    header("location:dashboard.php");
  } ?>