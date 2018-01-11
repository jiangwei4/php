<?php
session_start();
$_SESSION['a']=$_GET['champ'];
$prix =	$_SESSION['P2'.$_SESSION['a']];
		$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		echo '<table> <caption> Modifier le prix </caption><tr><th>operation</th><th>prix</th><th>boutons</th></tr>
		<tr><td>'.$_SESSION['O'.$_GET['champ']].'</td><td>'.$_SESSION['P2'.$_GET['champ']].'</td><td><center><input type="button" value="supprimer" onClick="modifieractes2supp()"/></center></td></tr>
		<tr><td>&nbsp</td><td><input type="textbox" name="prix" id="prix" onBlur="nombre(this)"/></td><td><center><input type="button" value="valider" onClick="modifieractes2()"/></center></tr>
		</table>';
	
	
?>