<?php
session_start();
$_SESSION['a']=$_GET['champ'];
		$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		echo '<table> <caption> Modifier la liste des piece(s) a fournir </caption><tr><th>operation</th><th>liste des piece(s) a fournir</th><th>consignes</th><th>boutons</th></tr>
		<tr><td>'.$_SESSION['O2'.$_GET['champ']].'</td><td>'.$_SESSION['L'.$_GET['champ']].'</td><td>'.$_SESSION['E'.$_GET['champ']].'</td></tr>
		<tr><td>&nbsp</td><td roxspan="8"><input type="textbox" name="liste" id="liste" /></td><td roxspan="8"><input type="textbox" name="cons" id="cons" /></td><td><center><input type="button" value="valider" onClick="modifierlistepiece()"/></center></tr>
		</table>';			
?>