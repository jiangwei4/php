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
			$query = "SELECT * FROM patient where NSS='$NSS'";
			$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			$donnee = mysql_fetch_array($result); 
			if(!$donnee['NSS']==''){
			$_SESSION['query']=$query;
			include("afficherpatient.php"); 
	} else {
		echo'<p> pas de patient dont le NSS est : '.$NSS.'</p>';
	}
	}
?>
				
			
