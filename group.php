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
          <li class="pull-left header"><i class="fa fa-map-marker fa-2" aria-hidden="true"></i>Group</li>

        </ul>
      </div>

      <button class="btn btn-primary " class="pull-left" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle fa-6" aria-hidden="true"></i> Thêm Group</button>
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
          getresult("getresultgroup.php");
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
    getresult("getresultgroup.php");
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
        <h4 class="modal-title">Thêm mới group</h4>
      </div>
      <div class="modal-body">

        <form role="form" action="add-group.php" method="POST" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên Group</label> 
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter group Name" name="groupname" required="required">
            </div> 
          </div>
          <div class="form-group text-muted well well-sm no-shadow">
           <p class="help-block">Chọn 1 group</p>                     
           <lable><b>Groups</b></lable><br>
           <select  name="groupparent" id="cat1" class="pagination-setting"> 
             <?php $sql1="SELECT * FROM `group` ";
             $check1= mysqli_query($conn, $sql1);
             $resultcheck1= mysqli_fetch_array($check1,MYSQLI_BOTH);

             foreach($check1 as $row){?>

               <div class="checkbox-inline">

                <option><?php echo $row['name']; ?></option>

              </div>

            <?php } ?>
            <br>
          </select>
          
          <br>

        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Thêm Group" name="addgroup" id="postme"  title='Fill all the deatails completely'>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <?php include 'scriptfooter.php'; ?>
