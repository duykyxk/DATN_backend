<?php session_start(); include 'config.php'; include 'header.php'; ?>
  <?php include 'sidebar.php'; ?>
<?php include 'widget.php'; ?>



 
 

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-17 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
            <li class="pull-left header"><i class="fa fa-inbox"></i>Place Images</li>
           
            </ul>
          </div>
            <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure you want to delete?');
}
</script>


             <!--<button class="btn btn-primary " class="pull-left" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle fa-6"></i> Add Place</button>-->
             <hr>
                 <br>
            <!--<h1>hello</h1>-->
            <?php
            $id=$_GET['id'];
            $id= base64_decode($id);
$_SESSION['placemain_id']=$id;
            
            
           $sql="SELECT * FROM `app_placesmain` where id='".$id."' ";
         // var_dump($sql);
          $check= mysqli_query($conn, $sql);
          $resultcheck= mysqli_fetch_array($check,MYSQLI_BOTH);
          //var_dump($resultcheck);
//exit();
$_SESSION['place_id']=$resultcheck['place_id'];
$img=$resultcheck['image'];
$img1=$resultcheck['image1'];
$img2=$resultcheck['image2'];
$img3=$resultcheck['image3'];
$img4=$resultcheck['image4'];
$img5=$resultcheck['image5'];

                
  if($img=="NULL"){ $img=$defimg; }               
                 
                 
 ?>
         <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Manage Images</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
              <p>Click delete if you want To <code>delete</code> image:</p>
<br>
<style>
.container1 {
border: 5px solid #B22222;
border-radius: 5px;
margin-top: 5px;
margin-bottom: 15px;
 
}



</style>
 <div class="container1">
 <div class="row"><h3>Primary Image</h3>
                   <br> <center><img src="<?php echo $img ;?>" class="img-thumbnail" height="250" width="250"></center>

                    <br>                    </div>
                    <div class="row">
                  <button type="button" class="btn btn-info " data-toggle="modal" data-target="#mainimg">Update</button>

  
                    </div>
                    </div>
                    <div class="box-body text-center">
                    <div class="container1">
                    <div class="row">
                    <style> .img1 {
				display: inline-block;
				
				max-width: 30%;
				height: auto;
				width: 21%;
				margin: 1%;
			}</style>
                    <center>
                    <h3>Optional Image</h3>
                    
                     <?php 
                 
                 if($img1=="NULL"){ $img1=$defimg; }
                 if($img2=="NULL") { $img2=$defimg;  }
                 if($img3=="NULL") { $img3=$defimg; }
                 if($img4=="NULL") { $img4=$defimg; }
                 if($img5=="NULL") { $img5=$defimg; }
                 ?>
                    
                    
                    <img src="<?php echo $img1 ;?>" class="img1" height="100" width="100"><div class="row">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#img1">Update</button>  <a type="button" class="btn btn-danger" href="imgdel.php?clickid=1 & img=<?php echo $img1; ?>" <?php if($img1==$defimg){ echo'disabled="disabled"';}?>onClick="return checkDelete()">Delete</a>
                    </div>

                    <img src="<?php echo $img2 ;?>" class="img1" height="100" width="100"><div class="row">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#img2">Update</button>  <a type="button" class="btn btn-danger" href="imgdel.php?clickid=2 & img=<?php echo $img2; ?>" <?php if($img2==$defimg){ echo'disabled="disabled"';}?>onClick="return checkDelete()">Delete</a>
                    </div>

                    <img src="<?php echo $img3 ;?>" class="img1" height="100" width="100"><div class="row">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#img3">Update</button>  <a type="button" class="btn btn-danger" href="imgdel.php?clickid=3 & img=<?php echo $img3; ?>" <?php if($img3==$defimg){ echo'disabled="disabled"';}?>onClick="return checkDelete()">Delete</a>
                    </div>

                    <img src="<?php echo $img4 ;?>" class="img1" height="100" width="100"><div class="row">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#img4">Update</button>  <a type="button" class="btn btn-danger" href="imgdel.php?clickid=4 & img=<?php echo $img4; ?>" <?php if($img4==$defimg){ echo'disabled="disabled"';}?>onClick="return checkDelete()">Delete</a>
                    </div>


<img src="<?php echo $img5 ;?>" class="img1" height="100" width="100"><div class="row">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#img5">Update</button>  <a type="button" class="btn btn-danger" href="imgdel.php?clickid=5 & img=<?php echo $img5; ?>" <?php if($img5==$defimg){ echo'disabled="disabled"';}?>onClick="return checkDelete()">Delete</a>
                    </div>


                    </center></div></div></div></div></div></section></div></section>





  <!-------------------  modal start here ------------------>      
        
      
     
