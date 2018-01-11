<?php
	$host ='localhost'; //NE MARCHE PAS
	$user='root';
	$bdd='clinique';
	mysql_connect($host,$user,'') or die('erreur de connexion au serveur ');
	mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
	$a=0;
	$c=0;
	$date=$_POST['datePrecise'];
	echo 'la somme de tous les employés a la date : '.$date.' etait de : ';
	$q="SELECT * FROM patient";
$r = mysql_query($q) or die('Erreur lors de l\'envoi<br />'.mysql_error());
while ($row2=mysql_fetch_row($r)){
			$NSS = $row2[0];
$query = "SELECT * FROM paiement where NSS='$NSS' and date='$date'";
$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
while($row = mysql_fetch_row($result)){
	$S = $row[2];
	
	if($a<$S){
						$a=$S;
						$z[$c]=$S;
						$c++;
						}
						
						
	
	}
	}
	
	for($e=0;$e<$c;$e++){ 
	$_SESSION['e']=$e;
	}
	echo $z[$_SESSION['e']].' €';
	
?>



