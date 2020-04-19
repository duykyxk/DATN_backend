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
          <li class="pull-left header"><i class="fa fa-inbox"></i>Category</li>

        </ul>
      </div>

      <!-- <button class="btn btn-primary " class="pull-left" data-toggle="modal" data-target="#myModal">Thêm Category</button> -->
      <hr>
      <br>
      <!--<h1>hello</h1>-->
      <?php
      $id=$_GET['id'];
      $id= base64_decode($id);
      $sql="SELECT * FROM `user` where id='".$id."' ";
         // var_dump($sql);
      $check= mysqli_query($conn, $sql);
      $resultcheck= mysqli_fetch_array($check,MYSQLI_BOTH);
      
      ?>

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tất cả Categories</h3>


        </div>

        <form role="form" action="edit-user.php?id=<?php echo base64_encode($id); ?>" method="POST" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên </label> 
              <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $resultcheck['name']?>" name="name" required="required">
            </div> 
            <div class="form-group">
              <label for="exampleInputEmail1">Giới tính</label> 
              <br>
              <select  name="gender" id="" class="pagination-setting"> 


               <div class="checkbox-inline">

                <option <?php if ($resultcheck['gender']==1) echo "selected='selected'"?>>Nam</option>
                <option   <?php if ($resultcheck['gender']==2) echo "selected='selected'"?>>Nữ</option>
                <option <?php if ($resultcheck['gender']==3) echo "selected='selected'"?>>Giới tính thứ 3</option>

              </div>


              <br>
            </select>
          </div> 
          <div class="form-group">
            <label for="exampleInputEmail1">Số điện thoại</label> 
            <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $resultcheck['phone']?>" name="phone" required="required">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Địa chỉ</label> 
            <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $resultcheck['address']?>" name="address" required="required">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label> 
            <label type="text" class="form-control" id="exampleInputEmail1" value="" name="email" required="required"><?php echo $resultcheck['email']?></label>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Mật khẩu</label> 
            <input type="text" class="form-control" id="exampleInputEmail1"  name="password" required="required">
          </div>


          <div class="form-group">
            <label for="exampleInputEmail1">Chức vụ</label>
            <br>
            <select  name="role" id="role" class="pagination-setting"> 
              <?php $roleSql = mysqli_query($conn,"select * from `role`");
              while ($ro = mysqli_fetch_array($roleSql)){ ?>

                <option <?php if ($resultcheck['roleId'] == $ro['id']) echo "selected='selected'"; ?> value="<?php echo $ro['id'];?>"> <?php echo $ro['name']; ?></option>";
             <?php } ?>



            </select>
          </div>
        </div>
        <br>

      </div>
    </div>
    <div class="modal-footer">
      <input type="submit" class="btn btn-primary" value="Cập nhập User" name="adduser" id="postme"  title='Fill all the deatails completely'>
    </form>
  </section>
</div></section>
</div>
<?php include 'footer.php'; ?>


</div>







