<div data-role="page" id="function-02-settings" data-quicklinks="true">
	<div data-role="header" data-position="fixed">
		<a href="#function-99-navigationpanel" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-bars">Menü</a>
		<h1>Einstellungen</h1>
		<div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-right">
			<a href="#function-02-settings" class="ui-btn ui-btn-icon-right ui-icon-gear ui-btn-icon-notext">Einstellungen</a>
			<a href="#main-02-index" class="ui-btn ui-btn-icon-right ui-icon-home ui-btn-icon-notext" data-transition="slidefade">Home</a>
		</div>
	</div>
	<div data-role="content" role="main" class="ui-content">
		<form>
			<div class="ui-field-contain">
				<label for="settings-startdisclaimer">Startdisclaimer:</label>
				<select name="flip-1" id="settings-startdisclaimer" data-role="slider">
					<option value="1">Off</option>
					<option value="0">On</option>
				</select>
			</div>
			<div class="ui-field-contain">
				<label for="settings-meddisclaimer">Medikamentendisclaimer:</label>
				<select name="flip-1" id="settings-meddisclaimer" data-role="slider">
					<option value="1">Off</option>
					<option value="0">On</option>
				</select>
			</div>
			<div class="ui-field-contain">
				<label for="select-native-fc">Giftnotruf</label>
				<select name="select-native-fc" id="settings-poison">
					<option value="+49-30-19240">Berlin</option>
					<option value="+49-228-19240">Bonn</option>
					<option value="+49-361-730730">Erfurt</option>
					<option value="+49-761-19240">Freiburg</option>
					<option value="+49-551-383180">Göttingen (Fachleute)</option>
					<option value="+49-6841-19240">Homburg/Saar</option>
					<option value="+49-6131-19240">Mainz</option>
					<option value="+49-89-19240">München</option>
					<option value="+49-911-3982451">Nürnberg</option>
				</select>
			</div>
			<input type="button" value="Speichern" id="saveSettings" data-icon="check">
		</form>
	</div>
</div>