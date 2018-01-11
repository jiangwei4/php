<?php
session_start();
		$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		$id = $_SESSION['O'.$_SESSION['a']];
				$query= "DELETE FROM prix where operation='$id'";
				$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
				echo'suppression reussite';
?>