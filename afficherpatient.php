<?php			
$query=$_SESSION['query'];
$result = mysql_query($query)or die('Erreur lors de l\'envoi<br />'.mysql_error());
echo'<table border="1" id="tab" style="empty-cells :hide;">
<caption>information du patient </caption>';
echo'<tr><th> nom </th><th> prenom </th><th> date de naissance </th><th> adresse </th><th> numero </th><th> profession </th><th> situation familiale </th><th> solde du compte  </th></tr>';

while($row = mysql_fetch_row($result)){
	$_SESSION['NSS']=$row[0];
	
	$N = $row[1];
	$P = $row[2];
	$D = $row[3];
	$A = $row[4];
	$NUM = $row[5];
	$PRO = $row[6];
	$SF = $row[7];
	$SC = $row[8];
	echo'<tr><td> '.$N.' </td><td> '.$P.' </td><td> '.$D.' </td><td> '.$A.' </td><td> '.$NUM.' </td><td> '.$PRO.' </td><td> '.$SF.' </td><td> '.$SC.' </td></tr>';

}

echo'<tr></td><td><input type="textbox" name="N"  id="N"/></td><td><input type="textbox" name="P"  id="P"/></td>
<td><input type="textbox" name="D"  id="D" /></td><td><input type="textbox" name="A"  id="A"/></td><td><input type="textbox" name="NUM"  id="NUM"/></td>
<td><input type="textbox" name="PRO"  id="PRO"/></td><td>
<select name="SF" id="SF">
<option value=""></option>
<option value="célibataire">célibataire</option>
<option value="marié(e)">marié(e)</option>
<option value="divorcé(e)">divorcé(e)</option>
<option value="veuf(ve)">veuf(ve)</option>
</select>
</td><td><input type="textbox" name="M"  id="M"/></tr>
<tr><td colspan="7"><center><input type="button" value="          appliquer les changements          " name="modification" onClick="modificationpatient()" ></center></td>
<td><input type="button" value="Ajouter de l argent" name="Envoyer2" onClick="patient()"/><div id="patient"></div></td></tr></table>';
?>