<?php
session_start();
		$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		
		$query = "SELECT * FROM prix";
		$result = mysql_query($query)or die('Erreur lors de l\'envoi<br />'.mysql_error());

echo '<table> <caption> Actes </caption><tr><th>operation</th><th>piece(s) a fournir</th><th>consignes</th><th>boutons pour modifier</th></tr>';
$a=0;
while($row = mysql_fetch_row($result)){
$a++;

	$C = $row[0]; 
	$N = $row[2];
	$E = $row[3];
	$_SESSION['O2'.$a]=$C;
	$_SESSION['L'.$a]=$N;
	$_SESSION['E'.$a]=$E;
	echo'<tr><td>'.$C.'</td><td>'.$N.'</td><td>'.$E.'</td>
	<td><center><input type="button" name="modifier" value="'.$a.'" onClick="listepi(this)" /><center></td></tr>';
}
echo'</table>';



?>