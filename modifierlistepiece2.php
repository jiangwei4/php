<?php
session_start();
		$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		

$a = $_GET['liste'];
$c = $_SESSION['O2'.$_SESSION['a']];//nom de base 
$cons = $_GET['cons'];
			if(!$a==""){
			$query="UPDATE prix SET prescription='$a' WHERE operation='$c'";
			mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			echo 'la liste des pieces a fournir ont etaient changées</br>';
			} 
			
			if(!$cons==""){
			$query="UPDATE prix SET consignes='$cons' WHERE operation='$c'";
			mysql_query($query) or die('Erreur lors de l\'envoi2<br />'.mysql_error());
			echo'les consignes ont etaient changées';
			}
			
			
			if($a==""&&$cons==""){
			echo 'rien n as etait modifer';
			}
		
?>			