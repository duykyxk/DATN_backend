
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
      $sql="SELECT * FROM `cat` where id='".$id."' ";
         // var_dump($sql);
      $check= mysqli_query($conn, $sql);
      $resultcheck= mysqli_fetch_array($check,MYSQLI_BOTH);
          //var_dump($resultcheck);

      
      ?>
      
      
      
      
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tất cả Categories</h3>

          
        </div>
        
        <form role="form" action="edit-cat.php?id=<?php echo base64_encode($id); ?>" method="POST" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên Category</label>
              <input type="text" class="form-control"  value="<?php echo $resultcheck['name']; ?>" name="catname" required="required">
            </div>
            
            <div class="form-group">
              <label for="exampleInputFile">Category Cha</label>
              <br>
               <div class="form-group text-muted well well-sm no-shadow">
              <select  name="cat1parent" id="cat1" class="pagination-setting"> 
                 <p class="help-block">Chọn 1 catagory</p>                     
            <lable><b>Categories</b></lable><br>
               <?php
               $p = mysqli_query($conn, "SELECT * FROM `cat` WHERE parentId = 0");
               while($tr=mysqli_fetch_array($p)){ 
                ?>
                <option <?php if($resultcheck['parentId']==0){
                  if($tr['name']=="Không có cat cha")echo "selected='selected'";
                }else{
                  if($resultcheck['parentId'] == $tr['id']) echo "selected='selected'";
                }

                ?>>
                <?php echo $tr['name']; ?>

              </option>
            <?php } ?> 
                      <!-- <option>a</option>
                        <option>b</option> -->
                      </select>
                    </div>
                    
                  </div>
                  
                 </div> 
                  
                  
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Edit Category" name="addcat">
                  </form>
                </section>
              </div></section>
            </div>
            <?php include 'footer.php'; ?>

          
          </div>
          
          
          
          
          
          
          
          