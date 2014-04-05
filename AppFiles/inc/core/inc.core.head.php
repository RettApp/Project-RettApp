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
	<link rel="stylesheet" href="core/js/jquery/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
	<link rel="stylesheet" href="core/css/custom.css">
	<script src="core/js/jquery/core/1.11.0.min.js"></script>
	<script src="core/js/jquery/ui/1.10.4/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="core/js/jquery/ui/jquery.ui.touch-punch.min.js"></script>
	<script src="core/js/leitstellen.min.js"></script>
	<?php
		if(isset($_GET['head'])){
			switch($_GET['head']){
				case 'cordova':
					echo('<script src="core/js/app.min.js"></script>');
					break;	
			}
		}
	?>
	<script src="core/js/jquery/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
	<script src="core/js/jquery/slidejs/3.0.4/jquery.slides.min.js"></script>
	<script>
		function MapApiLoaded() {
			$.ajax({
				url: "core/js/plugins/geolocationmarker-compiled.js",
				dataType: "script",
				timeout: 3000,
				error: function(){
					alert('Fehler beim Laden von Google Maps - Standort ggf. deaktiviert.');
				}
			});
		}
		$.ajax({
			url: "http://maps.googleapis.com/maps/api/js?sensor=true&callback=MapApiLoaded",
			dataType: "script",
			timeout: 3000,
			error: function(){
				alert('Fehler beim Laden von Google Maps - Standort ggf. deaktiviert.');
			}
		});
	</script>
	<script src="core/js/plugins/GeoJSON.js"></script>
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