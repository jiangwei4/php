<?php
	
	
	$med=$_POST['choixMed'];
	if(!isset($med)){
		echo 'Vous n\'avez pas spécifié de médecin';
	}else{
		if(!isset($date)){//si la date n'est pas définie par le médecin
			if($_POST['daterdv']==''){
				$date=date('Y\-m\-d');//alors la date est définie comme étant celle d'aujourd'hui
				
			}else{
				$date=$_POST['daterdv']; //sinon l'affectation se fait normalement
			}
		}
		$reqPlanning="select * from rdv where date='$date' and idmedecin='$med'"; //cherche tous les rendez-vous d'un médecin à un jour donné
		$resPlanning=mysql_query($reqPlanning);
		echo '<br/> <p>(?:?:H)</p>';
		if (mysql_num_rows($resPlanning)!=0){
			while ($row=mysql_fetch_row($resPlanning)){
				$reqPatient="select * from patient where NSS='$row[2]'";//cherche le patient correspondant au NSS donné
				$resPatient=mysql_fetch_row(mysql_query($reqPatient));
				echo $row[7].': <input type="text" readonly size="30" value="RDV avec '.$resPatient[2].' '.$resPatient[1].'"/> <input type="button" value="Synthèse" <br/><br/>';
			}
		}else{
			echo "<p> Pas de rendez-vous aujourd'hui! </p>";
		}
	}
	
	
?>