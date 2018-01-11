<?php

$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		if(!$_GET['n']==""){
		if($_GET['p']>0){
				$n=$_GET['n'];
			$query = "SELECT * FROM prix where operation='$n'";
			$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			$donnee = mysql_fetch_array($result); 
			if(!$donnee['operation']==''){
			echo 'l operation : '.$n.' existe deja';
			} else {
			$p=$_GET['p'];
		$query = "insert into prix values ('$n','$p', '','')";
		$result = mysql_query($query) or die('Erreur lors de l\'envoi');	
			echo'operation ajouter';
			
		}
		} else {
		echo'vous avez mal remplie le champ prix';
		}
		} else {
			echo'vous n avez pas remplie le champ operation';
		}
?>