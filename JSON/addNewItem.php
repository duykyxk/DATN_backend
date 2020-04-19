
<?php
include 'config.php';
echo json_encode(array("message" => "Data successfully uploaded") );
$target_path1=null;
$target_path2=null;
$target_path3=null;
$target_path4=null;
$target_path5=null;
$target_path6=null;
$target_path7=null;
$target_path8=null;
$target_path9=null;
$target_path10=null;
$target_path11=null;
$target_path12=null;
$target_path13=null;
$target_path14=null;
$target_path15=null;
$target_path16=null;
$target_path17=null;
$target_path18=null;
$target_path19=null;
$target_path20=null;
$target_path21=null;
$target_path22=null;
$target_path23=null;
$target_path24=null;
$target_path25=null;
$target_path26=null;
$target_path27=null;
$target_path28=null;
$target_path29=null;
$target_path30=null;
$target_path31=null;
$target_path32=null;
$target_path33=null;
$target_path34=null;
$target_path35=null;
$target_path36=null;
$target_path37=null;
$target_path38=null;
$target_path39=null;
$target_path40=null;
$target_path41=null;
$target_path42=null;
$target_path43=null;
$target_path44=null;
$target_path45=null;
$target_path46=null;
$target_path47=null;
$target_path48=null;
$target_path49=null;
$target_path50=null;
$target_path51=null;
$target_path52=null;
$target_path53=null;
$target_path54=null;
$target_path55=null;
$target_path56=null;
$target_path57=null;
$target_path58=null;
$target_path59=null;
$target_path60=null;
$target_path61=null;
$target_path62=null;
$target_path63=null;
$target_path64=null;
$target_path65=null;
$target_path66=null;
$target_path67=null;
$target_path68=null;
$target_path69=null;
$target_path70=null;
$target_path71=null;
$target_path72=null;
$target_path73=null;
$target_path74=null;
$target_path75=null;
$target_path76=null;
$target_path77=null;
$target_path78=null;
$target_path79=null;
$target_path80=null;
$target_path81=null;
$target_path82=null;
$target_path83=null;
$target_path84=null;
$target_path85=null;
$target_path86=null;
$target_path87=null;
$target_path88=null;
$target_path89=null;
$target_path90=null;
$target_path91=null;
$target_path92=null;
$target_path93=null;
$target_path94=null;
$target_path95=null;
$target_path96=null;
$target_path97=null;
$target_path98=null;
$target_path99=null;
$target_path100=null;

$dem =0;

$mysql = "SELECT max(`id`) FROM `item` ";
$s=mysqli_query($conn, $mysql);
$r=mysqli_fetch_array($s);
$id =$r[0];
$data = json_decode(file_get_contents("php://input"));


// $title = $data->title;

// if (property_exists($data,"field1")){
// 	$field1 = $data->field1;
// 	$dem=$dem+1;
// }

// if (property_exists($data,"field2")){
// 	$field2 = $data->field2;
// 	$dem=$dem+1;
// }

// if (property_exists($data,"cat1id"))
// 	$cat1id =  $data->cat1id;

// if (property_exists($data,"cat2id"))
// 	$cat2id=  $data->cat2id;

// if (property_exists($data,"uid"))
// 	$uid=  $data->uid;

if (property_exists($data,"image01")){
	$image01=  $data->image01;
	$dem=$dem+1;
	
}

if (property_exists($data,"image02")){
	$image02=  $data->image02;
	$dem=$dem+1;
	
}

if (property_exists($data,"image03")){
	$image03=  $data->image03;
	$dem=$dem+1;
	
}

if (property_exists($data,"image04")){
	$image04=  $data->image04;
	$dem=$dem+1;
	
}

if (property_exists($data,"image05")){
	$image05=  $data->image05;
	$dem=$dem+1;
	
}

if (property_exists($data,"image06")){
	$image06=  $data->image06;
	$dem=$dem+1;
	
}

if (property_exists($data,"image07")){
	$image07=  $data->image07;
	$dem=$dem+1;
	
}

if (property_exists($data,"image08")){
	$image08=  $data->image08;
	$dem=$dem+1;
	
}
if (property_exists($data,"image09")){
	$image09=  $data->image09;
	$dem=$dem+1;
	
}
if (property_exists($data,"image10")){
	$image10=  $data->image10;
	$dem=$dem+1;
	
}
if (property_exists($data,"image11")){ 
	$image11= $data->image11; 
	$dem=$dem+1;
}
if (property_exists($data,"image12")){ 
	$image12= $data->image12; $dem=$dem+1; 
}
if (property_exists($data,"image13")){ 
	$image13= $data->image13; $dem=$dem+1;
}if (property_exists($data,"image14")){
	$image14= $data->image14; $dem=$dem+1;
}if (property_exists($data,"image15")){ 
	$image15= $data->image15; $dem=$dem+1; 
}if (property_exists($data,"image16")){ $image16= $data->image16; $dem=$dem+1; }
if (property_exists($data,"image17")){ $image17= $data->image17; $dem=$dem+1; }
if (property_exists($data,"image18")){ $image18= $data->image18; $dem=$dem+1; }
if (property_exists($data,"image19")){ $image19= $data->image19; $dem=$dem+1; }
if (property_exists($data,"image20")){ $image20= $data->image20; $dem=$dem+1; }
if (property_exists($data,"image21")){ $image21= $data->image21; $dem=$dem+1; }
if (property_exists($data,"image22")){ $image22= $data->image22; $dem=$dem+1; }
if (property_exists($data,"image23")){ $image23= $data->image23; $dem=$dem+1; }
if (property_exists($data,"image24")){ $image24= $data->image24; $dem=$dem+1; }
if (property_exists($data,"image25")){ $image25= $data->image25; $dem=$dem+1; }
if (property_exists($data,"image26")){ $image26= $data->image26; $dem=$dem+1; }
if (property_exists($data,"image27")){ $image27= $data->image27; $dem=$dem+1; }
if (property_exists($data,"image28")){ $image28= $data->image28; $dem=$dem+1; }
if (property_exists($data,"image29")){ $image29= $data->image29; $dem=$dem+1; }
if (property_exists($data,"image30")){ $image30= $data->image30; $dem=$dem+1; }
if (property_exists($data,"image31")){ $image31= $data->image31; $dem=$dem+1; }
if (property_exists($data,"image32")){ $image32= $data->image32; $dem=$dem+1; }
if (property_exists($data,"image33")){ $image33= $data->image33; $dem=$dem+1; }
if (property_exists($data,"image34")){ $image34= $data->image34; $dem=$dem+1; }
if (property_exists($data,"image35")){ $image35= $data->image35; $dem=$dem+1; }
if (property_exists($data,"image36")){ $image36= $data->image36; $dem=$dem+1; }
if (property_exists($data,"image37")){ $image37= $data->image37; $dem=$dem+1; }
if (property_exists($data,"image38")){ $image38= $data->image38; $dem=$dem+1; }
if (property_exists($data,"image39")){ $image39= $data->image39; $dem=$dem+1; }
if (property_exists($data,"image40")){ $image40= $data->image40; $dem=$dem+1; }
if (property_exists($data,"image41")){ $image41= $data->image41; $dem=$dem+1; }
if (property_exists($data,"image42")){ $image42= $data->image42; $dem=$dem+1; }
if (property_exists($data,"image43")){ $image43= $data->image43; $dem=$dem+1; }
if (property_exists($data,"image44")){ $image44= $data->image44; $dem=$dem+1; }
if (property_exists($data,"image45")){ $image45= $data->image45; $dem=$dem+1; }
if (property_exists($data,"image46")){ $image46= $data->image46; $dem=$dem+1; }
if (property_exists($data,"image47")){ $image47= $data->image47; $dem=$dem+1; }
if (property_exists($data,"image48")){ $image48= $data->image48; $dem=$dem+1; }
if (property_exists($data,"image49")){ $image49= $data->image49; $dem=$dem+1; }
if (property_exists($data,"image50")){ $image50= $data->image50; $dem=$dem+1; }
if (property_exists($data,"image51")){ $image51= $data->image51; $dem=$dem+1; }
if (property_exists($data,"image52")){ $image52= $data->image52; $dem=$dem+1; }
if (property_exists($data,"image53")){ $image53= $data->image53; $dem=$dem+1; }
if (property_exists($data,"image54")){ $image54= $data->image54; $dem=$dem+1; }
if (property_exists($data,"image55")){ $image55= $data->image55; $dem=$dem+1; }
if (property_exists($data,"image56")){ $image56= $data->image56; $dem=$dem+1; }
if (property_exists($data,"image57")){ $image57= $data->image57; $dem=$dem+1; }
if (property_exists($data,"image58")){ $image58= $data->image58; $dem=$dem+1; }
if (property_exists($data,"image59")){ $image59= $data->image59; $dem=$dem+1; }
if (property_exists($data,"image60")){ $image60= $data->image60; $dem=$dem+1; }
if (property_exists($data,"image61")){ $image61= $data->image61; $dem=$dem+1; }
if (property_exists($data,"image62")){ $image62= $data->image62; $dem=$dem+1; }
if (property_exists($data,"image63")){ $image63= $data->image63; $dem=$dem+1; }
if (property_exists($data,"image64")){ $image64= $data->image64; $dem=$dem+1; }
if (property_exists($data,"image65")){ $image65= $data->image65; $dem=$dem+1; }
if (property_exists($data,"image66")){ $image66= $data->image66; $dem=$dem+1; }
if (property_exists($data,"image67")){ $image67= $data->image67; $dem=$dem+1; }
if (property_exists($data,"image68")){ $image68= $data->image68; $dem=$dem+1; }
if (property_exists($data,"image69")){ $image69= $data->image69; $dem=$dem+1; }
if (property_exists($data,"image70")){ $image70= $data->image70; $dem=$dem+1; }
if (property_exists($data,"image71")){ $image71= $data->image71; $dem=$dem+1; }
if (property_exists($data,"image72")){ $image72= $data->image72; $dem=$dem+1; }
if (property_exists($data,"image73")){ $image73= $data->image73; $dem=$dem+1; }
if (property_exists($data,"image74")){ $image74= $data->image74; $dem=$dem+1; }
if (property_exists($data,"image75")){ $image75= $data->image75; $dem=$dem+1; }
if (property_exists($data,"image76")){ $image76= $data->image76; $dem=$dem+1; }
if (property_exists($data,"image77")){ $image77= $data->image77; $dem=$dem+1; }
if (property_exists($data,"image78")){ $image78= $data->image78; $dem=$dem+1; }
if (property_exists($data,"image79")){ $image79= $data->image79; $dem=$dem+1; }
if (property_exists($data,"image80")){ $image80= $data->image80; $dem=$dem+1; }
if (property_exists($data,"image81")){ $image81= $data->image81; $dem=$dem+1; }
if (property_exists($data,"image82")){ $image82= $data->image82; $dem=$dem+1; }
if (property_exists($data,"image83")){ $image83= $data->image83; $dem=$dem+1; }
if (property_exists($data,"image84")){ $image84= $data->image84; $dem=$dem+1; }
if (property_exists($data,"image85")){ $image85= $data->image85; $dem=$dem+1; }
if (property_exists($data,"image86")){ $image86= $data->image86; $dem=$dem+1; }
if (property_exists($data,"image87")){ $image87= $data->image87; $dem=$dem+1; }
if (property_exists($data,"image88")){ $image88= $data->image88; $dem=$dem+1; }
if (property_exists($data,"image89")){ $image89= $data->image89; $dem=$dem+1; }
if (property_exists($data,"image90")){ $image90= $data->image90; $dem=$dem+1; }
if (property_exists($data,"image91")){ $image91= $data->image91; $dem=$dem+1; }
if (property_exists($data,"image92")){ $image92= $data->image92; $dem=$dem+1; }
if (property_exists($data,"image93")){ $image93= $data->image93; $dem=$dem+1; }
if (property_exists($data,"image94")){ $image94= $data->image94; $dem=$dem+1; }
if (property_exists($data,"image95")){ $image95= $data->image95; $dem=$dem+1; }
if (property_exists($data,"image96")){ $image96= $data->image96; $dem=$dem+1; }
if (property_exists($data,"image97")){ $image97= $data->image97; $dem=$dem+1; }
if (property_exists($data,"image98")){ $image98= $data->image98; $dem=$dem+1; }
if (property_exists($data,"image99")){ $image99= $data->image99; $dem=$dem+1; }
if (property_exists($data,"image100")){ $image100= $data->image100; $dem=$dem+1; }


