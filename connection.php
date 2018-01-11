<?php
session_start();
	$host ='localhost';
	$user='root';
	$bdd='clinique';
	mysql_connect($host,$user) or die('erreur de connexion au serveur ');
	mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
	$id = $_POST['id'];
	$mdp = $_POST['mdp'];
	$test=true;
	if((empty($id)) || (empty($mdp))){
			?><script type="text/javascript"> alert("vous n avez pas correctement rempli le formulaire.");</script><?php
			 //header("location:clinique.php");
			
		}else{
		/*if (($mdr="' or 1=1#")||($id="' or 1=1#")){
		header("location:clinique.php");
		} else {*/
			$query = "SELECT * FROM employes where id='$id' and mdp='$mdp'";
			$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			while ($row = mysql_fetch_row($result)){
				$I = $row[1];
				$M = $row[2];
				$categorie = $row[0];
				if (($id==$I) and ($mdp==$M)){
					$test=false;
						if( $categorie == 'agents' ){
						$_SESSION['id']=$id;
						$_SESSION['mdp']=$mdp;
							header ('location:agents.php');
						}
						elseif( $categorie == 'medecins' ){
						$_SESSION['id']=$id;
						$_SESSION['mdp']=$mdp;
							header ('location:medecins.php');
						}
						elseif( $categorie == 'directeur' ){
						$_SESSION['id']=$id;
						$_SESSION['mdp']=$mdp;
						header ('location:directeur.php');
						}
				}
			/*}*/
		}
		}
	if($test){
		echo "<fieldset><legend>Information aux utilisateurs</legend>";
		echo"<p>le pseudo " .$id. " est inconnu ou a inséré un mauvais mot de passe  </p></fieldset>";
include("clinique.php");		

	}
		
?>