<!------------ main image modal end here ----------------->
<div id="mainimg" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Image</h4>
      </div>
      <div class="modal-body">
       
       
       <form role="form" action="updateimage.php" method="POST" enctype="multipart/form-data">
       <div class="form-group">
                  <label for="exampleInputFile">Primary Image</label>
                  <input type="file" id="exampleInputFile" name="placeimg" required>
                  </div>
               <p class="help-block">Please upload GIf,JPG,Jpeg,BMP,PNG files only.</p>   
       
       
       
       
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Add Primary Image" name="mainimg"  title='Fill all the deatails completely'>
</form>
      </div>
    </div>

  </div>
</div>
<!------------------------------------------------main image modal end ------------------------------------------------>


<!------------------------------------------model optiona 1---------------------------------------------------------------->
<!------------ main image modal end here ----------------->
<div id="img1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Image</h4>
      </div>
      <div class="modal-body">
       
       
       <form role="form" action="updateimage.php" method="POST" enctype="multipart/form-data">
       <div class="form-group">
                  <label for="exampleInputFile">Optional Image</label>
                  <input type="file" id="exampleInputFile" name="op1" required>
                  </div>
               <p class="help-block">Please upload GIf,JPG,Jpeg,BMP,PNG files only.</p>   
       
       
       
       
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Add Image" name="img1"  title='Fill all the deatails completely'>
</form>
      </div>
    </div>

  </div>
</div>
<!------------------------------------------------------optional img 1------end here ------->


<!------------------------------------------model optiona 1---------------------------------------------------------------->
<!------------ main image modal end here ----------------->
<div id="img2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Image</h4>
      </div>
      <div class="modal-body">
       
       
       <form role="form" action="updateimage.php" method="POST" enctype="multipart/form-data">
       <div class="form-group">
                  <label for="exampleInputFile">Optional Image</label>
                  <input type="file" id="exampleInputFile" name="op2" required>
                  </div>
               <p class="help-block">Please upload GIf,JPG,Jpeg,BMP,PNG files only.</p>   
       
       
       
       
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Add Image" name="img2"  title='Fill all the deatails completely'>
</form>
      </div>
    </div>

  </div>
</div>
<!------------------------------------------------op 2 end here==--------------------------------------------->

<!------------------------------------------model optiona 1---------------------------------------------------------------->
<!------------ main image modal end here ----------------->
<div id="img3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Image</h4>
      </div>
      <div class="modal-body">
       
       
       <form role="form" action="updateimage.php" method="POST" enctype="multipart/form-data">
       <div class="form-group">
                  <label for="exampleInputFile">Optional Image</label>
                  <input type="file" id="exampleInputFile" name="op3" required>
                  </div>
               <p class="help-block">Please upload GIf,JPG,Jpeg,BMP,PNG files only.</p>   
       
       
       
       
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Add Image" name="img3"  title='Fill all the deatails completely'>
</form>
      </div>
    </div>

  </div>
</div>
<!------------------------------------------------op 3 end here==--------------------------------------------->
<!------------------------------------------model optiona 1---------------------------------------------------------------->
<!------------ main image modal end here ----------------->
<div id="img4" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Image</h4>
      </div>
      <div class="modal-body">
       
       
       <form role="form" action="updateimage.php" method="POST" enctype="multipart/form-data">
       <div class="form-group">
                  <label for="exampleInputFile">Optional Image</label>
                  <input type="file" id="exampleInputFile" name="op4" required>
                  </div>
               <p class="help-block">Please upload GIf,JPG,Jpeg,BMP,PNG files only.</p>   
       
       
       
       
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Add Image" name="img4"  title='Fill all the deatails completely'>
</form>
      </div>
    </div>

  </div>
</div>
<!------------------------------------------------op 4 end here==--------------------------------------------->
<!------------------------------------------model optiona 1---------------------------------------------------------------->
<!------------ main image modal end here ----------------->
<div id="img5" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Image</h4>
      </div>
      <div class="modal-body">
       
       
       <form role="form" action="updateimage.php" method="POST" enctype="multipart/form-data">
       <div class="form-group">
                  <label for="exampleInputFile">Optional Image</label>
                  <input type="file" id="exampleInputFile" name="op5" required>
                  </div>
               <p class="help-block">Please upload GIf,JPG,Jpeg,BMP,PNG files only.</p>   
       
       
       
       
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Add Image" name="img5"  title='Fill all the details completely'>
</form>
      </div>
    </div>

  </div>
</div>
<!------------------------------------------------op 5 end here==--------------------------------------------->