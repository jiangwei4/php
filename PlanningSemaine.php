<?php
session_start();
$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
	$SP=$_GET['choixSP'];
	$med=$_GET['choixMed'];
	$_SESSION['medecin']=$med;
	$testsp="select * from medecin where nom='$med' and SP='$SP'";
	$resultsp = mysql_query($testsp) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			$donnee = mysql_fetch_array($resultsp); 
			if(!$donnee['SP']=='$SP'){
			echo 'specialité non compatible avec le medecin';
			} else {
	$numJour=date('N')-1;
	$date=date('Y\-m\-d', mktime(0, 0, 0, 1, (7-$numJour), 15));
	
	//var_dump($date);
	echo '     <table> <caption> Planning de la semaine</caption>';
	echo '<tr><th>Heure/Jour</th><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th><th>Vendredi</th><th>Samedi</th><th>Dimanche</th></tr>';
	 $a=0;
	for ($h=7; $h<20; $h++){
		for($i=0; $i<7; $i++){
		$date=date('Y\-m\-d', mktime(0, 0, 0, 1, (7-$numJour+$i), 15));
		$heure=$h.":00:00.000000";
		$a=$a+1;
			if($i==0){
				if($h==7){
				 echo'<tr><th>date</th>';
				 } else {
				if($h!=20){
				echo '<tr><th>'.$h.'H</th>';
				}
				}
			}
			echo '<td>';

			
			$reqPlanning="select * from rdv where date='$date' and heure='$heure' and idmedecin='$med'";
			$resPlanning=mysql_query($reqPlanning);
			if (mysql_num_rows($resPlanning)!=0){
				while ($row=mysql_fetch_row($resPlanning)){
				if($row[2]=="bloque"){
				echo '<center>RDV d entreprise</center>';
				} else {
					$reqPatient="select * from patient where NSS='$row[2]'";
					$resPatient=mysql_fetch_row(mysql_query($reqPatient));
					echo '<center>RDV avec '.$resPatient[2].' '.$resPatient[1].'';
				}
				}
			}else{
			if($h!=7){
			$_SESSION["h".$a]=$heure;
			$_SESSION["date".$a]=$date;
			echo '<center><input type="button" value="'.$a.'" onClick="prendrerdv2(this)" /> </center> ';
			} else {
			echo '<center>'.$date.'<center>';
			}
			}
			echo '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
	

	}
	
	
?>