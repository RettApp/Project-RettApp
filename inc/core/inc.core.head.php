<head>
	<title>RettApp</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="core/js/jquery/mobile/1.4.0/jquery.mobile-1.4.0.min.css">
	<link rel="stylesheet" href="core/css/custom.css">
	<?php
		if(isset($_GET['head'])){
			switch($_GET['head']){
				case 'cordova':
					echo('<script src="cordova.js"></script>');
					break;
			}
		}
	?>
	<script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
	<script src="core/js/jquery/core/1.10.2.min.js"></script>
	<script src="core/js/app.js"></script>
	<script src="core/js/jquery/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
	<script src="core/js/plugins/google-maps-utility-library-v3/geolocationmarker/src/geolocationmarker-compiled.js"></script>
	<script src="core/js/userdef.js"></script>
	<script src="core/js/leitstellen.js"></script>
</head>