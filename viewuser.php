<?php include 'config.php'; ?>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'widget.php'; ?>


<script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
<!-- Main content -->
<?php
$id=$_GET['id'];
$id= base64_decode($id);?>

<section class="content">

  <div class="row">

    <section class="col-lg-17 connectedSortable">

      <div class="nav-tabs-custom">

        <ul class="nav nav-tabs pull-right">
          <li class="pull-left header"><i class="fa fa-map-marker fa-2" aria-hidden="true"></i>Group or Event</li>
        </ul>
      </div>

      <hr>
      <br>
      <!--<h1>hello</h1>-->   <script>
        function getresult(url) {
         $.ajax({
          url: url,
          type: "GET",
          data:  {rowcount:$("#rowcount").val(),"pagination_setting":$("#pagination-setting").val(), "type":$("#type").val()},
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
          getresult("getresultviewuser.php?id=<?php echo $id;?>");
        }
      }
    </script>


    <div id="overlay">
      <div><img src="loading.gif" width="64px" height="64px"/>
      </div>
    </div>
    <div class="page-content">

<div style="border-bottom: #F0F0F0 1px solid;margin-bottom: 15px;">
      Chọn danh sách hiển thị:</div>
      <select name="type" id="type" class="chosen-select" onChange="changePagination(this.value);">
        <option value="group" selected="selected">Danh sách group</option>
        
          <option value="event">Danh sách event</option>
        
      </select>

     <div style="border-bottom: #F0F0F0 1px solid;margin-bottom: 15px;">
       Hiển thị theo:<br> <select name="pagination-setting" onChange="changePagination(this.value);" class="pagination-setting" id="pagination-setting">
         <option value="all-links">Tất cả</option>
         <option value="prev-next">Phân trang</option>
       </select>
     </div>
 
     <div id="pagination-result">
       <input type="hidden" name="rowcount" id="rowcount" />
     </div>

     <script>
      getresult("getresultviewuser.php?id=<?php echo $id;?>");
    </script>

 </div>


</section>
</div>

</section>

<script src="chosen.jquery.js" type="text/javascript"></script>
<script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
<script src="docsupport/init.js" type="text/javascript" charset="utf-8"></script>
<?php include 'scriptfooter.php'; ?>


