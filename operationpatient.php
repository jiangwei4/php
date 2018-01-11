<?PHP
session_start();
$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		$NSS = $_GET['NSS'];
		$_SESSION['NSS']=$NSS;
		if(empty($NSS)){
			echo"vous n avez pas remplie le champ NSS.";
		}else{
			$query = "SELECT * FROM rdv where NSS='$NSS'";
			$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			$donnee = mysql_fetch_array($result); 
			if(!$donnee['NSS']==''){
			?><form action="payer.php" method="post"><?php
			echo'<table> <caption> operation a payer </caption><tr><th>&nbsp</th><th>date</th><th>heure</th><th>operation</th><th>prix</th><th>reglé<th></tr>';
			$test="select * from rdv where NSS='$NSS'";
			$result = mysql_query($test) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			while($row = mysql_fetch_row($result)){
			$ID = $row[6];
			$D = $row[0];
			$H = $row[7];
			$M = $row[3];
			$P = $row[9];
			$R = $row[8];
			if ($R=="non"){
			echo'<tr><td><input type="checkbox" name="'.$ID.'"></td><td>'.$D.'</td><td>'.$H.'</td><td>'.$M.'</td><td>'.$P.'</td><td>&nbsp</td></tr>';
			} else {
			echo'<tr><td>&nbsp</td><td>'.$D.'</td><td>'.$H.'</td><td>'.$M.'</td><td>'.$P.'</td><th>payer</th></tr>';
			}
			
			}
			echo'<tr><td colspan="5"><center><input type="submit" value="payer" name="payer"/></center></td></tr></table>';
			include("payer.php");
			?></form><?php
	} else {
		echo'<p> pas de patient dont le NSS est : '.$NSS.'</p>';
	}
	}

?>