<?php
include '../config.php';
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['age']) && isset($_POST['salaire']) && isset($_POST['idd']))
{
	$db=config::getconnexion();
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$tel=$_POST['tel'];
	$age=$_POST['age'];
	$salaire=$_POST['salaire'];
	$idd=$_POST['idd'];
	$req="UPDATE `serveurs` SET `nom` = '$nom', `prenom` = '$prenom',`tel` = '$tel', `age` = '$age', `salaire` = '$salaire' WHERE `serveurs`.`id` = '$idd'";
	$db->exec($req);
	
	header('Location: http://localhost/webBack/views/affichageserveur.php');
}
?>