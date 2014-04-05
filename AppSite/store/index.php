<?php
	if( stristr( $_SERVER['HTTP_USER_AGENT'],'iphone' ) || stristr( $_SERVER['HTTP_USER_AGENT'],'ipod' ) || stristr( $_SERVER['HTTP_USER_AGENT'],'ipad' )) {
		header("HTTP/1.1 301 Moved Permanently");
		header("Location:https://itunes.apple.com/de/app/rettapp/id822306903");
		exit;
	} elseif (strstr($_SERVER['HTTP_USER_AGENT'],'Android')){
		header("HTTP/1.1 301 Moved Permanently");
		header("Location:https://play.google.com/store/apps/details?id=org.rettapp.app");
		exit;
	} else {
		header("HTTP/1.1 301 Moved Permanently");
		header("Location:http://www.rettapp.org/");
		exit;
	}
?>