<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Clinique</title>
	<link rel="stylesheet" type="text/css" href="clinique.css" />
	<script type="text/javascript" src="clinique.js"></script> 
</head>
<body>

<?php 
if (!isset ($_SESSION['id'])){
session_start();
$_SESSION['id']='';
$_SESSION['mdp']='';
}
?>

		<form action="connection.php" method="post">
		<fieldset><legend>Connection</legend>
				<p>
				<label for="id">Identifiant :</label>
				<input type="text" name="id"  />
				</p>
				<p>
				<label for="mdp">Mots de passe :</label>
				<input type="text" name="mdp"  />
				</p>
				<input type="submit" value="Envoyer" name="message" />
				<input type="reset" value="Tout effacer" class="form_label_nostyle" />
			</fieldset>
			</form>
		<fieldset><legend>patient</legend>
				<p>
				<label for="NSS">NSS :</label>
				<input type="text" name="NSS" id="NSS"  />
				</p>
				<p>
				<label for="M">montant :</label>
				<input type="text" name="M" id="M" onBlur="nombre(this)"/>
				</p>
				<input type="button" value="Envoyer" name="message" onClick="patient()"/>
				<input type="reset" value="Tout effacer" class="form_label_nostyle" />
				<div id="patient">
				</div>
				</br>
			<input type="button" value="Afficher les operations du patient" name="oki" onClick="operation()"/>
				<div id="patient2">
				</div>
				</br>
			<input type="button" value="Afficher les soldes du patient" name="oki2" onClick="requestsolde()"/>
				<div id="soldepatient">
				</div>
			</fieldset>
			
</body>
</html>

