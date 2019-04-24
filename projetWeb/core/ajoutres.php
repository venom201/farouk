<?php
include 'reservationC.php';
include  '../model/reservation.php';

if(isset($_POST['nom']) and isset($_POST['numero']) and isset($_POST['email']) and isset($_POST['date']) and isset($_POST['duree']) and isset($_POST['nombre']) && isset($_POST['idd']) )
{
	$v1=$_POST['nom'];
	$v2=$_POST['numero'];
	$v3=$_POST['email'];
	$v4=$_POST['date'];
	$v5=$_POST['duree'];
	$v6=$_POST['nombre'];
	$v7=$_POST['idd'];
	$reservation= new reservation($v2,$v1,$v3,$v5,$v4,$v6,$v7);
	$res= new reservationC();
	$res->ajouterreservations($reservation);

	$subject="Réservation à MIMOSAS";
	$txt="Bonjour,\n\n\nVotre demande de réservation est en cours de traitement.\nMerci de verifier votre liste de reservations pour confirmer votre présence chez nous.Rendez-vous sur : http://localhost/projetWeb/views/index2.php.\n\n\nCordialement,\n\nEquipe MIMOSAS";


	mail($v3,$subject,$txt);
	header('Location: http://localhost/projetWeb/views/index2.php');
}
?>