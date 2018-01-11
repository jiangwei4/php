<?php
session_start();
$_SESSION['a']=$_GET['champ'];
		$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		echo '<table> <caption> Modification </caption><tr><th>id</th><th>mdp</th><th>boutons</th></tr>
		<tr><td>'.$_SESSION['N'.$_SESSION['a']].'</td><td>'.$_SESSION['P'.$_SESSION['a']].'</td><td><center><input type="button" value="supprimer" onClick="modificationemployessupp()"/></center></td></tr>
		<tr><td><input type="textbox" name="N" id="N" /></td><td><input type="textbox" name="P" id="P" /></td><td><center><input type="button" value="valider" onClick="modificationemployes()"/></center></td></tr>
		</table>';
?>