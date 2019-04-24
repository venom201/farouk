<?php
$to="faroukarcher@gmail.com";
$subject="Confirmation de reservation";
$txt="Bonjour,\n\n\nVotre demande de réservation est en cours de traitement.\nMerci de verifier votre liste de reservations pour confirmer votre présence chez nous.\n\n\nCordialement,\n\nEquipe MIMOSAS";
mail($to,$subject,$txt);
?>