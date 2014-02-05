<!DOCTYPE html>
<html>
<!-- !Copyright -->
<!--
	Project: RettApp
	Description: RettApp is an Open-Source-Project for persons working at a emergency medical service in Germany
	Author: Jonathan Starck 
	Licence: GNU GENERAL PUBLIC LICENSE Version 2, June 1991 & European Union Public Licence
	Source: https://github.com/RettApp/
-->
<?php
	// This Part generate the index.html to use http://build.phonegap.com
	// Include html > head
	include('inc/core/inc.core.variablen.php');
	include('inc/core/inc.core.head.php');
	// Open html > body
	print('<body>');
	
	// Add some Code here to generate the file
	
	// Search for main content files an include
	foreach (glob("inc/content/main/inc.main.*.php") as $filename){
		include $filename;
	}
	
	foreach (glob("inc/content/drugs/inc.drugs.*.php") as $filename){
		include $filename;
	}
	foreach (glob("inc/content/hospitals/inc.hospitals.*.php") as $filename){
		include $filename;
	}
	foreach (glob("inc/content/rescuecoordinationcenter/inc.rescuecoordinationcenter.*.php") as $filename){
		include $filename;
	}
	foreach (glob("inc/content/rescuecoordinationcenter/rp/inc.rescuecoordinationcenter.rp.*.php") as $filename){
		include $filename;
	}
	foreach (glob("inc/content/rescuecoordinationcenter/sl/inc.rescuecoordinationcenter.sl.*.php") as $filename){
		include $filename;
	}
	foreach (glob("inc/content/location/inc.location.*.php") as $filename){
		include $filename;
	}
	foreach (glob("inc/content/law/inc.law.*.php") as $filename){
		include $filename;
	}
	foreach (glob("inc/content/spellingalphabet/inc.spellingalphabet.*.php") as $filename){
		include $filename;
	}
	foreach (glob("inc/content/other/inc.other.*.php") as $filename){
		include $filename;
	}
	foreach (glob("inc/content/function/inc.function.*.php") as $filename){
		include $filename;
	}
	
	// Close html > body
	print('</body>');
?>
</html>