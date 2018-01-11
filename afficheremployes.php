<?php
session_start();
$host ='localhost';
		$user='root';
		$bdd='clinique';
		$c=0;
		$a=0;
		$pr=0;
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		$query = "SELECT * FROM employes ";
		$result = mysql_query($query)or die('Erreur lors de l\'envoi<br />'.mysql_error());
echo '<table> <caption> Employés</caption><tr><th>type d employe</th><th> id  </th><th> mot de passe </th><th>specialité (medecin uniquement) </th><th>boutons pour modifier</th></tr>';
$a=0;
while($row = mysql_fetch_row($result)){
$a++;
	$C = $row[0]; 
	$N = $row[1];
	$P = $row[2];
	$cl = $row[3];
	$_SESSION['N'.$a]=$N;
	$_SESSION['P'.$a]=$P;
	
	if($C=="medecins"){
			$query2 = "SELECT * FROM medecin where nom='$N'";
			$result2 = mysql_query($query2) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			$b=0;
			while($row2 = mysql_fetch_row($result2)){
			$b++;
			if($b==1){
	echo'<tr><td>'.$C.'</td><td>'.$N.'</td><td>'.$P.'</td><td>'.$row2[1].'</td>
	<td><center><input type="button" name="modifier" value="'.$a.'" onClick="afficheremploye2(this)"  />
	</center></td></tr></tr>';
}
}
	} else {
	
	echo'<tr><td>'.$C.'</td><td>'.$N.'</td><td>'.$P.'</td><td>&nbsp</td>
	<td><center><input type="button" name="modifier" value="'.$a.'" onClick="afficheremploye2(this)"  />
	</center></td></tr></tr>';
	}
}
echo'<tr><th colspan="5">Cree un employé</th></tr>
<tr><th>categorie</th><th>id</th><th>mot de passe</th><th>specialité (medecin uniquement) </th><th>&nbsp</th></tr>
<tr><td><center><select name="cat" id="cat">
<option value="directeur">directeur</option>
<option value="agents">agents</option>
<option value="medecins">medecins</option>
</select></center>
</td><td><input type="textbox" id="nom"/></td><td><input type="textbox" id="mdp"/></td>
<td><center><select name="sp" id="sp">
<option value="amputation">amputation</option>
<option value="transplantation">transplantation</option>
</select></center></td>
<td><center><input type="button" value="ajouter" onClick="ajouteremploye()"/></center></td></tr></table>';


?>