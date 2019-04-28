<?php
include 'serveurC.php';
include  '../entities/serveur.php';

if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['age']) and isset($_POST['sexe']) and isset($_POST['salaire']) and isset($_POST['tel']))
{
	$v1=$_POST['nom'];
	$v2=$_POST['prenom'];
	$v3=$_POST['age'];
	$v4=$_POST['sexe'];
	$v5=$_POST['salaire'];
	$v6=$_POST['tel'];
	$serveur= new serveur($v1,$v2,$v3,$v4,$v6,$v5);
	$ser= new serveurC();
	$ser->ajouterServeur($serveur);

	$username = "faroukarcher@gmail.com";
	$hash = "67c029360529e1bbc976568e985d98bae687130a221c8753fa8b5e353d291751";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "Administration MIMOSAS"; // This is who the message appears to be from.
	$numbers = '00216'.$v6; // A single number or a comma-seperated list of numbers
	$message = "Bienvenue Cher(e)".$v1." ".$v2." dans votre nouvelle famille MIMOSAS\nVous venez de signer votre contrat de travail, vous êtes au clair sur la durée de votre temps d'essai et votre nouveau job démarre bientôt.\nMerci.";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	header('Location: http://localhost/webBack/views/ajoutserveur.php');
}
?>