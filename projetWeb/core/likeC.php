<?php
include '../config.php';
$db = config::getConnexion();
	session_start();
	$a=$_SESSION['n'];

	$id_serv=$_POST['id_serv'];
function afficherlike(){
$somme="SELECT SUM(stat) FROM eval WHERE (id_serveur= AND stat=1)";


}
?>