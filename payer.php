<?php

if(!isset($_SESSION['NSS'])){
session_start();
}

if(isset($_POST['payer'])){
		$host ='localhost';
		$user='root';
		$bdd='clinique';
		$c=0;
		$a=0;
		$pr=0;
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		foreach($_POST as $val){
			foreach($_POST as $key => $val){
				if(($val == 'on')){  //prb les valeurs s affiche plusieurs fois 
					if($a<$key){
						$a=$key;
						$z[$c]=$key;
						$c++;
						}
				}
				}
				}
				for($e=0;$e<$c;$e++){  //on as les valeurs dans un tableau 
				$query = "SELECT * FROM rdv where id='$z[$e]'";
				$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
				while($row = mysql_fetch_row($result)){
					$prix = $row[9];
				}
				$pr=$pr+$prix;
				}
				$NSS=$_SESSION['NSS'];
				$query = "SELECT * FROM patient where NSS='$NSS'";
				$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
				while($row = mysql_fetch_row($result)){
					$solde = $row[8];
				}
				if($solde<$pr){
				?><script type="text/javascript"> alert("vous n avez pas assez d argent.");</script><?php
				
				} else {
				$date=date('Y\-m\-d');    //on ajoute dans la table paiement les modification apporté
				$qquery = "insert into paiement values ('$NSS','$date', '$solde', '', '')";  //on met a jour sont solde de paiement
				$rresult = mysql_query($qquery) or die('Erreur lors de l\'envoi2 '.mysql_error());
				$solde=$solde-$pr;
				$query="UPDATE patient SET SC='$solde' WHERE NSS='$NSS'"; //on change sont solde
				mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
						for($g=0;$g<$c;$g++){//on met que c est payer dans rdv	
							$query="UPDATE rdv SET regler='oui' WHERE id='$z[$g]'";
							mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
							}		
?><script type="text/javascript"> alert("paiement reussi.");</script><?php	
						
				}
				
					include('clinique.php');
				}
		
			
?>