<?php
include "../config.php";
/**
 * 
 */
class reservationC
{
	
	function ajouterreservations($reserv)
	{
		
        $nom=$reserv->getnom();
        $duree=$reserv->getduree();
        $id=$reserv->getid();
        $email=$reserv->getemail();
        $datee=$reserv->getdate();
        $numero=$reserv->getnumero();
        $nombre=$reserv->getnombre();
        $id_client=$reserv->getid_client();
        $statut="en attente";
		$sql="INSERT INTO `reservations` (`nom`, `numero`, `email`, `duree`, `date`, `nombre`, `id_client`, `statut`) VALUES (:nom, :numero,:email, :duree, :datee, :nombre, :id_client, :statut);";

		
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':email',$email);
		$req->bindValue(':duree',$duree);
		$req->bindValue(':datee',$datee);
		$req->bindValue(':nombre',$nombre);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':statut',$statut);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

	function afficherReservations()
	{
		$sql="SELECT * FROM reservations";
		$db=config::getConnexion();
		$liste=$db->query($sql);
		return $liste;
	}
}
?>