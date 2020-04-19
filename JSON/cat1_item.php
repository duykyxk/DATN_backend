
<?php
include 'config.php';
$data=array();
$data1=array();
$json;
$sql="SELECT * FROM `cat1` ";
$check= mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($check,MYSQLI_ASSOC)) {
  $json;
  $cat1id=$row['id'];
  $name=$row['name'];
  $parentID=$row['parentID'];

  $sql1="SELECT * FROM `item` WHERE cat1id like'".$cat1id."'";
  //var_dump($sql1);
  $check2= mysqli_query($conn, $sql1);
  while($result=mysqli_fetch_array($check2,MYSQLI_ASSOC))
  {
    $json []= $result;
  }

  $json1 []= array("categoryId" => $cat1id,"categoryName"=>$name,"parentID"=>$parentID,"item"=>$json);
  unset($json);  

}
echo json_encode($json1,JSON_UNESCAPED_SLASHES);

