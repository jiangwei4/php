<?php
$NSS=$_GET['NSS'];
$SC=$_GET['M'];
	if($SC>=1){
	$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		

			$query = "SELECT * FROM patient where NSS='$NSS'";
			$result = mysql_query($query) or die('Erreur lors de l\'envoi1<br />'.mysql_error());
			$donnee = mysql_fetch_array($result); 
			if((!$donnee['NSS']=='')){
			
		$solde="select SC from patient where NSS='$NSS'";
		$ssolde=mysql_query($solde);
		$solde = mysql_fetch_row($ssolde)[0];
		
		$date=date('Y\-m\-d');    //on ajoute dans la table paiement les modification apporté
		$qquery = "insert into paiement values ('$NSS','$date', '$solde', '', '')";
		$rresult = mysql_query($qquery) or die('Erreur lors de l\'envoi2 '.mysql_error());
		
		$s=$solde+$SC;
		
		
			$query="UPDATE patient SET SC='$s' WHERE NSS='$NSS'";
			mysql_query($query) or die('Erreur lors de l\'envoi3<br />'.mysql_error());
			echo '<br/>virement effectué.';
			} else {
			echo '<br/>NSS inconnu.';
			}
	} else {
	echo '<br/>montant inferieur ou egale a zero.';
	}

?>