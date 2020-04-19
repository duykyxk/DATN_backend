
<?php include "header.php"?>
<?php include 'sidebar.php'; ?>
<?php include 'widget.php'; ?>

<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-17 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->
      <div class="nav-tabs-custom">
        <!-- Tabs within a box -->
        <ul class="nav nav-tabs pull-right">
          <li class="pull-left header"><i class="fa fa-inbox"></i>Event</li>
          
        </ul>
      </div>
      
      <!-- <button class="btn btn-primary " class="pull-left" data-toggle="modal" data-target="#myModal">Thêm Category</button> -->
      <hr>
      <br>
      <!--<h1>hello</h1>-->



      
      
      
      
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Add new event</h3>

          
        </div>
        <form role="form" action="add-event.php" method="POST" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên event</label> 
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter event Name" name="eventname" required="required">
            </div> 
          </div>
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Mô tả</label> 
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name" name="eventdes" required="required">
            </div> 
          </div>
          <div class="form-group text-muted well well-sm no-shadow">
           <p class="help-block">Chọn 1 group</p>                     
           <lable><b>Group</b></lable><br>
           <select  name="groupId" id="" class="pagination-setting"> 
             <?php $sql1="SELECT * FROM `group` ";
         // var_dump($sql);
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
        <div class="form-group text-muted well well-sm no-shadow">
         <p class="help-block">Chọn 1 địa điểm</p>                     
         <lable><b>Địa điểm</b></lable><br>
         <select  name="placeId" id="" class="pagination-setting"> 
           <?php $sql1="SELECT * FROM `place` ";
         // var_dump($sql);
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
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Date picker</h3>
        </div>
        <div class="box-body">

          <div class="form-group">
            <label>Date and time :</label>

            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
              </div>
              <input  type="text"  name= "time" class="form-control pull-right" id="reservationtime">
            </div>

          </div>

        </div>

      </div>

      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Thêm Event" name="addevent" id="postme"  title='Fill all the deatails completely'>
      </form>

      <script>
        $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'yyyy-mm-dd hh:mm A' }})
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('YYYY, MMMM D') + ' - ' + end.format('YYYY,MMMM D'))
    }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

