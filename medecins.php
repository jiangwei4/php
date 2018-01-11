<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>medecins</title>
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
	<fieldset><legend>Afficher le planning</legend>

			
	<?php
		include("planning.php");
	?>
	</fieldset>
	<fieldset><legend>Compte-rendu de la consultation</legend>
	<?php
		include("rechercheRDV.php");
	?>
	
	</fieldset>
	<fieldset><legend>Bloquer un horaire pour raisons administratives</legend>
	<?php
		include("bloquer.php");
	?>

	</fieldset>
	
	<fieldset><legend>Quiter </legend>
		<a href="deconection.php">se deconnecter</a>
	</fieldset>
</body>
</html>

