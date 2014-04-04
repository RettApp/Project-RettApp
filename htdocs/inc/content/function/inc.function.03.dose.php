<div data-role="page" id="function-03-dose">
	<div data-role="header" data-position="fixed">
		<h1>Dosierer</h1>
	</div>
	<div data-role="content" role="main" class="ui-content">
		<div id="function-03-dose-form">
			<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true" id="unity">
				<legend>Einheit:</legend>
				<input type="radio" name="radio-choice-b" id="unity-g" label="g" value="1" checked="checked">
				<label for="unity-g">Gramm (g)</label>
				<input type="radio" name="radio-choice-b" id="unity-mg" value="1000" label="mg">
				<label for="unity-mg">Milligramm (mg)</label>
				<input type="radio" name="radio-choice-b" id="unity-mikro" value="1000000" label="µg">
				<label for="unity-mikro">Mikrogramm (µg)</label>
			</fieldset>
			<label for="agent-amount">Wirkstoffmenge in ausgewählter Einheit</label>
			<input type="number" name="number" min="0" pattern="[0-9]*" id="agent-amount" value="0">
			<label for="liquid-amount">auf Milliliter (ml)</label>
			<input type="number" name="number" min="0" pattern="[0-9]*" id="liquid-amount" value="0">
			<label for="unity-per-kg">Milligramm (mg) pro Kilogramm Körpergewicht (kg KG)</label>
			<input type="number" name="number" min="0" pattern="[0-9]*" id="unity-per-kg" value="0">
			<label for="patient-weight">Patientengewicht in Kilogramm (kg)</label>
			<input type="number" name="number" min="0" pattern="[0-9]*" id="patient-weight" value="0">
			<div id="results" class="result-corners">
                <p><b>Auswertung:</b></p>
                <dl>
                    <dt id="doseResultsConditionTitle">Vorraussetzung:</dt>
                    <dd id="doseResultsConditionDefinition"></dd>
                    <dt id="doseResultsCorrespondTitle">Entspricht:</dt>
                    <dd id="doseResultsCorrespondValue"></dd>
                    <dt id="doseResultsDoseTitle">Dosis:</dt>
                    <dd id="doseResultsDoseValue"></dd>
                </dl>
             </div>
		</div>
	</div>
</div>