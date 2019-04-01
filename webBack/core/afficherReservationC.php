<?php
include "../config.php";

function afficherReservations()
	{
		$sql="SELECT * FROM reservations";
		$gd=config::getConnexion();
		$listeR=$gd->query($sql);
		return $listeR;
	}
	

	?>