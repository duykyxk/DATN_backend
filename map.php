
  <link rel="stylesheet" type="text/css" href="styles.css" />
  <style type="text/css" media="screen">
    .map_canvas { float: left; }
    fieldset { width: 320px; margin-top: 20px}
    fieldset label { display: block; margin: 0.5em 0 0em; }
    fieldset input { width: 95%; }
  </style>


  <div class="map_canvas"></div>

  <form>
    <input id="geocomplete" type="text" placeholder="Nhập địa chỉ cần tìm" value="" />
    <input id="find" type="button" value="Tìm kiếm" />

    <fieldset>
      <h3>Thông tin chi tiết</h3>

      <label>Tên</label>
      <input name="name" type="text" value="">

      <label>Vị trí</label>
      <input name="location" type="text" value="">

      <label>Địa chỉ</label>
      <input name="formatted_address" type="text" value="">

    </fieldset>
  </form>

  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCCsYpflE4JGPJLMMjeE4o796M7ClT9YB8&sensor=false&amp;libraries=places"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

  <script src="jquery.geocomplete.min.js"></script>

  <script>
    $(function(){
      var center = new google.maps.LatLng(11.987186, 106.735817);

      $("#geocomplete").geocomplete({
        map: ".map_canvas",
        details: "form",
        types: ["geocode", "establishment"],
      });

      $("#find").click(function(){
        $("#geocomplete").trigger("geocode");
      });

      var map =  $("#geocomplete").geocomplete("map")

      map.setCenter(center);
      map.setZoom(16); 
    });
  </script>