if ($image01!=null){
	$image01 = str_replace('data:image/png;base64,', '', $image01);
	$image01 = str_replace(' ', '+', $image01);
	$im01 = base64_decode($image01);
	$file ='../uploads/item/image01'.$id.'.jpg';
	$success = file_put_contents($file, $im01);
	$target_path1 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image01'.$id.'s.jpg';
	resizeImage($target_path1, $id, $filename);
	$target_paths1="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",1,'".$target_path1."','".$target_paths1."')";
	$cs = file_put_contents("date.txt", $sql);
	$s = mysqli_query($conn, $sql);
}

if ($image02!=null){
	$image02 = str_replace('data:image/png;base64,', '', $image02);
	$image02 = str_replace(' ', '+', $image02);
	$im02 = base64_decode($image02);
	$file ='../uploads/item/image02'.$id.'.jpg';
	$success = file_put_contents($file, $im02);
	$target_path2 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image02'.$id.'s.jpg';
	resizeImage($target_path2, $id, $filename);
	$target_paths2="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",2,'".$target_path2."','".$target_paths2."')";
	$cs = file_put_contents("date.txt", $sql);
	$s = mysqli_query($conn, $sql);
}

if ($image03!=null){
	$image03 = str_replace('data:image/png;base64,', '', $image03);
	$image03 = str_replace(' ', '+', $image03);
	$im03 = base64_decode($image03);
	$file ='../uploads/item/image03'.$id.'.jpg';
	$success = file_put_contents($file, $im03);
	$target_path3 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image03'.$id.'s.jpg';
	resizeImage($target_path3, $id, $filename);
	$target_paths3="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",3,'".$target_path3."','".$target_paths3."')";
	$s = mysqli_query($conn, $sql);
}

if ($image04!=null){
	$image04 = str_replace('data:image/png;base64,', '', $image04);
	$image04 = str_replace(' ', '+', $image04);
	$im04 = base64_decode($image04);
	$file ='../uploads/item/image04'.$id.'.jpg';
	$success = file_put_contents($file, $im04);
	$target_path4 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image04'.$id.'s.jpg';
	resizeImage($target_path4, $id, $filename);
	$target_paths4="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",4,'".$target_path4."','".$target_paths4."')";
	$s = mysqli_query($conn, $sql);
}

if ($image05!=null){
	$image05 = str_replace('data:image/png;base64,', '', $image05);
	$image05 = str_replace(' ', '+', $image05);
	$im05 = base64_decode($image05);
	$file ='../uploads/item/image05'.$id.'.jpg';
	$success = file_put_contents($file, $im05);
	$target_path5 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image05'.$id.'s.jpg';
	resizeImage($target_path5, $id, $filename);
	$target_paths5="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",5,'".$target_path5."','".$target_paths5."')";
	$s = mysqli_query($conn, $sql);
}

if ($image06!=null){
	$image06 = str_replace('data:image/png;base64,', '', $image06);
	$image06 = str_replace(' ', '+', $image06);
	$im06 = base64_decode($image06);
	$file ='../uploads/item/image06'.$id.'.jpg';
	$success = file_put_contents($file, $im06);
	$target_path6 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image06'.$id.'s.jpg';
	resizeImage($target_path6, $id, $filename);
	$target_paths6="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",6,'".$target_path6."','".$target_paths6."')";
	$s = mysqli_query($conn, $sql);
}

if ($image07!=null){
	$image07 = str_replace('data:image/png;base64,', '', $image07);
	$image07 = str_replace(' ', '+', $image07);
	$im07 = base64_decode($image07);
	$file ='../uploads/item/image07'.$id.'.jpg';
	$success = file_put_contents($file, $im07);
	$target_path7 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image07'.$id.'s.jpg';
	resizeImage($target_path7, $id, $filename);
	$target_paths7="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",7,'".$target_path7."','".$target_paths7."')";
	$s = mysqli_query($conn, $sql);
}

if ($image08!=null){
	$image08 = str_replace('data:image/png;base64,', '', $image08);
	$image08 = str_replace(' ', '+', $image08);
	$im08 = base64_decode($image08);
	$file ='../uploads/item/image08'.$id.'.jpg';
	$success = file_put_contents($file, $im08);
	$target_path8 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image08'.$id.'s.jpg';
	resizeImage($target_path8, $id, $filename);
	$target_paths8="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",8,'".$target_path8."','".$target_paths8."')";
	$s = mysqli_query($conn, $sql);
}

