<?php
session_start();
		$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		

$a = $_GET['N'];
$b = $_GET['P'];
$c = $_SESSION['N'.$_SESSION['a']];
$d = $_SESSION['P'.$_SESSION['a']];

			if (!empty($a)&& !empty($b)){
			$query="UPDATE employes SET mdp='$b' WHERE id='$c'";
			mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			$query2="UPDATE employes SET id='$a' WHERE mdp='$b'";
			mysql_query($query2) or die('Erreur lors de l\'envoi<br />'.mysql_error());
		echo'changement reussi';
			} else {
			if(!empty($a)){
			$query2="UPDATE employes SET id='$a' WHERE mdp='$d'";
			mysql_query($query2) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			echo 'id changer';
			}else{
			if(!empty($b)){
			$query="UPDATE employes SET mdp='$b' WHERE id='$c'";
			mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());	
			echo 'mot de passe changer';
			} else {
			echo'rien n as etait modifier';
			}
			}
			
			}
		
?>