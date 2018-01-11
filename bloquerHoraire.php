<?php
	$host ='localhost';
	$user='root';
	$bdd='clinique';
	mysql_connect($host,$user,'') or die('erreur de connexion au serveur ');
	mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
	$medecin=$_SESSION['id'];
	var_dump($medecin);
	$date= $_POST['date'];
	$heure= $_POST['heure'].":00:00.000000";
	
	$req="insert into rdv values ('$date', '$medecin', 'bloque', '', '', '','', '$heure', 'oui', '')";
	$res=mysql_query($req) or die('Erreur lors de l\'envoi<br />'.mysql_error());
?>