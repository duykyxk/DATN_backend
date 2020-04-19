<?php include 'sidebar.php'; ?>
<?php include 'header.php';?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Điều khiển
      <small>Bảng điều khiển</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
      <li class="active">Bảng điều khiển</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?php echo $catCount; ?></h3>

            <p>Tổng Category</p>
          </div>
          <div class="icon">
            <i class="fa fa-list-ol fa-6"></i>
          </div>
          <a href="category.php" class="small-box-footer">Xem danh sách <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?php echo $areaCount; ?><sup style="font-size: 20px"></sup></h3>

            <p>Tổng Area</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag "></i>
          </div>
          <a href="area.php" class="small-box-footer">Xem danh sách <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?php echo $placeCount; ?><sup style="font-size: 20px"></sup></h3>

            <p>Place</p>
          </div>
          <div class="icon">
            <i class="fa fa-bell-o fa-6"></i>
          </div>
          <a href="place.php" class="small-box-footer">Xem danh sách<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
     
  </div>

  <div class="row">
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo $groupCount;?></h3>

          <p>Tổng Group</p>
        </div>
        <div class="icon">
          <i class="fa fa-globe fa-6"></i>
        </div>
        <a href="group.php" class="small-box-footer">Xem danh sách <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo $eventCount; ?><sup style="font-size: 20px"></sup></h3>

          <p>Tổng Event</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="event.php" class="small-box-footer">Xem danh sách <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
   
    <!-- ./col -->
    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?php echo $userCount; ?><sup style="font-size: 20px"></sup></h3>

          <p>Tài khoản</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="alluser.php" class="small-box-footer">Xem danh sách <i class="fa fa-arrow-circle-right"></i></a>

      </div>         
    </div>
  </div>
  <?php include 'scriptfooter.php';?>




  <?php  ?>   



