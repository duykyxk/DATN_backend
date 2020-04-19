<?php 
include'config.php';
include'header.php';
session_start();


$id=$_SESSION['placemain_id'];
$pid=$_SESSION['place_id'];
$sql="SELECT * FROM `app_placesmain` where id='".$id."' ";
         //var_dump($sql);

          $check= mysqli_query($conn, $sql);
          $resultcheck= mysqli_fetch_array($check,MYSQLI_ASSOC);
          //echo'<pre>'; var_dump($resultcheck);
          //exit();
          $imgpath=$resultcheck['image'];
          
          $imgpath=str_replace($serveradd,'',$imgpath);
          
          $op1=$resultcheck['image1'];
          $op2=$resultcheck['image2'];
          $op3=$resultcheck['image3'];
          $op4=$resultcheck['image4'];
          $op5=$resultcheck['image5']; 
////REPLACING STRING OF HTTP AND HPPTS FOR UNLINKING FILE//////////
          $op1=str_replace($serveradd,'',$op1);
          $op2=str_replace($serveradd,'',$op2);
          $op3=str_replace($serveradd,'',$op3);
          $op4=str_replace($serveradd,'',$op4);
          $op5=str_replace($serveradd,'',$op5);         





   
if(isset($_POST['mainimg']))
{
$new=rand(99,10000);
    $target_dir = "uploads/place/";
$target_file = $target_dir .$new.preg_replace('/\s/', '',basename($_FILES["placeimg"]["name"]));
$target_filepathmain= $serveradd.$target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["placeimg"])) {
    $check = getimagesize($_FILES["placeimg"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   ?>
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "OOPS ",
  text: "file Not Uploded",
  icon: "error",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>
        
        <?php
// if everything is ok, try to upload file
} else {
unlink($imgpath);
    if (move_uploaded_file($_FILES["placeimg"]["tmp_name"], $target_file)) {
    $insertplacemain="UPDATE app_placesmain SET image='".$target_filepathmain."' where id='".$id."'";
        $successmain= mysqli_query($conn, $insertplacemain);
    
    
    
    
    $query="UPDATE `app_places` SET image='".$target_filepathmain."' where place_id='".$pid."' ";
          
       $success= mysqli_query($conn, $query);
       if($success=='TRUE')
{
?>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "Primary Image Updated ",
  text: "Successfully",
  icon: "success",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>
<?php 
}

 }       
   } 
}
if(isset($_POST['img1']))
{
$new=rand(99,1000);
    $target_dir = "uploads/place/";
$target_file = $target_dir.$new.preg_replace('/\s/', '',basename($_FILES["op1"]["name"]));
$target_filepathmain= $serveradd.$target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["op1"])) {
    $check = getimagesize($_FILES["op1"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   ?>
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "OOPS ",
  text: "file Not Uploded",
  icon: "error",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>
        
        <?php
// if everything is ok, try to upload file
} else {
unlink($op1);

    if (move_uploaded_file($_FILES["op1"]["tmp_name"], $target_file)) {
    $insertplacemain="UPDATE app_placesmain SET image1='".$target_filepathmain."' where id='".$id."'";
        $successmain= mysqli_query($conn, $insertplacemain);
    
    
    
    
    $query="UPDATE `app_places` SET image1='".$target_filepathmain."' where place_id='".$pid."' ";
          
       $success= mysqli_query($conn, $query);
       if($success=='TRUE')
{
?>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "Optional Image Updated ",
  text: "Successfully",
  icon: "success",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>
<?php 
}

 }       
   } 
}


if(isset($_POST['img2']))
{
$new=rand(99,1000);
    $target_dir = "uploads/place/";
$target_file = $target_dir.$new.preg_replace('/\s/', '',basename($_FILES["op2"]["name"]));
$target_filepathmain= $serveradd.$target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["op1"])) {
    $check = getimagesize($_FILES["op2"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   ?>
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "OOPS ",
  text: "file Not Uploded",
  icon: "error",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>
        
        <?php
// if everything is ok, try to upload file
} else {

unlink($op2);
    if (move_uploaded_file($_FILES["op2"]["tmp_name"], $target_file)) {
    $insertplacemain="UPDATE app_placesmain SET image2='".$target_filepathmain."' where id='".$id."'";
        $successmain= mysqli_query($conn, $insertplacemain);
    
    
    
    
    $query="UPDATE `app_places` SET image2='".$target_filepathmain."' where place_id='".$pid."' ";
          
       $success= mysqli_query($conn, $query);
       if($success=='TRUE')
{
?>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "Optional Image Updated ",
  text: "Successfully",
  icon: "success",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>
<?php 
}

 }       
   } 
}




if(isset($_POST['img3']))
{
$new=rand(99,1000);
    $target_dir = "uploads/place/";
$target_file = $target_dir.$new.preg_replace('/\s/', '',basename($_FILES["op3"]["name"]));
$target_filepathmain= $serveradd.$target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["op1"])) {
    $check = getimagesize($_FILES["op3"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   ?>
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "OOPS ",
  text: "file Not Uploded",
  icon: "error",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>
        
        <?php
// if everything is ok, try to upload file
} else {

unlink($op3);
    if (move_uploaded_file($_FILES["op3"]["tmp_name"], $target_file)) {
    $insertplacemain="UPDATE app_placesmain SET image3='".$target_filepathmain."' where id='".$id."'";
        $successmain= mysqli_query($conn, $insertplacemain);
    
    
    
    
    $query="UPDATE `app_places` SET image3='".$target_filepathmain."' where place_id='".$pid."' ";
          
       $success= mysqli_query($conn, $query);
       if($success=='TRUE')
{
?>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "Optional Image Updated ",
  text: "Successfully",
  icon: "success",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>
<?php 
}

 }       
   } 
}



if(isset($_POST['img4']))
{
  
$new=rand(99,1000);
  $target_dir = "uploads/place/";
$target_file = $target_dir .$new.preg_replace('/\s/', '',basename($_FILES["op4"]["name"]));
$target_filepathmain= $serveradd.$target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["op1"])) {
    $check = getimagesize($_FILES["op4"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   ?>
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "OOPS ",
  text: "file Not Uploded",
  icon: "error",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>
        
        <?php
// if everything is ok, try to upload file
} else {

unlink($op4);
    if (move_uploaded_file($_FILES["op4"]["tmp_name"], $target_file)) {
    $insertplacemain="UPDATE app_placesmain SET image4='".$target_filepathmain."' where id='".$id."'";
        $successmain= mysqli_query($conn, $insertplacemain);
    
    
    
    
    $query="UPDATE `app_places` SET image4='".$target_filepathmain."' where place_id='".$pid."' ";
          
       $success= mysqli_query($conn, $query);
       if($success=='TRUE')
{
?>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "Optional Image Updated ",
  text: "Successfully",
  icon: "success",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>
<?php 
}

 }       
   } 
}



if(isset($_POST['img5']))
{
 $new=rand(99,1000);
   $target_dir = "uploads/place/";
$target_file = $target_dir .$new.preg_replace('/\s/', '',basename($_FILES["op5"]["name"]));
$target_filepathmain= $serveradd.$target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["op1"])) {
    $check = getimagesize($_FILES["op5"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   ?>
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "OOPS ",
  text: "file Not Uploded",
  icon: "error",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>
        
        <?php
// if everything is ok, try to upload file
} else {

unlink($op5);
    if (move_uploaded_file($_FILES["op5"]["tmp_name"], $target_file)) {
    $insertplacemain="UPDATE app_placesmain SET image5='".$target_filepathmain."' where id='".$id."'";
        $successmain= mysqli_query($conn, $insertplacemain);
    
    
    
    
    $query="UPDATE `app_places` SET image5='".$target_filepathmain."' where place_id='".$pid."' ";
          
       $success= mysqli_query($conn, $query);
       if($success=='TRUE')
{
?>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "Optional Image Updated ",
  text: "Successfully",
  icon: "success",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "editimage.php?id=<? echo base64_encode($id); ?>";
//console.log('The Ok Button was clicked.');
});
</script>
<?php 
}

 }       
   } 
}

