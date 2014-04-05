<div data-role="page" id="function-02-settings">
	<div data-role="header" data-position="fixed">
		<div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-left">
			<a href="#function-99-navigationpanel" class="ui-btn ui-btn-icon-right ui-icon-bars ui-btn-icon-notext">Menü</a>
			<a data-rel="back" class="ui-btn ui-btn-icon-right ui-icon-arrow-l ui-btn-icon-notext">Zurück</a>
		</div>
		<h1>Einstellungen</h1>
		<div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-right">
			<a href="#function-02-settings" class="ui-btn ui-btn-icon-right ui-icon-gear ui-btn-icon-notext">Einstellungen</a>
			<a href="#main-02-index" class="ui-btn ui-btn-icon-right ui-icon-home ui-btn-icon-notext" data-transition="slidefade">Home</a>
		</div>
	</div>
	<div data-role="content" role="main" class="ui-content">
		<form>
			<div class="ui-field-contain">
				<label for="settings-startdisclaimer">Rechtliches bei Start:</label>
				<select name="flip-1" id="settings-startdisclaimer" data-role="slider">
					<option value="1">Off</option>
					<option value="0">On</option>
				</select>
			</div>
			<div class="ui-field-contain">
				<label for="settings-startup">Bedienunghinweis:</label>
				<select name="flip-1" id="settings-startup" data-role="slider">
					<option value="1">Off</option>
					<option value="0">On</option>
				</select>
			</div>
			<div class="ui-field-contain">
				<label for="settings-meddisclaimer">Rechtliches bei Medikamenten:</label>
				<select name="flip-1" id="settings-meddisclaimer" data-role="slider">
					<option value="1">Off</option>
					<option value="0">On</option>
				</select>
			</div>
			<div class="ui-field-contain">
				<label for="settings-zoomrange">Kartenauflösung</label>
				<select name="select-native-fc" id="settings-zoomrange">
					<option value="0">Weit weg</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">Nah dran</option>
				</select>
			</div>
			<div class="ui-field-contain">
				<label for="settings-poison">Giftnotruf</label>
				<select name="select-native-fc" id="settings-poison">
					<option value="112">Bitte wählen</option>
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
			<div class="ui-field-contain">
				<label for="settings-rescuecoordinationcenter">Leitstelle</label>
				<select name="select-native-fc" id="settings-rescuecoordinationcenter">
					<option value="112">Bitte wählen</option>
					<optgroup label="Baden-Württemberg (BW)">
						<option value="+49-7351-19222">Biberach</option>
						<option value="+49-7541-19222">Bodensee</option>
						<option value="+49-7031-19222">Böblingen</option>
						<option value="+49-7051-19222">Calw</option>
						<option value="+49-7641-19222">Emmendingen</option>
						<option value="+49-711-19222">Esslingen</option>
						<option value="+49-761-19222">Freiburg</option>
						<option value="+49-7441-19222">Freudenstadt</option>
						<option value="+49-7161-19222">Göppingen</option>
						<option value="+49-7131-19222">Heilbronn</option>
						<option value="+49-7940-19222">Hohenlohe</option>
						<option value="+49-721-19222">Karlsruhe</option>
						<option value="+49-7732-19222">Konstanz</option>
						<option value="+49-7141-19222">Ludwigsburg</option>
						<option value="+49-7621-19222">Lörrach</option>
						<option value="+49-7931-19222">Main-Tauber</option>
						<option value="+49-7222-19222">Mittelbaden</option>
						<option value="+49-6261-19222">Mosbach</option>
						<option value="+49-781-19222">Ortenau</option>
						<option value="+49-7361-19222">Ostalb</option>
						<option value="+49-7231-19222">Pforzheim</option>
						<option value="+49-751-19222">Oberschwaben</option>
						<option value="+49-7151-19222">Rems-Murr</option>
						<option value="+49-7121-19222">Reutlingen</option>
						<option value="+49-6203-19222">Rhein-Neckar</option>
						<option value="+49-741-19222">Rottweil</option>
						<option value="+49-791-19222">Schwäbisch Hall</option>
						<option value="+49-711-19222">Stuttgart</option>
						<option value="+49-7071-19222">Tübingen</option>
						<option value="+49-7461-19222">Tuttlingen</option>
						<option value="+49-731-19222">Ulm</option>
						<option value="+49-7721-19222">Villingen</option>
						<option value="+49-7751-19222">Waldshut</option>
						<option value="+49-7433-19222">Zollernalb</option>
					</optgroup>
					<optgroup label="Bayern (BY)">
						<option value="+49-831-19222">Allgäu</option>
						<option value="+49-9621-19222">Amberg</option>
						<option value="+49-981-19222">Ansbach</option>
						<option value="+49-821-19222">Augsburg</option>
						<option value="+49-951-19222">Bamberg</option>
						<option value="+49-921-19222">Bayreuth</option>
						<option value="+49-9562-19222">Coburg</option>
						<option value="+49-8282-19222">Donau-Iller</option>
						<option value="+49-8122-19222">Erding</option>
						<option value="+49-8141-19222">Fürstenfeldbruck</option>
						<option value="+49-9281-19222">Hochfranken</option>
						<option value="+49-841-19222">Ingolstadt</option>
						<option value="+49-871-19222">Landshut</option>
						<option value="+49-9122-19222">Mittelfranken-Süd</option>
						<option value="+49-89-19222">München</option>
						<option value="+49-961-19222">Nordoberpfalz</option>
						<option value="+49-911-19222">Nürnberg</option>
						<option value="+49-881-19222">Oberland</option>
						<option value="+49-851-19222">Passau</option>
						<option value="+49-941-19222">Regensburg</option>
						<option value="+49-8031-19222">Rosenheim</option>
						<option value="+49-9721-19222">Schweinfurt</option>
						<option value="+49-9421-19222">Straubing</option>
						<option value="+49-861-19222">Traunstein</option>
						<option value="+49-6021-19222">Untermain</option>
						<option value="+49-931-19222">Würzburg</option>
					</optgroup>
					<optgroup label="Berlin (BE)">
						<option value="+49-30-19222">Berlin</option>
					</optgroup>
					<optgroup label="Brandenburg (BB)">
						<option value="+49-3381-19222">Brandenburg</option>
						<option value="+49-355-19222">Lausitz</option>
						<option value="+49-335-19222">Oderland</option>
						<option value="+49-3334-19222">NordOst</option>
						<option value="+49-331-19222">Nordwest</option>
					</optgroup>
					<optgroup label="Bremen (BRE)">
						<option value="+49-421-19222">Bremen</option>
						<option value="+49-471-19222">Bremerhaven</option>
					</optgroup>
					<optgroup label="Hamburg (HH)">
						<option value="+49-40-19222">Hamburg</option>
					</optgroup>
					<optgroup label="Hessen (HE)">
						<option value="+49-6151-19222">Darmstadt</option>
						<option value="+49-6252-19222">Bergstraße</option>
						<option value="+49-6071-19222">Darmstadt-Dieburg</option>
						<option value="+49-6152-19222">Gerau</option>
						<option value="+49-6062-19222">Odenwald</option>
						<option value="+49-69-19222">Frankfurt</option>
						<option value="+49-6172-19222">Hochtaunus</option>
						<option value="+49-6192-19222">Main-Taunus</option>
						<option value="+49-6031-19222">Wetterau</option>
						<option value="+49-661-19222">Fulda</option>
						<option value="+49-6621-19222">Hersfeld-Rotenburg</option>
						<option value="+49-6641-19222">Vogelsberg</option>
						<option value="+49-641-19222">Gießen</option>
						<option value="+49-6441-19222">Lahn-Dill</option>
						<option value="+49-6421-19222">Marburg-Biedenkopf</option>
						<option value="+49-561-19222">Kassel</option>
						<option value="+49-5681-19222">Schwalm-Eder</option>
						<option value="+49-5631-19222">Waldeck-Frankenberg</option>
						<option value="+49-5651-19222">Werra-Meißner</option>
						<option value="+49-69-19222">Offenbach</option>
						<option value="+49-6074-19222">Dietzenbach</option>
						<option value="+49-6051-19222">Main-Kinzig</option>
						<option value="+49-611-19222">Wiesbaden</option>
						<option value="+49-6431-19222">Limburg-Weilburg</option>
						<option value="+49-6124-19222">Rheingau-Taunus</option>
					</optgroup>
					<optgroup label="Mecklenburg-Vorpommern">
					</optgroup>
					<optgroup label="Niedersachsen">
					</optgroup>
					<optgroup label="Nordrhein-Westfalen">
					</optgroup>
					<optgroup label="Rheinland-Pfalz (RP)">
						<option value="+49-671-19222">Kreuznach</option>
						<option value="+49-631-19222">Kaiser</option>
						<option value="+49-261-19222">Koblenz</option>
						<option value="+49-6237-19222">Lu</option>
						<option value="+49-6131-19222">Mainz</option>
						<option value="+49-2602-19222">Montabaur</option>
						<option value="+49-6341-19222">Südpfalz</option>
						<option value="+49-651-19222">Trier</option>
					</optgroup>
					<optgroup label="Saarland (SL)">
						<option value="+49-681-19222">Winterberg</option>
					</optgroup>
					<optgroup label="Sachsen (SN)">
						<option value="+49-341-19222">Leipzig</option>
						<option value="+49-371-19222">Chemnitz</option>
						<option value="+49-375-19222">Zwickau</option>
						<option value="+49-351-19222">Dresden</option>
						<option value="+49-3571-19222">Hoyerswerda</option>
					</optgroup>
					<optgroup label="Sachsen-Anhalt">
					</optgroup>
					<optgroup label="Schleswig-Holstein">
					</optgroup>
					<optgroup label="Thüringen">
					</optgroup>
				</select>
			</div>
		</form>
		<p>
			<a href="#function-02-settings-sort" class="ui-btn ui-corner-all ui-btn-icon-left ui-icon-bullets" data-rel="dialog">Medikamente sotieren</a>
		</p>
		<a id="saveSettings" class="ui-btn ui-btn-icon-left ui-icon-check ui-corner-all show-page-loading-msg" data-textonly="false" data-textvisible="true" data-msgtext="" data-inline="true">Speichern</a>
	</div>
</div>
<div data-role="page" id="function-02-settings-sort">
	<div data-role="header">
		<h1>Sortierung</h1>
	</div>
	<div data-role="content" role="main" class="ui-content">
		<p>Auf dieser Seite können Sie die einzelnen Punkte verschieben:</p>
		<ul data-role="listview" data-inset="true" class="sortable" id="settings-medisort">
			<li name="mediSortItem1">01. Wirkstoffklasse</li>
			<li name="mediSortItem2">02. Wirkung</li>
			<li name="mediSortItem3">03. Nebenwirkung</li>
			<li name="mediSortItem4">04. Interaktion &frasl; Wechselwirkungen</li>
			<li name="mediSortItem5">05. Wirkungseintritt</li>
			<li name="mediSortItem6">06. Wirkungsdauer</li>
			<li name="mediSortItem7">07. Darreichungsformen</li>
			<li name="mediSortItem8">08. Indikation</li>
			<li name="mediSortItem9">09. Kontraindikation</li>
			<li name="mediSortItem10">10. Dosierungsempfehlung</li>
			<li name="mediSortItem11">11. bek. Handelsnamen</li>
		</ul>
	</div>
</div>