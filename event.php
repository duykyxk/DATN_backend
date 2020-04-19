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
          <li class="pull-left header"><i class="fa fa-map-marker fa-2" aria-hidden="true"></i>Event</li>

        </ul>
      </div>

      <a href="addNewEvent.php"><button class="btn btn-primary " ><i class="fa fa-plus-circle fa-6" aria-hidden="true"></i> Thêm Event</button></a>
      <hr>
     
      <br>
      <!--<h1>hello</h1>-->
      <script>
        function getresult(url) {
         $.ajax({
          url: url,
          type: "GET",
          data:  {rowcount:$("#rowcount").val(),"pagination_setting":$("#pagination-setting").val(), "group":$("#group").val(), "user":$("#user").val()},
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
          getresult("getresultevent.php");
        }
      }
    </script>


    <div id="overlay"><div><img src="loading.gif" width="64px" height="64px"/></div></div>
    <div class="page-content">

       <div>
       <div style="border-bottom: #F0F0F0 1px solid;margin-bottom: 15px;">
       Hiển thị theo group:</div>
      <select name="group" id="group" class="chosen-select" onChange="changePagination(this.value);">
        <option value=" " selected="selected"> </option>
        <?php $checkgroup= mysqli_query($conn, "select * from `group`");
        while($r= mysqli_fetch_array($checkgroup)){
          ?>
          <option value="<?php echo $r['id'];?>"><?php echo $r['name'];?></option>
        <?php } ?>
        
      </select>
       <div style="border-bottom: #F0F0F0 1px solid;margin-bottom: 15px;">
       Hiển thị theo user:</div>
      <select name="user" id="user" class="chosen-select" onChange="changePagination(this.value);">
        <option value=" " selected="selected"> </option>
       <?php $checkuser= mysqli_query($conn, "select * from `user`");
        while($r= mysqli_fetch_array($checkuser)){
          ?>
          <option value="<?php echo $r['id'];?>"><?php echo $r['email'];?></option>
        <?php } ?>
      </select>
      </div>
      
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
    getresult("getresultevent.php");
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
        <h4 class="modal-title">Thêm mới Event</h4>
      </div>
      <div class="modal-body">

        <form role="form" action="add-cat.php" method="POST" enctype="multipart/form-data">
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
      <!--    <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Date picker</h3>
            </div>
            <div class="box-body">
            
              <div class="form-group">
                <label>Date and time range:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservationtime">
                </div>
           
              </div>
            
            </div>
            
          </div> -->
          <?php include "datepicker.php";?>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Thêm Event" name="addevent" id="postme"  title='Fill all the deatails completely'>
        </form>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

      <script>
        $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
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
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
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
<script src="chosen.jquery.js" type="text/javascript"></script>
<script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
<script src="docsupport/init.js" type="text/javascript" charset="utf-8"></script>
<?php include 'scriptfooter.php'; ?>
