<?php //1701140_변수정 ?>
<!DOCTYPE html>
<html>
<head>
    <?php require("html_head.php") ?>
</head>
<body>
    <?php require("top_nav.php") ?>
    <?php require("nav.php") ?>
    <?php require("companySidebar.php") ?>
    <div class="container">		
        <h2>찾아오는길</h2>
        <div id="map" style="width:500px;height:400px;"></div>
        <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=d90701f4c0834c29b406b9f9cdb9b4dd"></script>
        <script>
            var container = document.getElementById('map');
            var options = {
                center: new daum.maps.LatLng(35.8963091,128.6198624),
                level: 3
            };

            var map = new daum.maps.Map(container, options);
	    </script>
    </div>
</body>
</html>
