var currentFeature_or_Features = null;
var watchID = null;
var map, GeoMarker, activePage, geolocpoint;
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
function initPositionMap() {
	var settings = JSON.parse(localStorage.getItem('settings'));
	var zoomrange = +settings.zoomrange;
	var mapOptions = {
		zoom: zoomrange,
		center: new google.maps.LatLng(-34.397, 150.644),
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
		},
		zoomControl: false,
	};
	map = new google.maps.Map(document.getElementById('location-01-index-map_canvas'), mapOptions);
	GeoMarker = new GeolocationMarker();
	GeoMarker.setCircleOptions({fillColor: '#808080'});
	var watchID = navigator.geolocation.watchPosition(function(pos){
		geolocpoint = new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude);
		map.setCenter(geolocpoint);
		map.setZoom(zoomrange);
	}, function(msg){
		console.log(typeof msg == 'string' ? msg : "error");
	}, {maximumAge: 4000, enableHighAccuracy: true});
	google.maps.event.addListenerOnce(GeoMarker, 'position_changed', function() {
		map.setCenter(this.getPosition());
		map.fitBounds(this.getBounds());
		map.setZoom(zoomrange);
	});
	GeoMarker.setMap(map);
	showGeoJSON(geojson_leitstellen);
}
function panelAndListRefresh() {
	$('body > [data-role="panel"]').panel();
	$('body > [data-role="panel"] [data-role="listview"]').listview().listview('refresh');
	$('body > [data-role="page"] [data-role="listview"]').listview().listview('refresh');
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
function showGeoJSON(geojson, style){
	currentFeature_or_Features = new GeoJSON(geojson, style || null);
	if (currentFeature_or_Features.type && currentFeature_or_Features.type == "Error"){
		document.getElementById("putsomthing").value = currentFeature_or_Features.message;
		return;
	}
	if (currentFeature_or_Features.length){
		for (var i = 0; i < currentFeature_or_Features.length; i++){
			if(currentFeature_or_Features[i].length){
				for(var j = 0; j < currentFeature_or_Features[i].length; j++){
					currentFeature_or_Features[i][j].setMap(map);
					if(currentFeature_or_Features[i][j].geojsonProperties) {
						setInfoWindow(currentFeature_or_Features[i][j]);
					}
				}
			}else{
				currentFeature_or_Features[i].setMap(map);
			}
			if (currentFeature_or_Features[i].geojsonProperties) {
				setInfoWindow(currentFeature_or_Features[i]);
			}
		}
	}else{
		currentFeature_or_Features.setMap(map)
		if (currentFeature_or_Features.geojsonProperties) {
			setInfoWindow(currentFeature_or_Features);
		}
	}
}
function setInfoWindow (feature) {
	google.maps.event.addListener(feature, "click", function(event) {
		var content = "<b>Aktuelle Leitstelle:</b>";
		for (var key in this.geojsonProperties) {
			if(key != "Telefon"){
				content += "<br />"+key+": "+this.geojsonProperties[key];
			}
		}
		content += '<p><a href="tel:'+this.geojsonProperties["Telefon"]+'" class="ui-btn ui-icon-phone ui-btn-icon-left ui-corner-all">Diese Anrufen</a></p>';
		$('#location-01-map_canvas_info').html(content);
	});
}
$(document).on("pagebeforeshow", function(event) {
	panelAndListRefresh();
});
$(document).on("pageshow", "#location-01-index", function() {
	var settings = JSON.parse(localStorage.getItem('settings'));
	if(settings.position == '0'){
		initPositionMap();
	}else{
		$('#location-01-index-map_canvas').html('<p>Die Funktion ist deaktiviert.</p>');
	}
});
$(document).on("pagebeforeshow", "#function-02-settings", function(event) {
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
$(document).on("pagebeforeshow", "#main-01-disclaimer", function(event) {
	var settings = JSON.parse(localStorage.getItem('settings'));
	if(settings.startdisclaimer == "1") {
		$.mobile.changePage("#main-02-index");
	};
});
$(document).on("pagebeforeshow", "#drugs-01-disclaimer", function(event) {
	var settings = JSON.parse(localStorage.getItem('settings'));
	if(settings.meddisclaimer == "1") {
		$.mobile.changePage("#drugs-02-index");
	}
});
$(document).on("pagebeforeshow", function(event) {
	activePage = $.mobile.activePage.attr("id");
	$('a.ui-btn-active').removeClass("ui-btn-active");
	$('[href="#'+activePage+'"]').addClass("ui-btn-active");
});
$(document).on("pageshow", function(event) {
	var settings = JSON.parse(localStorage.getItem('settings'));
	$('.getPoisonNumber').attr("href", "tel:"+settings.poison);
	$('.getRescueCoordinationCenterNumber').attr("href", "tel:"+settings.rescuecoordinationcenter);
});
$(document).on("pageshow", function(event) {
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
.on("click", ".hide-page-loading-msg", function() {
    $.mobile.loading("hide");
});