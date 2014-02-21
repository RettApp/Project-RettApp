<div data-role="page" id="function-03-dose" data-quicklinks="true">
	<div data-role="header" data-position="fixed">
		<div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-left">
			<a href="#function-99-navigationpanel" class="ui-btn ui-btn-icon-right ui-icon-bars ui-btn-icon-notext">Menü</a>
			<a data-rel="back" class="ui-btn ui-btn-icon-right ui-icon-arrow-l ui-btn-icon-notext">Zurück</a>
		</div>
		<h1>Dosierungsrechner</h1>
		<div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-right">
			<a href="#function-02-settings" class="ui-btn ui-btn-icon-right ui-icon-gear ui-btn-icon-notext" data-transition="slidefade" data-direction="reverse">Einstellungen</a>
			<a href="#main-02-index" class="ui-btn ui-btn-icon-right ui-icon-home ui-btn-icon-notext">Home</a>
		</div>
	</div>
	<div data-role="content" role="main" class="ui-content">
		<form id="function-03-dose">
			<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
				<legend>Einheit:</legend>
				<input type="radio" name="radio-choice-b" id="unity-g" value="" checked="checked">
				<label for="unity-g">Gramm (g)</label>
				<input type="radio" name="radio-choice-b" id="unity-mg" value="">
				<label for="unity-mg">Milligramm (mg)</label>
				<input type="radio" name="radio-choice-b" id="unity-mikro" value="">
				<label for="unity-mikro">Mikrogramm (µg)</label>
			</fieldset>
			<label for="agent-amount">Wirkstoffmenge in ausgewählter Einheit</label>
			<input type="number" name="number" pattern="[0-9]*" id="agent-amount" value="">
			<label for="liquid-amount">auf Milliliter (ml)</label>
			<input type="number" name="number" pattern="[0-9]*" id="liquid-amount" value="">
			<label for="unity-per-kg">Milligramm (mg) pro Kilogramm (kg)</label>
			<input type="number" name="number" pattern="[0-9]*" id="unity-per-kg" value="">
			<label for="patient-weight">Patientengewicht in Kilogramm (kg)</label>
			<input type="number" name="number" pattern="[0-9]*" id="patient-weight" value="">
			<div id="results" class="result-corners">
				<p>Auswertung:</p>
			</div>
		</form>
	</div>
</div>