<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'widget.php'; ?>

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
          <li class="pull-left header"><i class="fa fa-inbox"></i>Place Details</li>
          
        </ul>
      </div>
      
      
      <hr>
      <br>
      <!--<h1>hello</h1>-->
      <?php
      $id=$_GET['id'];
      $id= base64_decode($id);
      $_SESSION['place_id']=$id;
      
      
      $sql="SELECT * FROM `place` where id='".$id."' ";
         // var_dump($sql);
      $check= mysqli_query($conn, $sql);
      $resultcheck= mysqli_fetch_array($check,MYSQLI_BOTH);
          //var_dump($resultcheck);
//exit();
      $_SESSION['place_id']=$resultcheck['id'];
      
      ?>
      
      
      
      
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              <i class="fa fa-globe"></i>Place Details.
              <small class="pull-right"><div class="form-group">

              </small>
            </h2>
          </div>
          <!-- /.col -->
        </div>
        <div class="row">

          <!-- /.col -->
          <form role="form" action="edit-place.php" method="POST" enctype="multipart/form-data" id="myform" >
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Place Name" name="placename"  value="<?php echo $resultcheck['name']; ?>">
              </div>
              <label for="exampleInputEmail1">Address</label>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Address" name="placeaddress"  value="<?php echo $resultcheck['address']; ?>">  
              </div>
                <!-- <label for="exampleInputEmail1">Facility</label>
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Facility" name="placefaci"  value="<?php echo $resultcheck['facility']; ?>">  
                </div> -->
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" rows="5" id="comment" placeholder="Enter Description" name="placedes"><?php echo $resultcheck['description']; ?></textarea>
                
               <!--  <div class="form-group">
                  <label for="exampleInputEmail1">Phone No</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Place Phone No" name="placephone"  value="<?php echo $resultcheck['phone']; ?>">
                </div> -->
                
                <!-- <div class="form-group">
                  <label for="exampleInputEmail1">Website</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Place Webiste" name="placeweb"  value="<?php echo $resultcheck['website']; ?>">
                </div> -->
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Latitude, Longitude</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter place Latitude" name="placelat"  value="<?php echo $resultcheck['latitude']; echo ","; echo $resultcheck['longitude']; ?>">
                </div>
                
              <!--   <div class="form-group">
                  <label for="exampleInputEmail1">Longitude</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter place Longitude" name="placelong"  value="<?php echo $resultcheck['longitude']; ?>">
                  <p style="float: right"><a target="_blank" href="http://www.mapcoordinates.net/en">COORDINATE PICKER</a></p>
                </div> -->
                   </div>
                <br>
                <div class="form-group text-muted well well-sm no-shadow">
                 <p class="help-block" for="terms" id="terms"><div id="cont"></div>Please check atleast one category.</p>                     
                 <lable><b>Categories</b></lable><br>
                 <?php $sql1="SELECT * FROM `cat` ";
         // var_dump($sql);
                 $check1= mysqli_query($conn, $sql1);
                 $resultcheck1= mysqli_fetch_array($check1,MYSQLI_BOTH);

                 $sql11="SELECT * FROM `cat_place` where placeId='".$_SESSION['place_id']."'";

                 $check11= mysqli_query($conn, $sql11);
                 $autocheck= mysqli_fetch_array($check11,MYSQLI_ASSOC);
                 
                 foreach($check1 as $row){   
                  ?>
                  
                  <div class="checkbox-inline">
                   <span style="margin-left:10px"></span><input name="chk[]" value="<?php echo $row['id'];?>" type="checkbox" id="mycheckbox"  <?php foreach($check11 as $row1) { if ($row['id']==$row1['catId']) {echo 'checked="checked"'; }else { } }?> ><span><?php echo $row['name'];?> </span><span style="margin-left:10px"></span>
                 </div>
                 
               <?php }?>

               <br>
               
             </div>
             <div class="form-group text-muted well well-sm no-shadow">
              
               <p class="help-block">Chọn 1 Area</p>                     
               <lable><b>Area</b></lable><br>
               <select  name="areaId" id="area" class="pagination-setting"> 
               <?php
               $p = mysqli_query($conn, "SELECT * FROM `area`");
               while($tr=mysqli_fetch_array($p)){ 
                ?>
                <option <?php
                if($resultcheck['areaId'] == $tr['id']) echo "selected='selected'";
                

                ?>>
                <?php echo $tr['name']; ?>

              </option>
            <?php } ?> 

          </select>
</div>
 

  <div class="modal-footer">
    <input type="submit" class="btn btn-primary" value="Update Place" name="addplace" id="postme"  title='Please fill all mandatory details. '>
  </form>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- <script>

  var checkboxes = $("input[type='checkbox']"),
  submitButt = $("input[type='submit']");

  checkboxes.click(function() {
    submitButt.attr("disabled", !checkboxes.is(":checked"));
  });

</script> -->
<hr>
<h2> Lựa chọn địa điểm</h2>
<?php
include "map.php"; ?>



