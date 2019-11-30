<?php require("templates/header.php"); ?>

<nav>
	<ul>
		<li><a href="index.php">Startseite</a></li>
		<li><a class="active"href="verkauf.php">Verkaufserfassung</a></li>
		<li><a href="inventar.php">Inventarverwaltung</a></li>
		<li><a href="bericht.php">Berichtswesen (Reporting)</a></li>
		<li><a href="liste.php">Preislisten- und Katalogerstellung</a></li>
		<li style="float:right"><a href="login.php">Einloggen</a></li>
	</ul>
</nav>

<main>
	<fieldset>
	<legend>Verkauf erfassen</legend>
	
		<content>	
			<form class="form-horizontal" action="php/salesREST.php" method="POST">
			<input type="hidden" name="action" value="POST">
			
			<br>
			
			<div class="form-group">
			<label class="col-md-4 control-label" for="StandortNr">Standort</label>  
				<div class="col-md-4">
					<select name="StandortNr">
						<option value="1">Kempten Firmensitz (B)</option>
						<option value="2">Kempten Außenstelle (V)</option>
						<option value="3">Kaufbeuren Außenstelle (V)</option>
						<option value="4">Memmingen Außenstelle (B)</option>
						<option value="5">Isny Außenstelle (A)</option>
						<option value="6">Marktoberdorf Außenstelle (A)</option>
						<option value="7">Sonthofen Außenstelle (V)</option>
						<option value="8">Oberstdorf Außenstelle (A)</option>
						<option value="9">Oberstaufen Außenstelle (A)</option>
						<option value="10">Immenstadt Außenstelle (A)</option>
						<option value="11">Füssen Außenstelle (B)</option>
						<option value="12">Lindau Außenstelle (B)</option>
					</select> 
				</div>
			</div>
			
			<br>
			
			<div class="form-group">
			<label class="col-md-4 control-label" for="PersNr">Person</label>
				<div class="col-md-4">
					<select name="PersNr">
						<option value="1">Geschäftsführung</option>
						<option value="2">Lieferant</option>
						<option value="3">Verkäufer</option>
					</select> 
				</div>
			</div>
			
			<br>

			<div class="form-group">
			<label class="col-md-4 control-label" for="ArtikelNr">Artikel</label>
				<div class="col-md-4">
					<select name="ArtikelNr">
						<option value="1">Milch</option>
						<option value="2">Emmentaler</option>
						<option value="3">Gauda</option>
						<option value="4">Joghurt 100g</option>
						<option value="5">Quark</option>
						<option value="6">Joghurt 500g</option>
						<option value="7">Streichkäse</option>
						<option value="8">Bergkäse</option>
					</select> 
				</div>
			</div>
			
			<br>
			
			<div class="form-group">
			<label class="col-md-4 control-label" for="Anzahl">Anzahl</label>
				<div class="col-md-4">
					<input id="Anzahl" name="Anzahl" placeholder="1" class="form-control input-md" required="" type="text">
				</div>
			</div>
			
			<br>
			
			<div class="form-group">
			<label class="col-md-4 control-label" for="Anzahl">Datum</label>
				<div class="col-md-4">
					<input id="Datum" name="Datum" placeholder="2019-11-24" class="form-control input-md" required="" type="text">
				</div>
			</div>
			
			<br>

			<div class="form-group">
				<div class="col-md-4">
					<button id="open" name="open" class="btn btn-primary">Verkauf erfassen</button>
				</div>
			</div>
			
			<br>
			
			</form>
		</content>
	</fieldset>
</main>
<?php require("templates/footer.php"); ?>