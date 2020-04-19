

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
      $sql="SELECT * FROM `area` where id='".$id."' ";
         // var_dump($sql);
      $check= mysqli_query($conn, $sql);
      $resultcheck= mysqli_fetch_array($check,MYSQLI_BOTH);
          //var_dump($resultcheck);

      
      ?>
      
      
      
      
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tất cả Area</h3>

          
        </div>
        
        <form role="form" action="edit-area.php?id=<?php echo base64_encode($id); ?>" method="POST" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên Area</label>
              <input type="text" class="form-control"  value="<?php echo $resultcheck['name']; ?>" name="areaname" required="required">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tên Country</label>
              <input type="text" class="form-control"  value="<?php echo $resultcheck['country']; ?>" name="country" required="required">
            </div><div class="form-group">
              <label for="exampleInputEmail1">Tên Area</label>
              <input type="text" class="form-control"  value="<?php echo $resultcheck['climate']; ?>" name="climate" required="required">
            </div>
          
                    
                  </div>
                  
                  
                  
                  
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Edit Area" name="addarea">
                  </form>
                </section>
              </div></section>
            </div>
            <?php include 'footer.php'; ?>

            <!-- Modal -->
            <!-- <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog"> -->

                <!-- Modal content-->
                <!-- <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thêm mới Category</h4>
                  </div>
                  <div class="modal-body">
                    
                    <form role="form" action="add-cat2.php" method="POST" enctype="multipart/form-data">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên Category</label> 
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name" name="catname" required="required">
                        </div>
                        
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên catagory cha</label>
                          <br>
                          <select  name="cat2parent" id="cat2" class="pagination-setting"> 
                           <?php
                           $p = mysqli_query($conn, "SELECT name FROM `cat1` WHERE parentID = 0");
                           while($tr=mysqli_fetch_array($p)){ 
                            ?>
                            <option><?php echo $tr[0]; ?></option>
                          <?php } ?> 
                          
                        </select>
                      </div>
                      
                    </div>
                    
                    
                    
                    
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-success" value="Thêm Category" name="addcat">
                    </form>
                  </div>
                </div>
              </div>

            </div> -->
          </div>
          
          
          
          
          
          
          
          