<?php
	$host ='localhost';
	$user='root';
	$bdd='clinique';
	mysql_connect($host,$user,'') or die('erreur de connexion au serveur ');
	mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
	$req="select * from medecin";
	$inc=0;
	echo '<table><caption>Liste des medecins</caption><tr><th>medecin</th><th>specialité</th></tr>';
	$res=mysql_query($req);
	if (mysql_num_rows($res)!=0){
		while ($row=mysql_fetch_row($res)){
			$inc++;
			echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td></tr>';
		}
		echo '<tr><th colspan="2">Il y a '.$inc.' médecins dans le registre de la clinique.</th></tr></table>';
	}else{
		echo 'Pas de médecins dans la base de données';
	}
?>