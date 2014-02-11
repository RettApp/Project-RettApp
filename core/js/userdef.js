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
	settings.position = '0';
	settings.zoomrange = '10';
	settings.poison = '112';
	settings.rescuecoordinationcenter= '112';
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
var map, GeoMarker, currentPosition;
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
function refreshSelectMenu(refreshSelectMenuID) {
	$(refreshSelectMenuID).selectmenu().selectmenu("refresh");
}
function changeSliderOnSettings(sliderID, sliderIDvalue) {
	$(sliderID+' [value="'+sliderIDvalue+'"]').prop("selected", true);
	$(sliderID).slider().slider("refresh");
}
function changeSelectMenuOnSettings(selectID, selectIDvalue) {
	$(selectID+' [value="'+selectIDvalue+'"]').prop("selected", true);
	$(selectID).selectmenu().selectmenu("refresh");
}
function changeSliderVisibleOnSettings(sliderID, sliderVisibleStatus) {
	$(sliderID).slider(sliderVisibleStatus);
	$(sliderID).slider("refresh");	
}
function changeSelectMenuVisibleOnSettings(selectID, selectVisibleStatus) {
	$(selectID).selectmenu(selectVisibleStatus);
	$(selectID).selectmenu("refresh");
}
function openDeviceBrowser (externalLinkToOpen){
		window.open(externalLinkToOpen, '_system', 'location=no');
}
function initializePositionMap(){
	
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
	if(localStorage.getItem("visiblemeddisclaimer") == '0'){
		changeSliderVisibleOnSettings("#settings-meddisclaimer", "disable");
	}else{
		changeSliderVisibleOnSettings("#settings-meddisclaimer", "enable");
	}
	if(settings.position == '1'){
		changeSelectMenuVisibleOnSettings("#settings-zoomrange", "disable");
	}else{
		changeSelectMenuVisibleOnSettings("#settings-zoomrange", "enable");
	}
	changeSliderOnSettings('#settings-startdisclaimer', settings.startdisclaimer);
	changeSliderOnSettings('#settings-meddisclaimer', settings.meddisclaimer);
	changeSliderOnSettings('#settings-position', settings.position);
	changeSelectMenuOnSettings('#settings-zoomrange', settings.zoomrange);
	changeSelectMenuOnSettings('#settings-poison', settings.poison);
	changeSelectMenuOnSettings('#settings-rescuecoordinationcenter', settings.rescuecoordinationcenter);
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
	}
});
$(document).on("pageshow", '#location-01-index', function() {
	initializePositionMap ();
});
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
/* !jQuery Mobile Page Show Function */
$(document).on("pageshow", function(event) {
	var settings = JSON.parse(localStorage.getItem('settings'));
	$('.getPoisonNumber').attr("href", "tel:"+settings.poison);
	$('.getRescueCoordinationCenterNumber').attr("href", "tel:"+settings.rescuecoordinationcenter);
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
		settings.position = $('#settings-position').val();
		settings.zoomrange = $('#settings-zoomrange').val();
		settings.poison = $('#settings-poison').val();
		settings.rescuecoordinationcenter = $('#settings-rescuecoordinationcenter').val();
		localStorage.setItem("settings", JSON.stringify(settings));
		location.reload(true);
	});
	$("#setVisibleMedSetting").click(function(){
		if(localStorage.getItem("visiblemeddisclaimer") == '0'){
			localStorage.setItem("visiblemeddisclaimer", '1');
		}
	});
});


$(document).on("click", ".show-page-loading-msg", function() {
	var $this = $( this ),
		theme = $this.jqmData( "theme" ) || $.mobile.loader.prototype.options.theme,
		msgText = $this.jqmData( "msgtext" ) || $.mobile.loader.prototype.options.text,
		textVisible = $this.jqmData( "textvisible" ) || $.mobile.loader.prototype.options.textVisible,
		textonly = !!$this.jqmData( "textonly" );
		html = $this.jqmData( "html" ) || "";
	$.mobile.loading( "show", {
		text: msgText,
		textVisible: textVisible,
		theme: theme,
		textonly: textonly,
		html: html
    });
})
$(document).on( "click", ".hide-page-loading-msg", function() {
    $.mobile.loading( "hide" );
});