<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'widget.php';
$id=$_GET['id'];
$id= base64_decode($id);?> 

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
          <li class="pull-left header"><i class="fa fa-map-marker fa-2" aria-hidden="true"></i>Người Dùng</li>

        </ul>
      </div>

  
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
          getresult("getresultviewfamily.php?id=<?php echo $id;?>");
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
      <form action="add-tracker.php?id=<?php echo base64_encode($id);?>" method="POST">
       <div style="border-bottom: #F0F0F0 1px solid;margin-bottom: 15px;">
       Add tracker:</div>
       <select class="chosen-select" name="adduser[]" id="adduser" multiple>
        <!-- <option value=" " selected="selected"> </option> -->
        <?php $checkuser= mysqli_query($conn, "select * from `user` where roleId = 4");
              // $checkgroup= mysqli_query($conn, "select * from `group_user` where `groupId`=".$id."");
        while($r= mysqli_fetch_array($checkuser)){
          ?>
          <option <?php
          $checkgroup=mysqli_query($conn,"select * from `family_user` where `monitor`=".$id."");
          while ($rr=mysqli_fetch_array($checkgroup)) {
            if($rr['tracker']==$r['id']) echo   "disabled='disabled'";
          }
          ?>><?php echo $r['email'];?></option>
        <?php } ?>
        
      </select>
      
  

    <button type= "submit" class=" btn btn-primary " >ADD<i class="fa fa-pencil" aria-hidden="true" ></i></button>
  </form>
</div>
  </div>
     <div id="pagination-result">
       <input type="hidden" name="rowcount" id="rowcount" />
     </div>
   </div>
   <script>
    getresult("getresultviewfamily.php?id=<?php echo $id;?>");
  </script>


</div>
<!-- /.box-body -->
</div>
</section>
</div></section>
</div>



<!-- Modal -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



<script src="chosen.jquery.js" type="text/javascript"></script>
<script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
<script src="docsupport/init.js" type="text/javascript" charset="utf-8"></script>
  <?php include 'scriptfooter.php'; ?>
