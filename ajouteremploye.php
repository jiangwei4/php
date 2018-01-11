<?php
$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		if((!$_GET['nom']=="")&&(!$_GET['mdp']=="")){
		$n=$_GET['nom'];
		$m=$_GET['mdp'];
		$c=$_GET['cat'];
		$sp=$_GET['sp'];
		
	
			$query = "SELECT * FROM employes where id='$n' and mdp='$m'";
			$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			$donnee = mysql_fetch_array($result); 
		if($c=="medecins"&&$sp==""){
		echo 'vous n avez pas mit la specialité';
		} else {
			if((!$donnee['id']=='')&&(!$donnee['mdp']=='')){
			echo 'il y a deja un employe avec ces données';
			} else {
			$p=$_GET['mdp'];
		$query = "insert into employes values ('$c','$n', '$m' ,'')";
		$result = mysql_query($query) or die('Erreur lors de l\'envoi 2');	
			echo'employé ajouter';
			
		}
		if($c=="medecins"){
		$query = "insert into medecin values ('$n' ,'$sp')";
		$result = mysql_query($query) or die('Erreur lors de l\'envoi 2');
		}
		
		
			
		}
		} else {
		echo'vous n avez pas remplie les champs correctement';
		
		}

?>