
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
          <li class="pull-left header"><i class="fa fa-map-marker fa-2" aria-hidden="true"></i>Người Dùng</li>

        </ul>
      </div>

      <button class="btn btn-primary " class="pull-left" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle fa-6" aria-hidden="true"></i> Thêm user</button>
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
          getresult("getresultuser.php");
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
    getresult("getresultuser.php");
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
        <h4 class="modal-title">Thêm mới user</h4>
      </div>
      <div class="modal-body">

        <form role="form" action="add-user.php" method="POST" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên </label> 
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name" name="name" required="required">
            </div> 
             <div class="form-group">
              <label for="exampleInputEmail1">Giới tính</label> 
              <br>
              <select  name="gender" id="" class="pagination-setting"> 
             

               <div class="checkbox-inline">

                <option>Nam</option>
                <option>Nữ</option>
                <option>Giới tính thứ 3</option>

              </div>

            
            <br>
          </select>
            </div> 
            <div class="form-group">
              <label for="exampleInputEmail1">Số điện thoại</label> 
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Số điện thoại" name="phone" required="required">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Địa chỉ</label> 
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Địa chỉ" name="address" required="required">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label> 
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên đăng nhập" name="email" required="required">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Mật khẩu</label> 
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Mật khẩu" name="password" required="required">
            </div>


           <div class="form-group text-muted well well-sm no-shadow">

         <p class="help-block">Chức vụ</p>       
          <?php
           $p = mysqli_query($conn, "SELECT * FROM `role`");?>
                         
         <lable><b>Area</b></lable><br>
         <select  name="role" id="role" class="pagination-setting" > 
          <?php while($tr=mysqli_fetch_array($p)){ 
            ?>
            <option value="<?php echo $tr['id'];?>" >
              <?php echo $tr['name']; ?>

            </option>
          <?php } ?> 

        </select>
      </div>
          </div>
        <br>

      </div>
    </div>
    <div class="modal-footer">
      <input type="submit" class="btn btn-primary" value="Thêm User" name="adduser" id="postme"  title='Fill all the deatails completely'>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


  <?php include 'scriptfooter.php'; ?>
