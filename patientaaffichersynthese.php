<?php
session_start();
		$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		$NSS = $_GET['NSS'];
		if(empty($NSS)){
			echo"vous n avez pas remplie le champ NSS.";
		}else{
			$query = "SELECT * FROM rdv where NSS='$NSS'";
			$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			$donnee = mysql_fetch_array($result); 
			if(!$donnee['NSS']==''){
$result2 = mysql_query($query)or die('Erreur lors de l\'envoi<br />'.mysql_error());
echo'<table border="1" id="tab2" style="empty-cells :hide;">
<caption>opperation du patient </caption>';
echo'<tr><th> date </th><th>heure</th><th> idmedecin </th><th> motif </th><th> compte-rendu </th><th> prix </th><th> suivi </th></tr>';

while($row = mysql_fetch_row($result2)){
	$D = $row[0];
	$idM = $row[1];
	$M = $row[3];
	$CR = $row[4];
	$PRIX = $row[9];
	$S = $row[5];
	$H = $row[7];
	
	echo'<tr><td> '.$D.' </td><td>'.$H.'</td><td> '.$idM.' </td><td> '.$M.' </td><td> '.$CR.' </td><td> '.$PRIX.' </td><td> '.$S.' </td></tr>';
	} 
	} else {
		echo'<p> pas de patient dont le NSS est : '.$NSS.'</p>';
	}
	}
?>
				
			
