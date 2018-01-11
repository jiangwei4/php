<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>directeur</title>
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
		<fieldset><legend>directeur : <?php echo $_SESSION['id'] ?></legend>

		<fieldset><legend>Afficher tous les employés </legend>
		<input type="button" value="afficher" name="but" onClick="afficheremployes()"/>
		<div id="afficheremployes">
		</div>
		</fieldset>
		
		<fieldset><legend>Modifier les actes </legend>
		<input type="button" value="afficher" name="but" onClick="modifactes()"/>
		<div id="actes">
		</div>
		</fieldset>
		
		<fieldset><legend>Liste des pieces a fournir </legend>
		<input type="button" value="afficher" name="but" onClick="modifierpieces()"/>
		<div id="listepieces">
		</div>
		</fieldset>
		
		<fieldset><legend>rafraichir la page </legend>
		<a href="directeur.php">!rafraichissement!</a>
		</fieldset>

		<fieldset><legend>Quiter </legend>
		<a href="deconection.php">se deconnecter</a>
		</fieldset>
		
		
		
		
		
		
		
		
		
		<fieldset><legend>Statistiques diverses</legend>
			<?php
				include("statistiques.php");
			?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			</fieldset>
</body>
</html>

