<?php session_start();
	$host ='localhost';
	$user='root';
	$bdd='clinique';
	mysql_connect($host,$user,'') or die('erreur de connexion au serveur ');
	mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
	$exmotif=$_SESSION['motif'];
	$motif=$_POST['nomMotif'];
	$cpt=$_POST['cpt'];
	//$presc=$_POST['presc'];
	$prix=$_POST['prix'];
	$suivi=$_POST['suivi'];
	//$justif=$_POST['justif'];
	$NSS=$_SESSION['NSS'];
	$date=$_SESSION['date'];
	$medecin=$_SESSION['id'];
	if($motif=='autre'){ // si et seulement si le motif est "autre", alors le prix précisé par le médecin sera pris en compte
		$req="update rdv set prix = '$prix' where NSS='$NSS' and date='$date' and idmedecin='$medecin'";
		$res=mysql_query($req);

	}
	if($exmotif!=$motif || $motif=='autre'){ //si le médecin a changé de motif après la consultation
		if($exmotif!=$motif){ //alors le prix va se mettre à jour avec le prix du nouveau motif
			$req="select prix from prix where operation='$motif'";
			$res=mysql_fetch_row(mysql_query($req))or die('Erreur lors de l\'envoi<br />'.mysql_error());
			$nvPrix=$res[0];
			$req="update rdv set prix='$nvPrix' where NSS='$NSS' and date='$date' and idmedecin='$medecin'";
			$res=mysql_query($req)or die('Erreur lors de l\'envoi<br />'.mysql_error());
			
		}
		/*$req="update rdv set justifChgt='$justif' where NSS='$NSS' and date='$date' and idmedecin='$medecin'"; //ici la justification du changement est enregistré (si le motif est autre, alors la description de l'opération est enregistrée ici)
		$res=mysql_query($req)or die('Erreur lors de l\'envoi<br />'.mysql_error());*/

	}
	
	$req="update rdv set motif='$motif', compterendu='$cpt', suivi='$suivi' where NSS='$NSS' and date='$date' and idmedecin='$medecin'"; //met à jour tous les autres champ de textes remplis par le médecin
	$res=mysql_query($req) or die('Erreur lors de l\'envoi<br />'.mysql_error());
	
	header('location: medecins.php');
?>