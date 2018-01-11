<?php
	$host ='localhost';
	$user='root';
	$bdd='clinique';
	mysql_connect($host,$user,'') or die('erreur de connexion au serveur ');
	mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
	$date1=$_POST['date1'];
	$date2=$_POST['date2'];
	$req="select NSS from rdv where date > '$date1' and date < '$date2'";
	$res=mysql_query($req);
	$inc=0;
	if (mysql_num_rows($res)!=0){
		while ($row=mysql_fetch_row($res)){
			if($row[0]!='bloque') $inc++;
		}
		echo 'Il y a '.$inc.' rendez-vous entre le '.$date1.' et le '.$date2.'.';
	}else{
		echo 'Pas de rendez-vous entre ces deux dates!';
	}
	
	
?>