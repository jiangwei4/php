<?php
session_start();
$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
$D=$_GET['champ'];
$_SESSION["daterdv"]=$D;
echo '<fieldset><legend>RDV</legend><p>voulez vous prendre un rendez vous le '.$_SESSION["date".$D].' à '.$_SESSION["h".$D].' heure ?<p>';
echo 'pour : <select name="motif" id="motif">';

		$query = "SELECT * FROM prix";
		$result = mysql_query($query)or die('Erreur lors de l\'envoi<br />'.mysql_error());

while($row = mysql_fetch_row($result)){

	$C = $row[0]; 
	echo'
<option value="'.$C.'">'.$C.'</option>';
}
echo'</select>
  <input type="button" value="prendre rdv" onClick="prendrerdv()" /><input type="button" value="non" onClick="rafraichir()" />';
echo'</fieldset>';
?>