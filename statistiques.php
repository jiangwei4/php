<?php ?>
	<form name="stats" method="post" action="directeur.php">
	<input type="text" placeholder="AAAA-MM-JJ" name="date1"/><input type="text" placeholder="AAAA-MM-JJ" name="date2"/>
	<input type="submit" name="nombreRDV" value="Nombre de rendez-vous"/><br/><br/>
	<?php
		if(isset($_POST['nombreRDV'])){
			require("nombreRDV.php");
		}
	?>
	<input type="text" placeholder="X" name="X" onBlur="nombre(this)"/>
	<input type="submit" name="nombrePatientsSolde" value="Nombre de patients ayant un solde inférieur à X"/><br/>
	<?php
		if(isset($_POST['nombrePatientsSolde'])){
			require("nombrePatientsSolde.php");
		}
	?>
	<input type="submit" name="nombrePatients" value="Nombre de patients"/><br/><br/>
	<?php
		if(isset($_POST['nombrePatients'])){
			require("nombrePatients.php");
		}
	?>
	<input type="text" placeholder="AAAA-MM-JJ" name="datePrecise"/>
	<input type="submit" name="soldeTotal" value="Solde total de tous les patients à une date précise"/><br/><br/>
	<?php
		if(isset($_POST['soldeTotal'])){
			require("soldeTotal.php");
		}
	?>
	<input type="submit" name="annuaire" value="Annuaire des médecins et leur spécialité"/><br/><br/>
	<?php
		if(isset($_POST['annuaire'])){
			require("annuaire.php");
		}
	?>
	</form>
<?php ?>