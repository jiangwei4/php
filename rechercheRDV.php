<?php
	
	//var_dump(mysql_fetch_row($resMed));
	echo '<form name="choixRDV" method="post" action="medecins.php">';
	echo '<p>Veuillez rentrer la date du rendez-vous et le NSS du patient: </p><br/>';
	echo '<label for="date">Date </label><input type="text" name="date" placeholder="AAAA-MM-JJ"><br/><br/>';
	echo '<label for="NSS">NSS </label><input type="text" name="NSS"><br/><br/>';
	echo '<input type="submit" name="boutonRDV"/></form>';// formulaire pour rechercher un rendez-vous
	if(isset($_POST['boutonRDV'])){
		require("compterendu.php");
	}
?>