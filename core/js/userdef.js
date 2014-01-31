/* !Copyright */
/*
	Project: RettApp
	Description: RettApp is an Open-Source-Project for persons working at a emergency medical service in Germany
	Author: Jonathan Starck 
	Licence: GNU GENERAL PUBLIC LICENSE Version 2, June 1991 & European Union Public Licence
	Source: https://github.com/RettApp/
*/
/* !Localstorage Check */
/*
	Checken des LocalStorage-Speicher. Wenn nicht vorhanden wird der Wert 0 gesetzt.
	Bitte Definition beachten z.B.: Disclaimer = 0 = Disclaimer aktiv!
*/
if (localStorage.getItem("settings") === null) {
	var settings = {};
	settings.startdisclaimer = '0';
	settings.meddisclaimer = '0';
	localStorage.setItem("settings", JSON.stringify(settings));
};
if (localStorage.getItem("visiblemeddisclaimer") === null) {
	localStorage.setItem("visiblemeddisclaimer", '0');
}
/* !Globale Variablen */
/*
	Setzten der globalen Variablen.
*/
var activePage;
/* ! Globale Functionen*/
/*
	Hier werden die globalgültigen Functionen definiert!
*/
function panelAndListRefresh() {
	$('body > [data-role="panel"]').panel();
	$('body > [data-role="panel"] [data-role="listview"]').listview().listview('refresh');
}
function refreshSlider(refreshSliderID) {
	$(refreshSliderID).slider().slider("refresh");
}
function changeSliderOnSettings(sliderID, sliderIDvalue) {
	$(sliderID+' [value="'+sliderIDvalue+'"]').prop("selected", true);
	$(sliderID).slider().slider("refresh");
}
/* !jQuery Mobile Page Init Function */

/* !jQuery Mobile Page Create Function */

/* !jQuery Mobile Page before Show Function */
/* !Settings auslesen */
/*
	Die Settings werden aus localStorage ausgelesen um sie im folgendem Anzuzeigen.
	Initial sind die entsprechenden Variablen auf "0" gesetzt. Diese Funktionen sind negativiert!
	Als erstes wird gecheckt ob die entsprechende verändert wurde.
	Sollte dies der Fall wird der zugehörige Slider deaktiviert/verändert.
*/
$(document).on( "pagebeforeshow", '#function-02-settings', function(event) {
	var settings = JSON.parse(localStorage.getItem('settings'));
	if(settings.startdisclaimer == "1") {
		changeSliderOnSettings('#settings-startdisclaimer', 1);
	} else {
		changeSliderOnSettings('#settings-startdisclaimer', 0);
	}
	if(localStorage.getItem("visiblemeddisclaimer") == '0'){
		$("#settings-meddisclaimer").slider("disable");
		$("#settings-meddisclaimer").slider("refresh");
	}else{
		$("#settings-meddisclaimer").slider("enable");
		$("#settings-meddisclaimer").slider("refresh");
	}
	if(settings.meddisclaimer == "1") {
		changeSliderOnSettings('#settings-meddisclaimer', 1);
	} else {
		changeSliderOnSettings('#settings-meddisclaimer', 0);
	}
});
/* !Panel Menü */
/*
	Das PanelMenü ist seperat zu data-role="page" im QuellCode.
	Aktivierung um trotzdem es als Panel anzuzeigen.
*/
$(document).on("pagebeforeshow", function(event) {
	panelAndListRefresh();
});
$(document).on('pagebeforeshow', '#main-01-disclaimer', function(event) {
	var settings = JSON.parse(localStorage.getItem('settings'));
	if(settings.startdisclaimer == "1") {
		$.mobile.changePage("#main-02-index");
	};
});
$(document).on('pagebeforeshow', '#drugs-01-disclaimer', function(event) {
	var settings = JSON.parse(localStorage.getItem('settings'));
	if(settings.meddisclaimer == "1") {
		$.mobile.changePage("#drugs-02-index");
	};
});
/* !jQuery Mobile Page Show Function */
/* !Activate state */
/*
	Der Aktiv-Status für den Link setzten. Es wird die aktuelle ID
	ermittelt und allen Links mit verweiß auf dieses ID der aktive State
	vergeben.
*/
$(document).on("pagebeforeshow", function(event) {
	activePage = $.mobile.activePage.attr("id");
	$('a.ui-btn-active').removeClass("ui-btn-active");
	$('[href="#'+activePage+'"]').addClass("ui-btn-active");
});
/* !Settings speichern */
/*
	Die Settings werden bei klick auf den Button #saveSettings in loaclStore als JSON String gespeichert.
	Der JSON String ermöglichst die optimierung vom localStorge
*/
$(document).on( "pageshow", function(event) {
	$("#saveSettings").click(function(){
		var settings = {};
		settings.startdisclaimer = $('#settings-startdisclaimer').val();
		settings.meddisclaimer = $('#settings-meddisclaimer').val();
		localStorage.setItem("settings", JSON.stringify(settings));
		location.reload(true);
	});
	$("#setVisibleMedSetting").click(function(){
		if(localStorage.getItem("visiblemeddisclaimer") == '0'){
			localStorage.setItem("visiblemeddisclaimer", '1');
		}
	});
});