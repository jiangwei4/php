<?php
session_start();
		$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		
		$query = "SELECT * FROM prix";
		$result = mysql_query($query)or die('Erreur lors de l\'envoi<br />'.mysql_error());
echo '<table> <caption> Actes </caption><tr><th>operation</th><th> prix </th><th>boutons pour modifier</th></tr>';
$a=0;
while($row = mysql_fetch_row($result)){
$a++;
	$C = $row[0]; 
	$N = $row[1];
	$_SESSION['O'.$a]=$C;
	$_SESSION['P2'.$a]=$N;
	echo'<tr><td>'.$C.'</td><td>'.$N.'</td><td><center><input type="button" name="modifier" value="'.$a.'" onClick="modifieractes(this)"/></center></td></tr>';
}
echo '<tr><th colspan="3">Ajouter une operation</th></tr>
<tr><th>operation</th><th>prix</th><th>&nbsp</th></tr>
<tr><td><input type="textbox" id="n" onBlur="nom(this)" /></td><td><input type="textbox" id="prix" onBlur="nombre(this)" /></td>
<td><input type="button" name="but" value="ajouter" onClick="ajouteracte()"/></td></table>';


?>