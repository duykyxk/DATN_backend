<?php include 'config.php'; ?>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'widget.php'; ?>


   <script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
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
          <li class="pull-left header"><i class="fa fa-inbox"></i>Chi tiết</li>

        </ul>
      </div>

      <!-- <button class="btn btn-primary " class="pull-left" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle fa-6"></i> Thêm item</button> -->
      <hr>
      <br>
      <!--<h1>hello</h1>-->
      <?php
      $id=$_GET['id'];
      $id= base64_decode($id);

      if(empty($id))
      {
        echo'<script> alert("unauthrosize access not allowed");
        window.location.assign("dashboard.php")
        </script>';}else{

         $sql="SELECT * FROM `place` where id='".$id."' ";
         // var_dump($sql);
         $check= mysqli_query($conn, $sql);
         $resultcheck= mysqli_fetch_array($check,MYSQLI_BOTH);
          //var_dump($resultcheck);
    

         $_SESSION['item_id']=$resultcheck['id'];



         ?>

         <!-- Main content -->
         <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i>Chi tiết place.
                
              </h2>
            </div>
            <!-- /.col -->
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-xs-10">
              <p class="lead"><?php echo $resultcheck['name']; ?></p>

              <div class="table">
                <table class="table" >
                  <tr>
                    <th>Description:</th>
                    <td><?php echo $resultcheck['description']; ?></td>
                  </tr>
                
                  <tr>
                    <th>Category</th>
                    <td><?php $sql1="SELECT * FROM `cat` ";
         // var_dump($sql);
                    $check1= mysqli_query($conn, $sql1);
                    $resultcheck1= mysqli_fetch_array($check1,MYSQLI_BOTH);

                    $sql11="SELECT * FROM `place` where id='".$_SESSION['item_id']."'";
         // var_dump($sql);
                    $check11= mysqli_query($conn, $sql11);
                    $autocheck= mysqli_fetch_array($check11,MYSQLI_ASSOC);
//foreach($check11 as $row1){var_dump($row1);}exit();
//exit();

                    foreach($check1 as $row){   


                      ?>
                      
                      <div class="checkbox-inline">
                       <?php foreach($check11 as $row1) { if ($row['id']==$row1['id']) {
                        echo $row['name']; }else { } }?>        
                      </div>

                    <?php }?>
                    <br>
                  </td>
                </tr>

             </table>
             <table class="table " >

             
              <!-- <tr>
                <td><br>

                 <a href="editplace.php?id=<?php echo base64_encode($resultcheck['id']); ?>"><button type="button" class="btn btn-primary btn-lg  btn-success"><i class="fa fa-pencil-square fa-6" aria-hidden="true"></i> EDIT</button>
                 </td>
                 <td>
                  <br><a href="deleteplace.php?id=<?php echo base64_encode($resultcheck['id']);?>" onClick="return checkDelete()" class="btn btn-social-icon btn-google btn-lg"><i class="fa fa fa-trash-o"></i></a> 
                </td>
              </tr> -->
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


    </section>
  </div></section>
  <?php

//echo $rowcount;
if(1){?>
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBus9xYNKFJ0Xyq8QYLRqLmlXMYRRS85a4&callback=initMap"async defer></script>

  <script>
    
    var marker;
      function initialize() {
      
    // Variabel untuk menyimpan informasi (desc)
    var infoWindow = new google.maps.InfoWindow;
    
    //  Variabel untuk menyimpan peta Roadmap
    var mapOptions = {
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.ROADMAP
          
        }; 
    
    // Pembuatan petanya
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
              
        // Variabel untuk menyimpan batas kordinat
    var bounds = new google.maps.LatLngBounds();

    // Pengambilan data dari database
    
    
    
        
       addMarker(21.003109, 105.850932, "test");                        
      

          
     
              geocoder.geocode( { 'address': 'test' }, function(LocationResult, status) {
            if (status == google.maps.GeocoderStatus.OK) {
              var latitude = LocationResult[0].geometry.location.lat();
              var longitude = LocationResult[0].geometry.location.lng();
            } 
                      new google.maps.Marker({
                          position: new google.maps.LatLng(latitude, longitude),
                          map: map,
                          title: 'test'
                      });
          });
        
  // Proses membuat marker 
    function addMarker(lat, lng, info) {
      var lokasi = new google.maps.LatLng(lat, lng);
      bounds.extend(lokasi);
      var marker = new google.maps.Marker({
        map: map,
        position: lokasi
      });       
      map.fitBounds(bounds);
      bindInfoWindow(marker, map, infoWindow, info);
     }
    
    // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    
  </script>
  
        <div onload="initialize()">
  <div class="container" style="margin-top:10px"> 

  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading" style="width: 1099px;">Google maps marker showing all places added in admin panel</div>
          
            <div id="map-canvas" style="width: 1099px; height: 600px;"></div>
          
      </div>
    </div>  
  </div>
</div>  
</div>
<?php include 'footer.php'; ?>
<?php } ?>
<?php } ?>
