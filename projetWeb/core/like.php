<?php
include '../config.php';
$db = config::getConnexion();
	session_start();
	$a=$_SESSION['n'];

	$id_serv=$_POST['id_serv'];

	//$select= "SELECT * FROM `eval` WHERE `id_serveur`=$id_serv and `id_user`=$a";

	$result = $db->query("SELECT * FROM `eval` WHERE `id_serveur`=$id_serv and `id_user`=$a");
	$count=$result->rowCount();
	//$row = mysql_fetch_array($result);
	
	//var_dump($result);

	if ($count == 0 ){
		$INSERT="INSERT INTO `eval` (`id_serveur`, `id_user`) VALUES ($id_serv,$a);";
		$db->exec($INSERT);
	}  

	

if(isset($_POST['likeBTN'])  )
{	
	$sql ="UPDATE `eval` SET `stat` = 1  WHERE `eval`.`id_serveur` = '$id_serv' AND `eval`.`id_user` = '$a' ";
	$db->exec($sql);


	header('Location: http://localhost/projetWeb/views/note.php');
}

else if(isset($_POST['dislikeBTN'])  )
{	
	$sql ="UPDATE `eval` SET `stat` = -1  WHERE `eval`.`id_serveur` = '$id_serv' AND `eval`.`id_user` = '$a' ";
	$db->exec($sql);


    
	header('Location: http://localhost/projetWeb/views/note.php');
}



?>