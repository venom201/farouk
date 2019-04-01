<?php
include '../config.php';
$db = config::getConnexion();
	session_start();
	$a=$_SESSION['n'];

$id_serv=$_POST['id_serv'];

if(isset($_POST['likeBTN'])  )
{	
	$sql ="UPDATE `serveurs` SET `jaime` = `jaime`+1 WHERE `serveurs`.`id` = '$id_serv' ";
	$db->exec($sql);


	header('Location: http://localhost/projetWeb/views/note.php');
}

else if(isset($_POST['dislikeBTN'])  )
{	
	$sql ="UPDATE `serveurs` SET `jaimepas` = `jaimepas`+1 WHERE `serveurs`.`id` = '$id_serv' ";
	$db->exec($sql);

    
	header('Location: http://localhost/projetWeb/views/note.php');
}



?>