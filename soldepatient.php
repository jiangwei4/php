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
			$query = "SELECT * FROM paiement where NSS='$NSS'";
			$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			$donnee = mysql_fetch_array($result); 
			if(!$donnee['NSS']==''){
echo'<table border="1" id="tab" style="empty-cells :hide;">
<caption>information des soldes du patient </caption>';
echo'<tr><th> date </th><th> solde </th></tr>';
$query = "SELECT * FROM paiement where NSS='$NSS'";
$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
while($row = mysql_fetch_row($result)){
	$D = $row[1];
	$S = $row[2];
	echo'<tr><td> '.$D.' </td><td> '.$S.' </td></tr>';
}
$query = "SELECT * FROM patient where NSS='$NSS'";
$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
while($row = mysql_fetch_row($result)){
	$D = $row[8];
}
echo'<tr><th>aujourd hui</th><th>'.$D.'</th></tr></table>';		
	} else {
		echo'<p> pas de patient dont le NSS est : '.$NSS.'</p>';
	}
	}
?>
				
			
