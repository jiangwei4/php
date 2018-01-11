<?php
session_start();
		$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		$id = $_SESSION['N'.$_SESSION['a']];
		$mdp = $_SESSION['P'.$_SESSION['a']];
				$query= "DELETE FROM employes where id='$id' and mdp='$mdp'";
				$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
				$query2= "DELETE FROM medecin where nom='$id'";
				$result2 = mysql_query($query2) or die('Erreur lors de l\'envoi<br />'.mysql_error());
				echo'suppression reussite';
?>