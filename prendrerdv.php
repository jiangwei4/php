<?php
session_start();
		$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');

$n = $_GET['NSS'];

if(!empty($n)){
$a = $_SESSION["daterdv"];
$H = $_SESSION["h".$a];
$D = $_SESSION["date".$a];

$M = $_SESSION['medecin'];
$motif = $_GET['motif'];
			
		



		/*if($H<20 && $H>7){*/

			$query = "SELECT * FROM prix where operation='$motif'";
			$result = mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			while($row = mysql_fetch_row($result)){
			$prix = $row[1];
			$pieceafournir = $row[2];
			}
			

		$query = "insert into rdv values ('$D','$M','$n', '$motif', '','','','$H','non','$prix' )";
		$result = mysql_query($query) or die('Erreur lors de l\'envoi');
				
						$query2 = "SELECT * FROM prix where operation='$motif'";
						$result2 = mysql_query($query2)or die('Erreur lors de l\'envoi<br />'.mysql_error());

							while($row2 = mysql_fetch_row($result2)){
							
							$P = $row2[2]; 
							$C = $row2[3];
							echo'<table><caption>pour le rdv : '.$motif.'</caption><tr><th>prescription</th><th>liste des pieces a fournir</th></tr>
								<tr><td>'.$C.'</td><td>'.$P.'</td></tr></table>';
							}
				/*} else {
				echo "prb d heure";
				}*/
				} else {
				echo "vous n'avez pas remplie le champ NSS.";
				
				}
				
				
?>