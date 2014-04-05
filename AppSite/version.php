<?php
    $daten = json_encode(
    	Array(
    		"name" => "RettApp",
    		"version" => "003",
    		"lastCheck" => "05.04.2014"
    	));
	echo $_GET['callback'] ."(". $daten .");";
?>