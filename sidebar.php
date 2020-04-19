<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['name']?></p>
          
        </div>
      </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu quản lý</li>
       <li>
          <a href="dashboard.php">
            <i class="fa fa-home"></i> <span>Bảng điều khiển</span>
            
          </a>
        </li>
         
        </li>
       <li>
          <a href="category.php">
            <i class="fa fa-list-ol"></i> <span>Category</span>
            
          </a>
        </li>
        <li>
          <a href="area.php">
            <i class="fa fa-list-ol"></i> <span>Area</span>
            
          </a>
        </li>
        <li>
          <!-- <a href="places.php"> -->
            <a href="place.php">
            <!-- <i class="fa fa-globe"></i> <span>Categrory 2</span> -->
            <i class="fa fa-list-ol"></i> <span>Place</span>
          </a>
        </li>
        
         <li>
          <a href="group.php">
            <i class="fa fa-bell-o"></i> <span>Group</span>
            
          </a>
        </li>
         <li>
          <a href="event.php">
            <i class="fa fa-bell-o"></i> <span>Event</span>
            
          </a>
        </li>
     

         <li>
          <a href="alluser.php">
            <i class="fa fa-bell-o"></i> <span>User</span>
            
          </a>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="profile.php"><i class="fa fa-pencil"></i>Account</a></li>
            
            
          </ul>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>