if ($image09!=null){
	$image09 = str_replace('data:image/png;base64,', '', $image09);
	$image09 = str_replace(' ', '+', $image09);
	$im09 = base64_decode($image09);
	$file ='../uploads/item/image09'.$id.'.jpg';
	$success = file_put_contents($file, $im09);
	$target_path9 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image09'.$id.'s.jpg';
	resizeImage($target_path9, $id, $filename);
	$target_paths9="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",9,'".$target_path9."','".$target_paths9."')";
	$s = mysqli_query($conn, $sql);
}

if ($image10!=null){
	$image10 = str_replace('data:image/png;base64,', '', $image10);
	$image10 = str_replace(' ', '+', $image10);
	$im10 = base64_decode($image10);
	$file ='../uploads/item/image10'.$id.'.jpg';
	$success = file_put_contents($file, $im10);
	$target_path10 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image10'.$id.'s.jpg';
	resizeImage($target_path10, $id, $filename);
	$target_paths10="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",10,'".$target_path10."','".$target_paths10."')";
	$s = mysqli_query($conn, $sql);
}

if ($image11!=null){
	$image11 = str_replace('data:image/png;base64,', '', $image11);
	$image11 = str_replace(' ', '+', $image11);
	$im11 = base64_decode($image11);
	$file ='../uploads/item/image11'.$id.'.jpg';
	$success = file_put_contents($file, $im11);
	$target_path11 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image11'.$id.'s.jpg';
	resizeImage($target_path11, $id, $filename);
	$target_paths11="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",11,'".$target_path11."','".$target_paths11."')";
	$s = mysqli_query($conn, $sql);
}
if ($image12!=null){
	$image12 = str_replace('data:image/png;base64,', '', $image12);
	$image12 = str_replace(' ', '+', $image12);
	$im12 = base64_decode($image12);
	$file ='../uploads/item/image12'.$id.'.jpg';
	$success = file_put_contents($file, $im12);
	$target_path12 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image12'.$id.'s.jpg';
	resizeImage($target_path12, $id, $filename);
	$target_paths12="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",12,'".$target_path12."','".$target_paths12."')";
	$s = mysqli_query($conn, $sql);
}
if ($image13!=null){
	$image13 = str_replace('data:image/png;base64,', '', $image13);
	$image13 = str_replace(' ', '+', $image13);
	$im13 = base64_decode($image13);
	$file ='../uploads/item/image13'.$id.'.jpg';
	$success = file_put_contents($file, $im13);
	$target_path13 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image13'.$id.'s.jpg';
	resizeImage($target_path13, $id, $filename);
	$target_paths13="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",13,'".$target_path13."','".$target_paths13."')";
	$s = mysqli_query($conn, $sql);
}
if ($image14!=null){
	$image14 = str_replace('data:image/png;base64,', '', $image14);
	$image14 = str_replace(' ', '+', $image14);
	$im14 = base64_decode($image14);
	$file ='../uploads/item/image14'.$id.'.jpg';
	$success = file_put_contents($file, $im14);
	$target_path14 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image14'.$id.'s.jpg';
	resizeImage($target_path14, $id, $filename);
	$target_paths14="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",14,'".$target_path14."','".$target_paths14."')";
	$s = mysqli_query($conn, $sql);
}
if ($image15!=null){
	$image15 = str_replace('data:image/png;base64,', '', $image15);
	$image15 = str_replace(' ', '+', $image15);
	$im15 = base64_decode($image15);
	$file ='../uploads/item/image15'.$id.'.jpg';
	$success = file_put_contents($file, $im15);
	$target_path15 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image15'.$id.'s.jpg';
	resizeImage($target_path15, $id, $filename);
	$target_paths15="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",15,'".$target_path15."','".$target_paths15."')";
	$s = mysqli_query($conn, $sql);
}
if ($image16!=null){
	$image16 = str_replace('data:image/png;base64,', '', $image16);
	$image16 = str_replace(' ', '+', $image16);
	$im16 = base64_decode($image16);
	$file ='../uploads/item/image16'.$id.'.jpg';
	$success = file_put_contents($file, $im16);
	$target_path16 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image16'.$id.'s.jpg';
	resizeImage($target_path16, $id, $filename);
	$target_paths16="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",16,'".$target_path16."','".$target_paths16."')";
	$s = mysqli_query($conn, $sql);
}
if ($image17!=null){
	$image17 = str_replace('data:image/png;base64,', '', $image17);
	$image17 = str_replace(' ', '+', $image17);
	$im17 = base64_decode($image17);
	$file ='../uploads/item/image17'.$id.'.jpg';
	$success = file_put_contents($file, $im17);
	$target_path17 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image17'.$id.'s.jpg';
	resizeImage($target_path17, $id, $filename);
	$target_paths17="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",17,'".$target_path17."','".$target_paths17."')";
	$s = mysqli_query($conn, $sql);
}
if ($image18!=null){
	$image18 = str_replace('data:image/png;base64,', '', $image18);
	$image18 = str_replace(' ', '+', $image18);
	$im18 = base64_decode($image18);
	$file ='../uploads/item/image18'.$id.'.jpg';
	$success = file_put_contents($file, $im18);
	$target_path18 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image18'.$id.'s.jpg';
	resizeImage($target_path18, $id, $filename);
	$target_paths18="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",18,'".$target_path18."','".$target_paths18."')";
	$s = mysqli_query($conn, $sql);
}
if ($image19!=null){
	$image19 = str_replace('data:image/png;base64,', '', $image19);
	$image19 = str_replace(' ', '+', $image19);
	$im19 = base64_decode($image19);
	$file ='../uploads/item/image19'.$id.'.jpg';
	$success = file_put_contents($file, $im19);
	$target_path19 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image19'.$id.'s.jpg';
	resizeImage($target_path19, $id, $filename);
	$target_paths19="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",19,'".$target_path19."','".$target_paths19."')";
	$s = mysqli_query($conn, $sql);
}
if ($image20!=null){
	$image20 = str_replace('data:image/png;base64,', '', $image20);
	$image20 = str_replace(' ', '+', $image20);
	$im20 = base64_decode($image20);
	$file ='../uploads/item/image20'.$id.'.jpg';
	$success = file_put_contents($file, $im20);
	$target_path20 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image20'.$id.'s.jpg';
	resizeImage($target_path20, $id, $filename);
	$target_paths20="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",20,'".$target_path20."','".$target_paths20."')";
	$s = mysqli_query($conn, $sql);
}
if ($image21!=null){
	$image21 = str_replace('data:image/png;base64,', '', $image21);
	$image21 = str_replace(' ', '+', $image21);
	$im21 = base64_decode($image21);
	$file ='../uploads/item/image21'.$id.'.jpg';
	$success = file_put_contents($file, $im21);
	$target_path21 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image21'.$id.'s.jpg';
	resizeImage($target_path21, $id, $filename);
	$target_paths21="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",21,'".$target_path21."','".$target_paths21."')";
	$s = mysqli_query($conn, $sql);
}
if ($image22!=null){
	$image22 = str_replace('data:image/png;base64,', '', $image22);
	$image22 = str_replace(' ', '+', $image22);
	$im22 = base64_decode($image22);
	$file ='../uploads/item/image22'.$id.'.jpg';
	$success = file_put_contents($file, $im22);
	$target_path22 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image22'.$id.'s.jpg';
	resizeImage($target_path22, $id, $filename);
	$target_paths22="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",22,'".$target_path22."','".$target_paths22."')";
	$s = mysqli_query($conn, $sql);
}
if ($image23!=null){
	$image23 = str_replace('data:image/png;base64,', '', $image23);
	$image23 = str_replace(' ', '+', $image23);
	$im23 = base64_decode($image23);
	$file ='../uploads/item/image23'.$id.'.jpg';
	$success = file_put_contents($file, $im23);
	$target_path23 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image23'.$id.'s.jpg';
	resizeImage($target_path23, $id, $filename);
	$target_paths23="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",23,'".$target_path23."','".$target_paths23."')";
	$s = mysqli_query($conn, $sql);
}
if ($image24!=null){
	$image24 = str_replace('data:image/png;base64,', '', $image24);
	$image24 = str_replace(' ', '+', $image24);
	$im24 = base64_decode($image24);
	$file ='../uploads/item/image24'.$id.'.jpg';
	$success = file_put_contents($file, $im24);
	$target_path24 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image24'.$id.'s.jpg';
	resizeImage($target_path24, $id, $filename);
	$target_paths24="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",24,'".$target_path24."','".$target_paths24."')";
	$s = mysqli_query($conn, $sql);
}
if ($image25!=null){
	$image25 = str_replace('data:image/png;base64,', '', $image25);
	$image25 = str_replace(' ', '+', $image25);
	$im25 = base64_decode($image25);
	$file ='../uploads/item/image25'.$id.'.jpg';
	$success = file_put_contents($file, $im25);
	$target_path25 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image25'.$id.'s.jpg';
	resizeImage($target_path25, $id, $filename);
	$target_paths25="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",25,'".$target_path25."','".$target_paths25."')";
	$s = mysqli_query($conn, $sql);
}
if ($image26!=null){
	$image26 = str_replace('data:image/png;base64,', '', $image26);
	$image26 = str_replace(' ', '+', $image26);
	$im26 = base64_decode($image26);
	$file ='../uploads/item/image26'.$id.'.jpg';
	$success = file_put_contents($file, $im26);
	$target_path26 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image26'.$id.'s.jpg';
	resizeImage($target_path26, $id, $filename);
	$target_paths26="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",26,'".$target_path26."','".$target_paths26."')";
	$s = mysqli_query($conn, $sql);
}
if ($image27!=null){
	$image27 = str_replace('data:image/png;base64,', '', $image27);
	$image27 = str_replace(' ', '+', $image27);
	$im27 = base64_decode($image27);
	$file ='../uploads/item/image27'.$id.'.jpg';
	$success = file_put_contents($file, $im27);
	$target_path27 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image27'.$id.'s.jpg';
	resizeImage($target_path27, $id, $filename);
	$target_paths27="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",27,'".$target_path27."','".$target_paths27."')";
	$s = mysqli_query($conn, $sql);
}
if ($image28!=null){
	$image28 = str_replace('data:image/png;base64,', '', $image28);
	$image28 = str_replace(' ', '+', $image28);
	$im28 = base64_decode($image28);
	$file ='../uploads/item/image28'.$id.'.jpg';
	$success = file_put_contents($file, $im28);
	$target_path28 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image28'.$id.'s.jpg';
	resizeImage($target_path28, $id, $filename);
	$target_paths28="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",28,'".$target_path28."','".$target_paths28."')";
	$s = mysqli_query($conn, $sql);
}
if ($image29!=null){
	$image29 = str_replace('data:image/png;base64,', '', $image29);
	$image29 = str_replace(' ', '+', $image29);
	$im29 = base64_decode($image29);
	$file ='../uploads/item/image29'.$id.'.jpg';
	$success = file_put_contents($file, $im29);
	$target_path29 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image29'.$id.'s.jpg';
	resizeImage($target_path29, $id, $filename);
	$target_paths29="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",29,'".$target_path29."','".$target_paths29."')";
	$s = mysqli_query($conn, $sql);
}
if ($image30!=null){
	$image30 = str_replace('data:image/png;base64,', '', $image30);
	$image30 = str_replace(' ', '+', $image30);
	$im30 = base64_decode($image30);
	$file ='../uploads/item/image30'.$id.'.jpg';
	$success = file_put_contents($file, $im30);
	$target_path30 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image30'.$id.'s.jpg';
	resizeImage($target_path30, $id, $filename);
	$target_paths30="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",30,'".$target_path30."','".$target_paths30."')";
	$s = mysqli_query($conn, $sql);
}
if ($image31!=null){
	$image31 = str_replace('data:image/png;base64,', '', $image31);
	$image31 = str_replace(' ', '+', $image31);
	$im31 = base64_decode($image31);
	$file ='../uploads/item/image31'.$id.'.jpg';
	$success = file_put_contents($file, $im31);
	$target_path31 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image31'.$id.'s.jpg';
	resizeImage($target_path31, $id, $filename);
	$target_paths31="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",31,'".$target_path31."','".$target_paths31."')";
	$s = mysqli_query($conn, $sql);
}
if ($image32!=null){
	$image32 = str_replace('data:image/png;base64,', '', $image32);
	$image32 = str_replace(' ', '+', $image32);
	$im32 = base64_decode($image32);
	$file ='../uploads/item/image32'.$id.'.jpg';
	$success = file_put_contents($file, $im32);
	$target_path32 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image32'.$id.'s.jpg';
	resizeImage($target_path32, $id, $filename);
	$target_paths32="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",32,'".$target_path32."','".$target_paths32."')";
	$s = mysqli_query($conn, $sql);
}
if ($image33!=null){
	$image33 = str_replace('data:image/png;base64,', '', $image33);
	$image33 = str_replace(' ', '+', $image33);
	$im33 = base64_decode($image33);
	$file ='../uploads/item/image33'.$id.'.jpg';
	$success = file_put_contents($file, $im33);
	$target_path33 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image33'.$id.'s.jpg';
	resizeImage($target_path33, $id, $filename);
	$target_paths33="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",33,'".$target_path33."','".$target_paths33."')";
	$s = mysqli_query($conn, $sql);
}
if ($image34!=null){
	$image34 = str_replace('data:image/png;base64,', '', $image34);
	$image34 = str_replace(' ', '+', $image34);
	$im34 = base64_decode($image34);
	$file ='../uploads/item/image34'.$id.'.jpg';
	$success = file_put_contents($file, $im34);
	$target_path34 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image34'.$id.'s.jpg';
	resizeImage($target_path34, $id, $filename);
	$target_paths34="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",34,'".$target_path34."','".$target_paths34."')";
	$s = mysqli_query($conn, $sql);
}
if ($image35!=null){
	$image35 = str_replace('data:image/png;base64,', '', $image35);
	$image35 = str_replace(' ', '+', $image35);
	$im35 = base64_decode($image35);
	$file ='../uploads/item/image35'.$id.'.jpg';
	$success = file_put_contents($file, $im35);
	$target_path35 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image35'.$id.'s.jpg';
	resizeImage($target_path35, $id, $filename);
	$target_paths35="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",35,'".$target_path35."','".$target_paths35."')";
	$s = mysqli_query($conn, $sql);
}
if ($image36!=null){
	$image36 = str_replace('data:image/png;base64,', '', $image36);
	$image36 = str_replace(' ', '+', $image36);
	$im36 = base64_decode($image36);
	$file ='../uploads/item/image36'.$id.'.jpg';
	$success = file_put_contents($file, $im36);
	$target_path36 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image36'.$id.'s.jpg';
	resizeImage($target_path36, $id, $filename);
	$target_paths36="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",36,'".$target_path36."','".$target_paths36."')";
	$s = mysqli_query($conn, $sql);
}
if ($image37!=null){
	$image37 = str_replace('data:image/png;base64,', '', $image37);
	$image37 = str_replace(' ', '+', $image37);
	$im37 = base64_decode($image37);
	$file ='../uploads/item/image37'.$id.'.jpg';
	$success = file_put_contents($file, $im37);
	$target_path37 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image37'.$id.'s.jpg';
	resizeImage($target_path37, $id, $filename);
	$target_paths37="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",37,'".$target_path37."','".$target_paths37."')";
	$s = mysqli_query($conn, $sql);
}
if ($image38!=null){
	$image38 = str_replace('data:image/png;base64,', '', $image38);
	$image38 = str_replace(' ', '+', $image38);
	$im38 = base64_decode($image38);
	$file ='../uploads/item/image38'.$id.'.jpg';
	$success = file_put_contents($file, $im38);
	$target_path38 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image38'.$id.'s.jpg';
	resizeImage($target_path38, $id, $filename);
	$target_paths38="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",38,'".$target_path38."','".$target_paths38."')";
	$s = mysqli_query($conn, $sql);
}
if ($image39!=null){
	$image39 = str_replace('data:image/png;base64,', '', $image39);
	$image39 = str_replace(' ', '+', $image39);
	$im39 = base64_decode($image39);
	$file ='../uploads/item/image39'.$id.'.jpg';
	$success = file_put_contents($file, $im39);
	$target_path39 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image39'.$id.'s.jpg';
	resizeImage($target_path39, $id, $filename);
	$target_paths39="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",39,'".$target_path39."','".$target_paths39."')";
	$s = mysqli_query($conn, $sql);
}
if ($image40!=null){
	$image40 = str_replace('data:image/png;base64,', '', $image40);
	$image40 = str_replace(' ', '+', $image40);
	$im40 = base64_decode($image40);
	$file ='../uploads/item/image40'.$id.'.jpg';
	$success = file_put_contents($file, $im40);
	$target_path40 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image40'.$id.'s.jpg';
	resizeImage($target_path40, $id, $filename);
	$target_paths40="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",40,'".$target_path40."','".$target_paths40."')";
	$s = mysqli_query($conn, $sql);
}
if ($image41!=null){
	$image41 = str_replace('data:image/png;base64,', '', $image41);
	$image41 = str_replace(' ', '+', $image41);
	$im41 = base64_decode($image41);
	$file ='../uploads/item/image41'.$id.'.jpg';
	$success = file_put_contents($file, $im41);
	$target_path41 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image41'.$id.'s.jpg';
	resizeImage($target_path41, $id, $filename);
	$target_paths41="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",41,'".$target_path41."','".$target_paths41."')";
	$s = mysqli_query($conn, $sql);
}
if ($image42!=null){
	$image42 = str_replace('data:image/png;base64,', '', $image42);
	$image42 = str_replace(' ', '+', $image42);
	$im42 = base64_decode($image42);
	$file ='../uploads/item/image42'.$id.'.jpg';
	$success = file_put_contents($file, $im42);
	$target_path42 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image42'.$id.'s.jpg';
	resizeImage($target_path42, $id, $filename);
	$target_paths42="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",42,'".$target_path42."','".$target_paths42."')";
	$s = mysqli_query($conn, $sql);
}
if ($image43!=null){
	$image43 = str_replace('data:image/png;base64,', '', $image43);
	$image43 = str_replace(' ', '+', $image43);
	$im43 = base64_decode($image43);
	$file ='../uploads/item/image43'.$id.'.jpg';
	$success = file_put_contents($file, $im43);
	$target_path43 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image43'.$id.'s.jpg';
	resizeImage($target_path43, $id, $filename);
	$target_paths43="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",43,'".$target_path43."','".$target_paths43."')";
	$s = mysqli_query($conn, $sql);
}
if ($image44!=null){
	$image44 = str_replace('data:image/png;base64,', '', $image44);
	$image44 = str_replace(' ', '+', $image44);
	$im44 = base64_decode($image44);
	$file ='../uploads/item/image44'.$id.'.jpg';
	$success = file_put_contents($file, $im44);
	$target_path44 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image44'.$id.'s.jpg';
	resizeImage($target_path44, $id, $filename);
	$target_paths44="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",44,'".$target_path44."','".$target_paths44."')";
	$s = mysqli_query($conn, $sql);
}
if ($image45!=null){
	$image45 = str_replace('data:image/png;base64,', '', $image45);
	$image45 = str_replace(' ', '+', $image45);
	$im45 = base64_decode($image45);
	$file ='../uploads/item/image45'.$id.'.jpg';
	$success = file_put_contents($file, $im45);
	$target_path45 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image45'.$id.'s.jpg';
	resizeImage($target_path45, $id, $filename);
	$target_paths45="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",45,'".$target_path45."','".$target_paths45."')";
	$s = mysqli_query($conn, $sql);
}
if ($image46!=null){
	$image46 = str_replace('data:image/png;base64,', '', $image46);
	$image46 = str_replace(' ', '+', $image46);
	$im46 = base64_decode($image46);
	$file ='../uploads/item/image46'.$id.'.jpg';
	$success = file_put_contents($file, $im46);
	$target_path46 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image46'.$id.'s.jpg';
	resizeImage($target_path46, $id, $filename);
	$target_paths46="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",46,'".$target_path46."','".$target_paths46."')";
	$s = mysqli_query($conn, $sql);
}
if ($image47!=null){
	$image47 = str_replace('data:image/png;base64,', '', $image47);
	$image47 = str_replace(' ', '+', $image47);
	$im47 = base64_decode($image47);
	$file ='../uploads/item/image47'.$id.'.jpg';
	$success = file_put_contents($file, $im47);
	$target_path47 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image47'.$id.'s.jpg';
	resizeImage($target_path47, $id, $filename);
	$target_paths47="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",47,'".$target_path47."','".$target_paths47."')";
	$s = mysqli_query($conn, $sql);
}
if ($image48!=null){
	$image48 = str_replace('data:image/png;base64,', '', $image48);
	$image48 = str_replace(' ', '+', $image48);
	$im48 = base64_decode($image48);
	$file ='../uploads/item/image48'.$id.'.jpg';
	$success = file_put_contents($file, $im48);
	$target_path48 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image48'.$id.'s.jpg';
	resizeImage($target_path48, $id, $filename);
	$target_paths48="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",48,'".$target_path48."','".$target_paths48."')";
	$s = mysqli_query($conn, $sql);
}
if ($image49!=null){
	$image49 = str_replace('data:image/png;base64,', '', $image49);
	$image49 = str_replace(' ', '+', $image49);
	$im49 = base64_decode($image49);
	$file ='../uploads/item/image49'.$id.'.jpg';
	$success = file_put_contents($file, $im49);
	$target_path49 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image49'.$id.'s.jpg';
	resizeImage($target_path49, $id, $filename);
	$target_paths49="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",49,'".$target_path49."','".$target_paths49."')";
	$s = mysqli_query($conn, $sql);
}
if ($image50!=null){
	$image50 = str_replace('data:image/png;base64,', '', $image50);
	$image50 = str_replace(' ', '+', $image50);
	$im50 = base64_decode($image50);
	$file ='../uploads/item/image50'.$id.'.jpg';
	$success = file_put_contents($file, $im50);
	$target_path50 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image50'.$id.'s.jpg';
	resizeImage($target_path50, $id, $filename);
	$target_paths50="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",50,'".$target_path50."','".$target_paths50."')";
	$s = mysqli_query($conn, $sql);
}
if ($image51!=null){
	$image51 = str_replace('data:image/png;base64,', '', $image51);
	$image51 = str_replace(' ', '+', $image51);
	$im51 = base64_decode($image51);
	$file ='../uploads/item/image51'.$id.'.jpg';
	$success = file_put_contents($file, $im51);
	$target_path51 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image51'.$id.'s.jpg';
	resizeImage($target_path51, $id, $filename);
	$target_paths51="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",51,'".$target_path51."','".$target_paths51."')";
	$s = mysqli_query($conn, $sql);
}
if ($image52!=null){
	$image52 = str_replace('data:image/png;base64,', '', $image52);
	$image52 = str_replace(' ', '+', $image52);
	$im52 = base64_decode($image52);
	$file ='../uploads/item/image52'.$id.'.jpg';
	$success = file_put_contents($file, $im52);
	$target_path52 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image52'.$id.'s.jpg';
	resizeImage($target_path52, $id, $filename);
	$target_paths52="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",52,'".$target_path52."','".$target_paths52."')";
	$s = mysqli_query($conn, $sql);
}
if ($image53!=null){
	$image53 = str_replace('data:image/png;base64,', '', $image53);
	$image53 = str_replace(' ', '+', $image53);
	$im53 = base64_decode($image53);
	$file ='../uploads/item/image53'.$id.'.jpg';
	$success = file_put_contents($file, $im53);
	$target_path53 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image53'.$id.'s.jpg';
	resizeImage($target_path53, $id, $filename);
	$target_paths53="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",53,'".$target_path53."','".$target_paths53."')";
	$s = mysqli_query($conn, $sql);
}
if ($image54!=null){
	$image54 = str_replace('data:image/png;base64,', '', $image54);
	$image54 = str_replace(' ', '+', $image54);
	$im54 = base64_decode($image54);
	$file ='../uploads/item/image54'.$id.'.jpg';
	$success = file_put_contents($file, $im54);
	$target_path54 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image54'.$id.'s.jpg';
	resizeImage($target_path54, $id, $filename);
	$target_paths54="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",54,'".$target_path54."','".$target_paths54."')";
	$s = mysqli_query($conn, $sql);
}
if ($image55!=null){
	$image55 = str_replace('data:image/png;base64,', '', $image55);
	$image55 = str_replace(' ', '+', $image55);
	$im55 = base64_decode($image55);
	$file ='../uploads/item/image55'.$id.'.jpg';
	$success = file_put_contents($file, $im55);
	$target_path55 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image55'.$id.'s.jpg';
	resizeImage($target_path55, $id, $filename);
	$target_paths55="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",55,'".$target_path55."','".$target_paths55."')";
	$s = mysqli_query($conn, $sql);
}
if ($image56!=null){
	$image56 = str_replace('data:image/png;base64,', '', $image56);
	$image56 = str_replace(' ', '+', $image56);
	$im56 = base64_decode($image56);
	$file ='../uploads/item/image56'.$id.'.jpg';
	$success = file_put_contents($file, $im56);
	$target_path56 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image56'.$id.'s.jpg';
	resizeImage($target_path56, $id, $filename);
	$target_paths56="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",56,'".$target_path56."','".$target_paths56."')";
	$s = mysqli_query($conn, $sql);
}
if ($image57!=null){
	$image57 = str_replace('data:image/png;base64,', '', $image57);
	$image57 = str_replace(' ', '+', $image57);
	$im57 = base64_decode($image57);
	$file ='../uploads/item/image57'.$id.'.jpg';
	$success = file_put_contents($file, $im57);
	$target_path57 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image57'.$id.'s.jpg';
	resizeImage($target_path57, $id, $filename);
	$target_paths57="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",57,'".$target_path57."','".$target_paths57."')";
	$s = mysqli_query($conn, $sql);
}
if ($image58!=null){
	$image58 = str_replace('data:image/png;base64,', '', $image58);
	$image58 = str_replace(' ', '+', $image58);
	$im58 = base64_decode($image58);
	$file ='../uploads/item/image58'.$id.'.jpg';
	$success = file_put_contents($file, $im58);
	$target_path58 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image58'.$id.'s.jpg';
	resizeImage($target_path58, $id, $filename);
	$target_paths58="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",58,'".$target_path58."','".$target_paths58."')";
	$s = mysqli_query($conn, $sql);
}
if ($image59!=null){
	$image59 = str_replace('data:image/png;base64,', '', $image59);
	$image59 = str_replace(' ', '+', $image59);
	$im59 = base64_decode($image59);
	$file ='../uploads/item/image59'.$id.'.jpg';
	$success = file_put_contents($file, $im59);
	$target_path59 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image59'.$id.'s.jpg';
	resizeImage($target_path59, $id, $filename);
	$target_paths59="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",59,'".$target_path59."','".$target_paths59."')";
	$s = mysqli_query($conn, $sql);
}
if ($image60!=null){
	$image60 = str_replace('data:image/png;base64,', '', $image60);
	$image60 = str_replace(' ', '+', $image60);
	$im60 = base64_decode($image60);
	$file ='../uploads/item/image60'.$id.'.jpg';
	$success = file_put_contents($file, $im60);
	$target_path60 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image60'.$id.'s.jpg';
	resizeImage($target_path60, $id, $filename);
	$target_paths60="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",60,'".$target_path60."','".$target_paths60."')";
	$s = mysqli_query($conn, $sql);
}
if ($image61!=null){
	$image61 = str_replace('data:image/png;base64,', '', $image61);
	$image61 = str_replace(' ', '+', $image61);
	$im61 = base64_decode($image61);
	$file ='../uploads/item/image61'.$id.'.jpg';
	$success = file_put_contents($file, $im61);
	$target_path61 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image61'.$id.'s.jpg';
	resizeImage($target_path61, $id, $filename);
	$target_paths61="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",61,'".$target_path61."','".$target_paths61."')";
	$s = mysqli_query($conn, $sql);
}
if ($image62!=null){
	$image62 = str_replace('data:image/png;base64,', '', $image62);
	$image62 = str_replace(' ', '+', $image62);
	$im62 = base64_decode($image62);
	$file ='../uploads/item/image62'.$id.'.jpg';
	$success = file_put_contents($file, $im62);
	$target_path62 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image62'.$id.'s.jpg';
	resizeImage($target_path62, $id, $filename);
	$target_paths62="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",62,'".$target_path62."','".$target_paths62."')";
	$s = mysqli_query($conn, $sql);
}
if ($image63!=null){
	$image63 = str_replace('data:image/png;base64,', '', $image63);
	$image63 = str_replace(' ', '+', $image63);
	$im63 = base64_decode($image63);
	$file ='../uploads/item/image63'.$id.'.jpg';
	$success = file_put_contents($file, $im63);
	$target_path63 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image63'.$id.'s.jpg';
	resizeImage($target_path63, $id, $filename);
	$target_paths63="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",63,'".$target_path63."','".$target_paths63."')";
	$s = mysqli_query($conn, $sql);
}
if ($image64!=null){
	$image64 = str_replace('data:image/png;base64,', '', $image64);
	$image64 = str_replace(' ', '+', $image64);
	$im64 = base64_decode($image64);
	$file ='../uploads/item/image64'.$id.'.jpg';
	$success = file_put_contents($file, $im64);
	$target_path64 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image64'.$id.'s.jpg';
	resizeImage($target_path64, $id, $filename);
	$target_paths64="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",64,'".$target_path64."','".$target_paths64."')";
	$s = mysqli_query($conn, $sql);
}
if ($image65!=null){
	$image65 = str_replace('data:image/png;base64,', '', $image65);
	$image65 = str_replace(' ', '+', $image65);
	$im65 = base64_decode($image65);
	$file ='../uploads/item/image65'.$id.'.jpg';
	$success = file_put_contents($file, $im65);
	$target_path65 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image65'.$id.'s.jpg';
	resizeImage($target_path65, $id, $filename);
	$target_paths65="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",65,'".$target_path65."','".$target_paths65."')";
	$s = mysqli_query($conn, $sql);
}
if ($image66!=null){
	$image66 = str_replace('data:image/png;base64,', '', $image66);
	$image66 = str_replace(' ', '+', $image66);
	$im66 = base64_decode($image66);
	$file ='../uploads/item/image66'.$id.'.jpg';
	$success = file_put_contents($file, $im66);
	$target_path66 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image66'.$id.'s.jpg';
	resizeImage($target_path66, $id, $filename);
	$target_paths66="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",66,'".$target_path66."','".$target_paths66."')";
	$s = mysqli_query($conn, $sql);
}
if ($image67!=null){
	$image67 = str_replace('data:image/png;base64,', '', $image67);
	$image67 = str_replace(' ', '+', $image67);
	$im67 = base64_decode($image67);
	$file ='../uploads/item/image67'.$id.'.jpg';
	$success = file_put_contents($file, $im67);
	$target_path67 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image67'.$id.'s.jpg';
	resizeImage($target_path67, $id, $filename);
	$target_paths67="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",67,'".$target_path67."','".$target_paths67."')";
	$s = mysqli_query($conn, $sql);
}
if ($image68!=null){
	$image68 = str_replace('data:image/png;base64,', '', $image68);
	$image68 = str_replace(' ', '+', $image68);
	$im68 = base64_decode($image68);
	$file ='../uploads/item/image68'.$id.'.jpg';
	$success = file_put_contents($file, $im68);
	$target_path68 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image68'.$id.'s.jpg';
	resizeImage($target_path68, $id, $filename);
	$target_paths68="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",68,'".$target_path68."','".$target_paths68."')";
	$s = mysqli_query($conn, $sql);
}
if ($image69!=null){
	$image69 = str_replace('data:image/png;base64,', '', $image69);
	$image69 = str_replace(' ', '+', $image69);
	$im69 = base64_decode($image69);
	$file ='../uploads/item/image69'.$id.'.jpg';
	$success = file_put_contents($file, $im69);
	$target_path69 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image69'.$id.'s.jpg';
	resizeImage($target_path69, $id, $filename);
	$target_paths69="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",69,'".$target_path69."','".$target_paths69."')";
	$s = mysqli_query($conn, $sql);
}
if ($image70!=null){
	$image70 = str_replace('data:image/png;base64,', '', $image70);
	$image70 = str_replace(' ', '+', $image70);
	$im70 = base64_decode($image70);
	$file ='../uploads/item/image70'.$id.'.jpg';
	$success = file_put_contents($file, $im70);
	$target_path70 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image70'.$id.'s.jpg';
	resizeImage($target_path70, $id, $filename);
	$target_paths70="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",70,'".$target_path70."','".$target_paths70."')";
	$s = mysqli_query($conn, $sql);
}
if ($image71!=null){
	$image71 = str_replace('data:image/png;base64,', '', $image71);
	$image71 = str_replace(' ', '+', $image71);
	$im71 = base64_decode($image71);
	$file ='../uploads/item/image71'.$id.'.jpg';
	$success = file_put_contents($file, $im71);
	$target_path71 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image71'.$id.'s.jpg';
	resizeImage($target_path71, $id, $filename);
	$target_paths71="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",71,'".$target_path71."','".$target_paths71."')";
	$s = mysqli_query($conn, $sql);
}
if ($image72!=null){
	$image72 = str_replace('data:image/png;base64,', '', $image72);
	$image72 = str_replace(' ', '+', $image72);
	$im72 = base64_decode($image72);
	$file ='../uploads/item/image72'.$id.'.jpg';
	$success = file_put_contents($file, $im72);
	$target_path72 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image72'.$id.'s.jpg';
	resizeImage($target_path72, $id, $filename);
	$target_paths72="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",72,'".$target_path72."','".$target_paths72."')";
	$s = mysqli_query($conn, $sql);
}
if ($image73!=null){
	$image73 = str_replace('data:image/png;base64,', '', $image73);
	$image73 = str_replace(' ', '+', $image73);
	$im73 = base64_decode($image73);
	$file ='../uploads/item/image73'.$id.'.jpg';
	$success = file_put_contents($file, $im73);
	$target_path73 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image73'.$id.'s.jpg';
	resizeImage($target_path73, $id, $filename);
	$target_paths73="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",73,'".$target_path73."','".$target_paths73."')";
	$s = mysqli_query($conn, $sql);
}
if ($image74!=null){
	$image74 = str_replace('data:image/png;base64,', '', $image74);
	$image74 = str_replace(' ', '+', $image74);
	$im74 = base64_decode($image74);
	$file ='../uploads/item/image74'.$id.'.jpg';
	$success = file_put_contents($file, $im74);
	$target_path74 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image74'.$id.'s.jpg';
	resizeImage($target_path74, $id, $filename);
	$target_paths74="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",74,'".$target_path74."','".$target_paths74."')";
	$s = mysqli_query($conn, $sql);
}
if ($image75!=null){
	$image75 = str_replace('data:image/png;base64,', '', $image75);
	$image75 = str_replace(' ', '+', $image75);
	$im75 = base64_decode($image75);
	$file ='../uploads/item/image75'.$id.'.jpg';
	$success = file_put_contents($file, $im75);
	$target_path75 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image75'.$id.'s.jpg';
	resizeImage($target_path75, $id, $filename);
	$target_paths75="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",75,'".$target_path75."','".$target_paths75."')";
	$s = mysqli_query($conn, $sql);
}
if ($image76!=null){
	$image76 = str_replace('data:image/png;base64,', '', $image76);
	$image76 = str_replace(' ', '+', $image76);
	$im76 = base64_decode($image76);
	$file ='../uploads/item/image76'.$id.'.jpg';
	$success = file_put_contents($file, $im76);
	$target_path76 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image76'.$id.'s.jpg';
	resizeImage($target_path76, $id, $filename);
	$target_paths76="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",76,'".$target_path76."','".$target_paths76."')";
	$s = mysqli_query($conn, $sql);
}
if ($image77!=null){
	$image77 = str_replace('data:image/png;base64,', '', $image77);
	$image77 = str_replace(' ', '+', $image77);
	$im77 = base64_decode($image77);
	$file ='../uploads/item/image77'.$id.'.jpg';
	$success = file_put_contents($file, $im77);
	$target_path77 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image77'.$id.'s.jpg';
	resizeImage($target_path77, $id, $filename);
	$target_paths77="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",77,'".$target_path77."','".$target_paths77."')";
	$s = mysqli_query($conn, $sql);
}
if ($image78!=null){
	$image78 = str_replace('data:image/png;base64,', '', $image78);
	$image78 = str_replace(' ', '+', $image78);
	$im78 = base64_decode($image78);
	$file ='../uploads/item/image78'.$id.'.jpg';
	$success = file_put_contents($file, $im78);
	$target_path78 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image78'.$id.'s.jpg';
	resizeImage($target_path78, $id, $filename);
	$target_paths78="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",78,'".$target_path78."','".$target_paths78."')";
	$s = mysqli_query($conn, $sql);
}
if ($image79!=null){
	$image79 = str_replace('data:image/png;base64,', '', $image79);
	$image79 = str_replace(' ', '+', $image79);
	$im79 = base64_decode($image79);
	$file ='../uploads/item/image79'.$id.'.jpg';
	$success = file_put_contents($file, $im79);
	$target_path79 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image79'.$id.'s.jpg';
	resizeImage($target_path79, $id, $filename);
	$target_paths79="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",79,'".$target_path79."','".$target_paths79."')";
	$s = mysqli_query($conn, $sql);
}
if ($image80!=null){
	$image80 = str_replace('data:image/png;base64,', '', $image80);
	$image80 = str_replace(' ', '+', $image80);
	$im80 = base64_decode($image80);
	$file ='../uploads/item/image80'.$id.'.jpg';
	$success = file_put_contents($file, $im80);
	$target_path80 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image80'.$id.'s.jpg';
	resizeImage($target_path80, $id, $filename);
	$target_paths80="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",80,'".$target_path80."','".$target_paths80."')";
	$s = mysqli_query($conn, $sql);
}
if ($image81!=null){
	$image81 = str_replace('data:image/png;base64,', '', $image81);
	$image81 = str_replace(' ', '+', $image81);
	$im81 = base64_decode($image81);
	$file ='../uploads/item/image81'.$id.'.jpg';
	$success = file_put_contents($file, $im81);
	$target_path81 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image81'.$id.'s.jpg';
	resizeImage($target_path81, $id, $filename);
	$target_paths81="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",81,'".$target_path81."','".$target_paths81."')";
	$s = mysqli_query($conn, $sql);
}
if ($image82!=null){
	$image82 = str_replace('data:image/png;base64,', '', $image82);
	$image82 = str_replace(' ', '+', $image82);
	$im82 = base64_decode($image82);
	$file ='../uploads/item/image82'.$id.'.jpg';
	$success = file_put_contents($file, $im82);
	$target_path82 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image82'.$id.'s.jpg';
	resizeImage($target_path82, $id, $filename);
	$target_paths82="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",82,'".$target_path82."','".$target_paths82."')";
	$s = mysqli_query($conn, $sql);
}
if ($image83!=null){
	$image83 = str_replace('data:image/png;base64,', '', $image83);
	$image83 = str_replace(' ', '+', $image83);
	$im83 = base64_decode($image83);
	$file ='../uploads/item/image83'.$id.'.jpg';
	$success = file_put_contents($file, $im83);
	$target_path83 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image83'.$id.'s.jpg';
	resizeImage($target_path83, $id, $filename);
	$target_paths83="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",83,'".$target_path83."','".$target_paths83."')";
	$s = mysqli_query($conn, $sql);
}
if ($image84!=null){
	$image84 = str_replace('data:image/png;base64,', '', $image84);
	$image84 = str_replace(' ', '+', $image84);
	$im84 = base64_decode($image84);
	$file ='../uploads/item/image84'.$id.'.jpg';
	$success = file_put_contents($file, $im84);
	$target_path84 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image84'.$id.'s.jpg';
	resizeImage($target_path84, $id, $filename);
	$target_paths84="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",84,'".$target_path84."','".$target_paths84."')";
	$s = mysqli_query($conn, $sql);
}
if ($image85!=null){
	$image85 = str_replace('data:image/png;base64,', '', $image85);
	$image85 = str_replace(' ', '+', $image85);
	$im85 = base64_decode($image85);
	$file ='../uploads/item/image85'.$id.'.jpg';
	$success = file_put_contents($file, $im85);
	$target_path85 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image85'.$id.'s.jpg';
	resizeImage($target_path85, $id, $filename);
	$target_paths85="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",85,'".$target_path85."','".$target_paths85."')";
	$s = mysqli_query($conn, $sql);
}
if ($image86!=null){
	$image86 = str_replace('data:image/png;base64,', '', $image86);
	$image86 = str_replace(' ', '+', $image86);
	$im86 = base64_decode($image86);
	$file ='../uploads/item/image86'.$id.'.jpg';
	$success = file_put_contents($file, $im86);
	$target_path86 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image86'.$id.'s.jpg';
	resizeImage($target_path86, $id, $filename);
	$target_paths86="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",86,'".$target_path86."','".$target_paths86."')";
	$s = mysqli_query($conn, $sql);
}
if ($image87!=null){
	$image87 = str_replace('data:image/png;base64,', '', $image87);
	$image87 = str_replace(' ', '+', $image87);
	$im87 = base64_decode($image87);
	$file ='../uploads/item/image87'.$id.'.jpg';
	$success = file_put_contents($file, $im87);
	$target_path87 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image87'.$id.'s.jpg';
	resizeImage($target_path87, $id, $filename);
	$target_paths87="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",87,'".$target_path87."','".$target_paths87."')";
	$s = mysqli_query($conn, $sql);
}
if ($image88!=null){
	$image88 = str_replace('data:image/png;base64,', '', $image88);
	$image88 = str_replace(' ', '+', $image88);
	$im88 = base64_decode($image88);
	$file ='../uploads/item/image88'.$id.'.jpg';
	$success = file_put_contents($file, $im88);
	$target_path88 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image88'.$id.'s.jpg';
	resizeImage($target_path88, $id, $filename);
	$target_paths88="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",88,'".$target_path88."','".$target_paths88."')";
	$s = mysqli_query($conn, $sql);
}
if ($image89!=null){
	$image89 = str_replace('data:image/png;base64,', '', $image89);
	$image89 = str_replace(' ', '+', $image89);
	$im89 = base64_decode($image89);
	$file ='../uploads/item/image89'.$id.'.jpg';
	$success = file_put_contents($file, $im89);
	$target_path89 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image89'.$id.'s.jpg';
	resizeImage($target_path89, $id, $filename);
	$target_paths89="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",89,'".$target_path89."','".$target_paths89."')";
	$s = mysqli_query($conn, $sql);
}
if ($image90!=null){
	$image90 = str_replace('data:image/png;base64,', '', $image90);
	$image90 = str_replace(' ', '+', $image90);
	$im90 = base64_decode($image90);
	$file ='../uploads/item/image90'.$id.'.jpg';
	$success = file_put_contents($file, $im90);
	$target_path90 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image90'.$id.'s.jpg';
	resizeImage($target_path90, $id, $filename);
	$target_paths90="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",90,'".$target_path90."','".$target_paths90."')";
	$s = mysqli_query($conn, $sql);
}
if ($image91!=null){
	$image91 = str_replace('data:image/png;base64,', '', $image91);
	$image91 = str_replace(' ', '+', $image91);
	$im91 = base64_decode($image91);
	$file ='../uploads/item/image91'.$id.'.jpg';
	$success = file_put_contents($file, $im91);
	$target_path91 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image91'.$id.'s.jpg';
	resizeImage($target_path91, $id, $filename);
	$target_paths91="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",91,'".$target_path91."','".$target_paths91."')";
	$s = mysqli_query($conn, $sql);
}
if ($image92!=null){
	$image92 = str_replace('data:image/png;base64,', '', $image92);
	$image92 = str_replace(' ', '+', $image92);
	$im92 = base64_decode($image92);
	$file ='../uploads/item/image92'.$id.'.jpg';
	$success = file_put_contents($file, $im92);
	$target_path92 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image92'.$id.'s.jpg';
	resizeImage($target_path92, $id, $filename);
	$target_paths92="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",92,'".$target_path92."','".$target_paths92."')";
	$s = mysqli_query($conn, $sql);
}
if ($image93!=null){
	$image93 = str_replace('data:image/png;base64,', '', $image93);
	$image93 = str_replace(' ', '+', $image93);
	$im93 = base64_decode($image93);
	$file ='../uploads/item/image93'.$id.'.jpg';
	$success = file_put_contents($file, $im93);
	$target_path93 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image93'.$id.'s.jpg';
	resizeImage($target_path93, $id, $filename);
	$target_paths93="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",93,'".$target_path93."','".$target_paths93."')";
	$s = mysqli_query($conn, $sql);
}
if ($image94!=null){
	$image94 = str_replace('data:image/png;base64,', '', $image94);
	$image94 = str_replace(' ', '+', $image94);
	$im94 = base64_decode($image94);
	$file ='../uploads/item/image94'.$id.'.jpg';
	$success = file_put_contents($file, $im94);
	$target_path94 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image94'.$id.'s.jpg';
	resizeImage($target_path94, $id, $filename);
	$target_paths94="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",94,'".$target_path94."','".$target_paths94."')";
	$s = mysqli_query($conn, $sql);
}
if ($image95!=null){
	$image95 = str_replace('data:image/png;base64,', '', $image95);
	$image95 = str_replace(' ', '+', $image95);
	$im95 = base64_decode($image95);
	$file ='../uploads/item/image95'.$id.'.jpg';
	$success = file_put_contents($file, $im95);
	$target_path95 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image95'.$id.'s.jpg';
	resizeImage($target_path95, $id, $filename);
	$target_paths95="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",95,'".$target_path95."','".$target_paths95."')";
	$s = mysqli_query($conn, $sql);
}
if ($image96!=null){
	$image96 = str_replace('data:image/png;base64,', '', $image96);
	$image96 = str_replace(' ', '+', $image96);
	$im96 = base64_decode($image96);
	$file ='../uploads/item/image96'.$id.'.jpg';
	$success = file_put_contents($file, $im96);
	$target_path96 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image96'.$id.'s.jpg';
	resizeImage($target_path96, $id, $filename);
	$target_paths96="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",96,'".$target_path96."','".$target_paths96."')";
	$s = mysqli_query($conn, $sql);
}
if ($image97!=null){
	$image97 = str_replace('data:image/png;base64,', '', $image97);
	$image97 = str_replace(' ', '+', $image97);
	$im97 = base64_decode($image97);
	$file ='../uploads/item/image97'.$id.'.jpg';
	$success = file_put_contents($file, $im97);
	$target_path97 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image97'.$id.'s.jpg';
	resizeImage($target_path97, $id, $filename);
	$target_paths97="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",97,'".$target_path97."','".$target_paths97."')";
	$s = mysqli_query($conn, $sql);
}
if ($image98!=null){
	$image98 = str_replace('data:image/png;base64,', '', $image98);
	$image98 = str_replace(' ', '+', $image98);
	$im98 = base64_decode($image98);
	$file ='../uploads/item/image98'.$id.'.jpg';
	$success = file_put_contents($file, $im98);
	$target_path98 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image98'.$id.'s.jpg';
	resizeImage($target_path98, $id, $filename);
	$target_paths98="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",98,'".$target_path98."','".$target_paths98."')";
	$s = mysqli_query($conn, $sql);
}
if ($image99!=null){
	$image99 = str_replace('data:image/png;base64,', '', $image99);
	$image99 = str_replace(' ', '+', $image99);
	$im99 = base64_decode($image99);
	$file ='../uploads/item/image99'.$id.'.jpg';
	$success = file_put_contents($file, $im99);
	$target_path99 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image99'.$id.'s.jpg';
	resizeImage($target_path99, $id, $filename);
	$target_paths99="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",99,'".$target_path99."','".$target_paths99."')";
	$s = mysqli_query($conn, $sql);
}
if ($image100!=null){
	$image100 = str_replace('data:image/png;base64,', '', $image100);
	$image100 = str_replace(' ', '+', $image100);
	$im100 = base64_decode($image100);
	$file ='../uploads/item/image100'.$id.'.jpg';
	$success = file_put_contents($file, $im100);
	$target_path100 = "http://vnitts.com/ionic100".$file;
	$filename = '../uploads/item/image100'.$id.'s.jpg';
	resizeImage($target_path100, $id, $filename);
	$target_paths100="http://vnitts.com/ionic100".$filename;
	$sql ="INSERT INTO `image`( `idItem`, `stt`, `imager`, `images`) VALUES (".$id.",100,'".$target_path100."','".$target_paths100."')";
	$s = mysqli_query($conn, $sql);
}

