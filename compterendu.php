<?php
	$host ='localhost';
	$user='root';
	$bdd='clinique';
	mysql_connect($host,$user,'') or die('erreur de connexion au serveur ');
	mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
	$medecin=$_SESSION['id'];
	$date= $_POST['date'];
	$NSS= $_POST['NSS'];
	$_SESSION['NSS']=$NSS;
	$_SESSION['date']=$date;
	/*var_dump($medecin);
	var_dump($date);
	var_dump($NSS);*/
	$reqRDV="select * from rdv where NSS='$NSS' and idmedecin='$medecin' and date='$date'";//cherche le rendez-vous correspondant à la date, NSS, et nom du médecin précisé par ce dernier
	$resRDV=mysql_query($reqRDV);
	//var_dump(mysql_fetch_row($resRDV));
	if (mysql_num_rows($resRDV)!=0){
		echo'<form name="majRdv" method="post" action="modifierRDV.php"><table border="1" id="tab" style="empty-cells :show;"><caption>Informations du rendez-vous </caption>';
		echo'<tr><th> date </th><th> médecin </th><th> NSS du patient </th><th> Motif </th><th> Compte-rendu </th><th>&nbsp </th><th> prix </th><th> suivi </th><th>Justificatif du changement <br/>(si changement de motif)</th><th>Liste nécessaire</th><th>heure</th></tr>';

		while($row = mysql_fetch_row($resRDV)){
	
			$date = $row[0];
			$med = $row[1];
			$NSS = $row[2];
			$mot = $row[3];
			$_SESSION['motif']=$mot;
			$cpt = $row[4];
		
			$prix = $row[6];
			$suivi = $row[5];
			$just = $row[8];
			$heure = $row[7];
			
			
			
$reqRDV2="select * from prix where operation='$mot'";//cherche le rendez-vous correspondant à la date, NSS, et nom du médecin précisé par ce dernier
	$resRDV2=mysql_query($reqRDV2);
			
			while($row2 = mysql_fetch_row($resRDV2)){
			$presc = $row2[2];
			$l = $row2[3];
			echo '<tr><td> '.$date.' </td><td> '.$med.' </td><td> '.$NSS.' </td><td> '.$mot.' </td><td> '.$cpt.' </td><td> '.$presc.' </td><td> '.$prix.' </td><td> '.$suivi.' </td><td>'.$just.'</td><td>'.$l.'</td><td>'.$heure.'</td></tr>';
			}
		}
		$reqMotif="select operation from prix"; //sélectionne la liste de toutes les opérations de la clinique
		$resMotif=mysql_query($reqMotif);
		echo'<tr><td></td><td></td><td></td><td><select name="nomMotif">';
		if (mysql_num_rows($resMotif)!=0){
			while($row = mysql_fetch_row($resMotif)){
				
				echo '<option';
				if($row[0]==$mot){
					echo ' selected>';//pour que le médecin n'ait pas à rechoisir le bon motif s'il n'a pas besoin d'être rechangé
				}else{
					echo '>';
				}
				echo $row[0].'</option>';
			}
		}else{
			echo '<option>pas d\'opération dans la BDD</option>';
		}
		echo '</select></td><td><textarea name="cpt"  id="cpt"></textarea></td><td><textarea name="presc"  id="presc"></textarea></td><td><input type="text" name="prix"  id="prix" placeholder="Si motif autre"></td> <td><textarea name="suivi"  id="suivi"></textarea></td><td><textarea name="justif"  id="justif"></textarea></td></tr>';
		echo'</table><center><input type="submit" value="Appliquer les changements" name="modification" ></center></form>';
	}else{
		echo '<p> Pas de rendez-vous correspondant à ces informations! </p>';
	}
	
?>