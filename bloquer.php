<?php
	echo '<form name="choixBloque" method="post" action="medecins.php">';
	echo '<p>Veuillez rentrer la date et l\'heure à laquelle vous ne serez pas disponibles: </p><br/>';
	echo '<label for="date">Date </label><input type="text" name="date" placeholder="AAAA-MM-JJ"><br/><br/>';
	echo '<label for="heure">Heure </label><input type="text" name="heure" placeholder="ex: 14"><br/><br/>';
	echo '<input type="submit" name="boutonBloque"/></form>';// formulaire pour définir l'horaire à bloquer
	if(isset($_POST['boutonBloque'])){
		require("bloquerHoraire.php");
	}
?>