$stime=date('Y/m/d H:i:s');
if ($dem==102) $etime = date('Y/m/d H:i:s');
else
	$etime = null;

// $sql="INSERT INTO `item`(`uid`,`cat1id`, `cat2id`, `title`, `field1`, `field2`,`stime`,`etime`) VALUES ('".$uid."','".$cat1id."','".$cat2id."','".$title."','".$field1."','".$field2."', '".$stime."', '".$etime."') ";
// $cs = file_put_contents("date.txt", $sql);
// if ($update= mysqli_query($conn, $sql)) {
	echo json_encode(array("message" => "Data successfully uploaded") );
// }


function resizeImage($file, $id, $filename){

	$sourceProperties = getimagesize($file);
	// $fileNewName = '../uploads/item/image10'.$id.'s.jpg';
	$imageType = $sourceProperties[2];


	switch ($imageType) {


		case IMAGETYPE_PNG:
		$imageResourceId = imagecreatefrompng($file); 
		$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
		imagepng($targetLayer, $filename);
		break;


		case IMAGETYPE_GIF:
		$imageResourceId = imagecreatefromgif($file); 
		$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
		imagegif($targetLayer, $filename);
		break;


		case IMAGETYPE_JPEG:
		$imageResourceId = imagecreatefromjpeg($file); 
		$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
		imagejpeg($targetLayer,$filename);
		break;


		default:
		echo "Invalid Image type.";
		exit;
		break;
	}


	move_uploaded_file($file,$filename);
	// echo "Image Resize Successfully.";
}

function imageResize($imageResourceId,$width,$height) {


	$targetWidth =200;
	$targetHeight =200;
	$targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
	imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);
	return $targetLayer;
}

?>