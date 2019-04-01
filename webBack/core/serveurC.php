<?php
include "../config.php";
/**
 * 
 */
class serveurC
{
	
	function ajouterServeur($serveur)
	{
		
        $nom=$serveur->getnom();
        $prenom=$serveur->getprenom();
        $age=$serveur->getage();
        $id=$serveur->getid();
        $tel=$serveur->gettel();
        $sexe=$serveur->getsexe();
        $salaire=$serveur->getsalaire();
        
		$sql="INSERT INTO serveurs (nom,prenom,age,sexe,tel,salaire) values (:nom, :prenom,:age,:sexe,:tel,:salaire)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':age',$age);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':salaire',$salaire);		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

	function afficherServeur()
	{
		$sql="SELECT * FROM serveurs";
		$db=config::getConnexion();
		$liste=$db->query($sql);
		return $liste;
	}
	function afficherServeurparid($id)
	{
		$sql="SELECT * FROM serveurs WHERE id='$id'";
		$db=config::getConnexion();
		$liste=$db->query($sql);
		return $liste;
	}
	function affichertriServeur()
	{
		$sql="SELECT * FROM `serveurs` ORDER BY `serveurs`.`id` ASC";
		$db=config::getConnexion();
		$liste=$db->query($sql);
		return $liste;
	}
}
?>