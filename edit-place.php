<?php          
 include 'config.php';
 include 'header.php';
 if(isset($_POST['addplace']))
    {
   //unset($_SESSION['place_id']); 
$id=$_SESSION['place_id'];
//////////////////////////////////////////////////
$name=$_POST['placename'];
$address=$_POST['placeaddress'];
$description=$_POST['placedes'];
$lat=$_POST['placelat'];
// $long=$_POST['placelong'];
$a = explode(',', $lat);
$lat=$a[0];
$long=$a[1];
$area = $_POST['areaId'];

$areasql = "SELECT id from `area` WHERE `name` ='".$area."'";
$resultarea = mysqli_query($conn, $areasql);
$r=mysqli_fetch_array($resultarea);
$areaId= $r['id'];




//////////////////////////UPDATEING DEATILS ////////////////////////////

 $insertplace="UPDATE place SET name='".$name."', areaId= '".$areaId."',address='".$address."',description='".$description."',latitude='".$lat."',longitude='".$long."' WHERE id='".$id."'"; 
    $successmain= mysqli_query($conn, $insertplace); 

$query="DELETE FROM `cat_place` where placeId='".$id."' ";
          $result=mysqli_query($conn,$query) or die("not Deleted". mysql_error());
    
if(isset($_POST['chk'])){

$category= $_POST['chk'];
foreach($category as $cat_id){

     $insertplacecat="INSERT INTO cat_place (placeId,catId) VALUES('".$id."','".$cat_id."')";
     $success= mysqli_query($conn, $insertplacecat);
}
    
}else {

     $success=1;
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



        
    <?php }?>
    
    
    
    
    
 <?php   
}?>

