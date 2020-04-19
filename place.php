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
          <li class="pull-left header"><i class="fa fa-map-marker fa-2" aria-hidden="true"></i>Place</li>

        </ul>
      </div>

      <button class="btn btn-primary " class="pull-left" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle fa-6" aria-hidden="true"></i> Add Place</button>
      <hr>
      <br>
      <!--<h1>hello</h1>-->
      <script>
        function getresult(url) {
         $.ajax({
          url: url,
          type: "GET",
          data:  {rowcount:$("#rowcount").val(),"pagination_setting":$("#pagination-setting").val()},
          beforeSend: function(){$("#overlay").show();},
          success: function(data){
            $("#pagination-result").html(data);
            setInterval(function() {$("#overlay").hide(); },500);
          },
          error: function() 
          {} 	        
        });
       }
       function changePagination(option) {
         if(option!= "") {
          getresult("getresultplace.php");
        }
      }
    </script>






    <div id="overlay"><div><img src="loading.gif" width="64px" height="64px"/></div></div>
    <div class="page-content">
     <div style="border-bottom: #F0F0F0 1px solid;margin-bottom: 15px;">
       Hiển thị theo:<br> <select name="pagination-setting" onChange="changePagination(this.value);" class="pagination-setting" id="pagination-setting">
         <option value="all-links">Tất cả</option>
         <option value="prev-next">Phân trang</option>
       </select>
     </div>

     <div id="pagination-result">
       <input type="hidden" name="rowcount" id="rowcount" />
     </div>
   </div>
   <script>
    getresult("getresultplace.php");
  </script>


</div>
<!-- /.box-body -->
</div>
</section>
</div></section>
</div>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-lg">

    <!-- Modal content-->
    <div class="modal-content ">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm mới place</h4>
      </div>
      <div class="modal-body">

        <form role="form" action="add-place.php" method="POST" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Place Name" name="placename"  value="">
            </div>
            <label for="exampleInputEmail1">Address</label>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Address" name="placeaddress"  value="">  
            </div>
            
            <label for="exampleInputEmail1">Description</label>
            <textarea class="form-control" rows="5" id="comment" placeholder="Enter Description" name="placedes"></textarea>

            <div class="form-group">
              <label for="exampleInputEmail1">Latitude, Longgitude</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter place Latitude" name="placelat"  value="">
            </div>

            <div class="form-group">
             <!--  <label for="exampleInputEmail1">Longitude</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter place Longitude" name="placelong"  value=""> -->
              <!-- <p style="float: right"><a target="_blank" href="http://www.mapcoordinates.net/en">COORDINATE PICKER</a></p> -->
              <p style="float: right"><a target="_blank" href="map.php">Tra cứu địa điểm</a></p>
            </div>
          </div>
          <br>
          <div class="form-group text-muted well well-sm no-shadow">
           <p class="help-block" for="terms" id="terms"><div id="cont"></div>Please check atleast one category.</p>                     
           <lable><b>Categories</b></lable><br>
           <?php $sql1="SELECT * FROM `cat` ";
         // var_dump($sql);
           $check1= mysqli_query($conn, $sql1);
           $resultcheck1= mysqli_fetch_array($check1,MYSQLI_BOTH);




           foreach($check1 as $row){   
            ?>

            <div class="checkbox-inline">
             <span style="margin-left:10px"></span><input name="chk[]" value="<?php echo $row['id'];?>" type="checkbox" id="mycheckbox"><span><?php echo $row['name'];?> </span><span style="margin-left:10px"></span>
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
            <option >
              <?php echo $tr['name']; ?>

            </option>
          <?php } ?> 

        </select>
      </div>
    </div>
    <div class="modal-footer">
      <input type="submit" class="btn btn-primary" value="Thêm place" name="addplace" id="postme" disabled title='Fill all the deatails completely'>
    </form>
   

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>

    var checkboxes = $("input[type='checkbox']"),
    submitButt = $("input[type='submit']");

    checkboxes.click(function() {
      submitButt.attr("disabled", !checkboxes.is(":checked"));
    });

  </script>           



  <?php include 'scriptfooter.php'; ?>
