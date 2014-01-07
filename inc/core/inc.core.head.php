<head>
	<?php
		if(isset($_GET['head'])){
			switch($_GET['head']){
				case 'phonegap':
					echo('<script src="phonegap.js"></script>');
					break;
			}
		}
	?>
	<title>RettApp</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="core/js/jquery/mobile/1.4.0/jquery.mobile-1.4.0.min.css">
	<link rel="stylesheet" href="core/css/custom.css">
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="core/js/jquery/core/1.10.2.min.js"></script>
	<script type="text/javascript" src="core/js/jquery/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
</head>