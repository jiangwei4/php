<?php
session_start();
		$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		

$a = $_GET['prix'];
$c = $_SESSION['O'.$_SESSION['a']];

			if ($a>0){
			if (!empty($a)){
			$query="UPDATE prix SET prix='$a' WHERE operation='$c'";
			mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			echo'changement de prix reussi';
			} else {
			echo 'rien n a etait modifier';
			}
			} else {
			echo 'vous avez mal rempli le champ prix';
			}

		
?>