<?php
	$host ='localhost';
	$user='root';
	$bdd='clinique';
	mysql_connect($host,$user,'') or die('erreur de connexion au serveur ');
	mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
	$solde=$_POST['X'];
	$inc=0;
	$req="select NSS from patient";
	$res=mysql_query($req);
	if (mysql_num_rows($res)!=0){
		while ($row=mysql_fetch_row($res)){
			$inc++;
		}
		echo 'Il y a '.$inc.' patients dans le registre de la clinique.';
	}else{
		echo 'Pas de patients dans le registre de la clinique!';
	}
?>