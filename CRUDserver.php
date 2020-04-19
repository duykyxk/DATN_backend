<?php include 'header.php'; ?>
  <?php include 'sidebar.php'; ?>
   <script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>

  
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $userCount; ?></h3>

              <p>Total Category</p>
            </div>
            <div class="icon">
              <i class="fa fa-list-ol fa-6"></i>
            </div>
            <a href="category.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $userCountfb; ?><sup style="font-size: 20px"></sup></h3>

              <p>Total Places</p>
            </div>
            <div class="icon">
              <i class="fa fa-globe fa-6"></i>
            </div>
            <a href="places.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Push</h3>

              <p>Notification</p>
            </div>
            <div class="icon">
              <i class="fa fa-bell-o fa-6"></i>
            </div>
            <a href="notification.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Admin</h3>

              <p>Settings</p>
            </div>
            <div class="icon">
              <i class="fa fa-cogs fa-6"></i>
            </div>
 <a href="profile.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          
          </div>         
          </div><?php

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
    <!-- ./col -->
      </div></div>
      <!-- /.row --> 
      


 <?php } ?>

 
 



      <?php include 'scriptfooter.php';?>
      
      
      
      
      
      
      
      
      