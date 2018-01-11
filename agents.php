<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"/>
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>agents</title>
	<link rel="stylesheet" type="text/css" href="clinique.css" />
	<script type="text/javascript" src="clinique.js"></script> 
</head>
<body>

<?php 
session_start();
if (($_SESSION['id']=='')||($_SESSION['mdp']=='')){
header("location:clinique.php");
}
?>


<fieldset><legend> Agent : <?php echo $_SESSION['id'] ?></legend>
<fieldset><legend>Synthese du patient</legend>
	<label for="NSS">NSS du patient :</label>
	<input type="textbox" name="NSS"  id="NSS" onblur="nombre(this)"/><br/><br/>
	<input type="button" value="afficher les informations du patient" name="but" onClick="request()"/>
	<div  id="NSSPATIENT">
	</div>
	<br/><input type="button" value="afficher les opperations du patient" name="but2" onClick="requestsynthese()"/>
	<div  id="NSSPATIENT2">
	</div>
	<br/><input type="button" value="afficher les soldes du patient" name="but3" onClick="requestsolde()"/>
	<div  id="soldepatient">
	</div>
	</fieldset>
	
<div id="modifpatient">
</div>


<fieldset><legend>retrouver le NSS du patient</legend>
	<label for="nom">nom : </label>
	<input type="textbox" name="nom"  id="nom" onblur="nom(this)"/><br/><br/>
	<label for="date">Date de naisseance (jj/mm/aaaa) : </label>
				<input type="text" name="j" id="j" size="2" maxlength="2" onblur="nombre2(this)"/>
				/
				<input type="text" name="m" id="m" size="2" maxlength="2" onblur="nombre2(this)"/>
				/
				<input type="text" name="a" id="a" size="4" maxlength="4" onblur="nombre4(this)" />
	<input type="button" value="afficher" name="but" onClick="requestnss()"/>
	<div  id="RETROUVERNSS">
	</div>
	</fieldset>
	
	<fieldset><legend>Prendre rdv avec un medecin </legend>
	<label for="NSS2">NSS du patient :</label>
	<input type="textbox" name="NSS2"  id="NSS2" onblur="nombre(this)" /><br/><br/>
	<label for="choixMed">nom du medecin : </label>
	<input type="textbox" name="choixMed"  id="choixMed" onblur="nom(this)" /><br/><br/>
	<label for="choixSP">specialité : </label>
	<select name="choixSP" id="choixSP">
	<option value="transplantation">transplantation</option>
	<option value="amputation">amputation</option>
	</select><br/><br/>
	<input type="button" value="afficher" name="but" onClick="choixMed()"/>
	<div  id="choixMed2">
	</div>
	</fieldset>
	

		<fieldset><legend>rafraichir la page </legend>
		<a href="agents.php">!rafraichissement!</a>
		</fieldset>

		<fieldset><legend>Quiter </legend>
		<a href="deconection.php">se deconnecter</a>
		</fieldset>
		</fieldset>
</body>
</html>

