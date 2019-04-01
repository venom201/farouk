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
	header('Location: http://localhost/webBack/views/ajoutserveur.php');
}
?>