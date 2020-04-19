<?php          
include 'config.php';
include 'header.php';
if(isset($_POST['addplace']))
{
   //unset($_SESSION['place_id']); 

//////////////////////////////////////////////////
  $name=$_POST['placename'];
  $address=$_POST['placeaddress'];
  $description=$_POST['placedes'];
  $lat=$_POST['placelat'];
  $a = explode(',', $lat);
$lat=$a[0];
$long=$a[1];
  // $long=$_POST['placelong'];
  $category= $_POST['chk'];
  $area = $_POST['areaId'];


  $areasql = "SELECT id from `area` WHERE `name` ='".$area."'";
  $resultarea = mysqli_query($conn, $areasql);
  $r=mysqli_fetch_array($resultarea);
  $areaId= $r['id'];


  // $checkdetails="SELECT * FROM place Where id='".$id."'";
  // $successcheck= mysqli_query($conn, $checkdetails); 
  // $successresult=mysqli_fetch_array($successcheck,MYSQLI_ASSOC);
  //var_dump($successresult);

  $sql="SELECT * FROM `place` ";
         // var_dump($sql);
  $check= mysqli_query($conn, $sql);
  $resultcheck= mysqli_fetch_array($check,MYSQLI_BOTH);
         // $catname=$resultcheck['category_name'];
  $ok;

  foreach($check as $checkplace){
    if($checkplace['name']==$name)
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
      title: "Place đã tồn tại ",
      text: "Hãy chọn một tên khác",
      icon: "error",button: "close"
    }).then(function() {
// Redirect the user
window.location.href = "place.php";
//console.log('The Ok Button was clicked.');
});
</script>
<?php } else {
//////////////////////////UPDATEING DEATILS ////////////////////////////

  $insertplace="INSERT INTO `place`(`areaId`, `longitude`, `latitude`, `name`, `address`, `description`) VALUES ('".$areaId."','".$long."','".$lat."','".$name."','".$address."','".$description."')"; 
    $successmain= mysqli_query($conn, $insertplace); 
$id = mysqli_insert_id($conn);
 

 foreach($category as $cat_id){

   $insertplacecat="INSERT INTO cat_place (placeId,catId) VALUES('".$id."','".$cat_id."')";
//echo'<pre>';var_dump($insertplace);


   $success= mysqli_query($conn, $insertplacecat);
  
 }
 ?>

 <?php if($success) {  ?>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    swal({
      title: "Place Updated ",
      text: "Successfully",
      icon: "success",button: "close"
    }).then(function() {
// Redirect the user
window.location.href = "place.php";
//console.log('The Ok Button was clicked.');
});
</script>

<?php }}?>

<?php   
}?>

