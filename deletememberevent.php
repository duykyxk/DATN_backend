<html>
    <head> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
    <body>
<?php 
include 'config.php';

  $id=$_GET['id'];
  $id=base64_decode($id);
  //var_dump($id);
        $groupEventId=$_GET['groupEventId'];
  $groupEventId=base64_decode($groupEventId);
       // echo $id;
   
          
          $query="DELETE FROM `user_event` where uid='".$id."' and `groupEventId`=".$groupEventId." ";
          $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());

          // $check= "select id from `group_event` where `groupId`=".$groupId."";
          // $qr= mysqli_query($conn, $check);
          // while ($r = mysqli_fetch_array($qr)){
          //  $query="DELETE FROM `user_event` where groupEventId='".$id."' and `uid`=".$id."";
          //  $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());
          // }
          
              ?>
               <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal({
  title: "User đã xóa",
  text: "User Deleted ",
  icon: "success",button: "close"
}).then(function() {
// Redirect the user
window.location.href = "addMemberEvent.php?id=<?php echo base64_encode($groupEventId);?>";
//console.log('The Ok Button was clicked.');
});
</script><?php
         
          ?>
