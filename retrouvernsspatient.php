<?php
session_start();
		$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		$nom= $_GET['nom'];
		$naissance=$_GET['a'].$_GET['m'].=$_GET['j'];
		if(empty($nom)|| empty($naissance)){
			echo"vous n avez pas correctement rempli les champs.";
		}else{
			$query = "SELECT * FROM patient where nom='$nom' and naissance='$naissance'";
			$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			$donnee = mysql_fetch_array($result); 
			if((!$donnee['nom']=='') || (!$donnee['naissance']=='')){
			$query = "SELECT * FROM patient where nom='$nom' and naissance='$naissance'";
			$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			while($row = mysql_fetch_row($result)){
			echo '<p> NSS du patient : '.$row[0].'</p><br/>';
			}
	} else {
		echo'<p> pas de patient dont le nom est : '.$nom.' et la date de naissance est : '.$naissance.'</p>';
	}
	}
?>
				
			
