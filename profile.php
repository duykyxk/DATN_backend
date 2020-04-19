<?php include 'header.php'; ?>
  <?php include 'sidebar.php'; ?>
<?php include 'widget.php';?>
 

       <?php
       $id = $_SESSION['id'];
       //$uid=$_GET['id'];
       //$uid=base64_decode($uid);
           $sql="SELECT * FROM `user` where id ='".$id."'";
         // var_dump($sql);
          $check= mysqli_query($conn, $sql);
          $resultcheck= mysqli_fetch_array($check,MYSQLI_ASSOC);
          //var_dump($resultcheck);

 
// var_dump($resultcheck);
 ?>
    <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="upprofile.php" method="post">
              <div class="box-body">
                 
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" name="email" value ="<?php echo $resultcheck['email']; ?> ">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tên</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Name" value="<?php echo $resultcheck['name']; ?>" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Số điện thoại</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Name" value="<?php echo $resultcheck['phone']; ?>" name="phone">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Địa chỉ</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Name" value="<?php echo $resultcheck['address']; ?>" name="address">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Chức vụ</label>

                  <div class="col-sm-10">
                      <label type="text" class="form-control" id="inputPassword3" placeholder="Name" >Quản lý </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Old Password</label>

                  <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Old password" name="oldpass">
                  </div>
                </div>
                
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>

                 <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="New password" name="password">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <input type="submit" class="btn btn-default pull-right" value="Update" name="update">
               
              </div>
              <!-- /.box-footer -->
            </form>
           
       
<?php include 'scriptfooter.php';?>


