<?php
include '../config.php';
$db=config::getconnexion();
$a=$_GET['id'];
$req="UPDATE `reservations` SET `statut` = 'Accepte' WHERE `reservations`.`id` = '$a'";
$db->query($req);
header('Location: http://localhost/webBack/views/affichagereservation.php');
?>