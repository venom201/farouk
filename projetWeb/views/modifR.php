<?php
include '../config.php';
if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['numero'])&& isset($_POST['date']) && isset($_POST['nombre']) && isset($_POST['duree']) && isset($_POST['idd']))
{
	$db=config::getconnexion();
	$nom=$_POST['nom'];
	$email=$_POST['email'];
	$numero=$_POST['numero'];
	$nombre=$_POST['nombre'];
	$date=$_POST['date'];
	$duree=$_POST['duree'];
	$idd=$_POST['idd'];
	$req="UPDATE `reservations` SET `nom` = '$nom', `numero` = '$numero', `email` = '$email', `duree` = '$duree', `date` = '$date', `nombre` = '$nombre' WHERE `reservations`.`id` = $idd";
	$db->exec($req);
	
	header('Location: http://localhost/projetWeb/views/index2.php');
}


?>