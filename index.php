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
	// This Part generate the index.html
	// Include html > head
	include('system/inc/inc.head.php');
	// Open html > body
	print('<body>');
	foreach (glob("system/extra/inc.head.*.php") as $filename){
		include $filename;
	}
	foreach (glob("system/content/index/inc.*.php") as $filename){
		include $filename;
	}
	foreach (glob("system/content/fms/inc.*.php") as $filename){
		include $filename;
	}
	foreach (glob("system/content/law/inc.*.php") as $filename){
		include $filename;
	}
	foreach (glob("system/content/position/inc.*.php") as $filename){
		include $filename;
	}
	foreach (glob("system/content/rescuecoordinationcenter/inc.*.php") as $filename){
		include $filename;
	}
	foreach (glob("system/content/rescuecoordinationcenter/rp/inc.*.php") as $filename){
		include $filename;
	}
	foreach (glob("system/content/settings/inc.*.php") as $filename){
		include $filename;
	}
	foreach (glob("system/content/spellingalphabet/inc.*.php") as $filename){
		include $filename;
	}
	foreach (glob("system/content/usage/inc.*.php") as $filename){
		include $filename;
	}
	foreach (glob("system/extra/inc.foot.*.php") as $filename){
		include $filename;
	}
	print('</body>');
?>
</html>