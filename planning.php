<?php 
	$host ='localhost';
	$user='root';
	$bdd='clinique';
	mysql_connect($host,$user,'') or die('erreur de connexion au serveur ');
	mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
	$reqMed="select * from employes where categorie='medecins'";//sélectionne la liste des médecins
	$resMed=mysql_query($reqMed);
	//var_dump(mysql_fetch_row($resMed));
	echo '<form name="choixMedecin" method="post" action="medecins.php"><label for="choixMed">Médecin dont vous voulez consulter les rdv:</label><select name="choixMed"><br/><br/>';
	while ($row=mysql_fetch_row($resMed)){
		echo '<option value="'.$row[1].'">'.$row[1].'</option>';
	}
	echo '</select><br/><br/> <label for="daterdv">Entrez le jour dont vous voulez consulter les rdv:</label><input type="text" name="daterdv" id="daterdv" value="" placeholder="AAAA-MM-JJ"/> <br/><br/><input type="submit" name="rdvmedecin" value="date spécifiée"/> <br/><br/> </form>';
	
	
	if(isset($_POST['rdvmedecin'])){
		require("afficherPlanningJour.php");
	}
	
	
?>
