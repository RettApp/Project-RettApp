<head>
	<?php
		if(isset($_GET['head'])){
			switch($_GET['head']){
				case 'cordova':
					echo('<script src="cordova.js"></script>');
					break;
			}
		}
	?>
	<title>RettApp</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="core/js/jquery/mobile/1.4.1/jquery.mobile-1.4.1.min.css">
	<link rel="stylesheet" href="core/css/custom.css">
	<script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
	<script src="core/js/jquery/core/1.11.0.min.js"></script>
	<script src="core/js/leitstellen.min.js"></script>
	<!--<script src="core/js/hospitals.min.js"></script>-->
	<?php
		if(isset($_GET['head'])){
			switch($_GET['head']){
				case 'cordova':
					echo('<script src="core/js/app.min.js"></script>');
					break;	
			}
		}
	?>
	<script src="core/js/jquery/mobile/1.4.1/jquery.mobile-1.4.1.min.js"></script>
	<script src="core/js/plugins/GeoJSON.js"></script>
	<script src="core/js/plugins/google-maps-utility-library-v3-read-only/geolocationmarker/src/geolocationmarker-compiled.js"></script>
	<?php
		switch($_GET['head']){
			case 'cordova':
				echo('<script src="core/js/userdef.min.js"></script>');
				break;
			default:
				echo('<script src="core/js/userdef.js"></script>');
				break;
		}
	?>
</head>