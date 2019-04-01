<?php
include "../config.php";
/**
 * 
 */
class utilisateurC
{
	
	function ajouterUtilisateur($utilisateur)
	{
		
        $nom=$utilisateur->getnom();
        $email=$utilisateur->getemail();
        $mdp=$utilisateur->getmdp();
        $role="user";
        
		$sql="INSERT INTO users (nom,email,mdp,role) values (:nom,:email,:mdp,:role)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':mdp',$mdp);
		$req->bindValue(':role',$role);
		
		    $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

	function afficherUtilisateur($role)
	{
		$sql="SELECT * FROM users WHERE role='user'";
		$db=config::getConnexion();
		$liste=$db->query($sql);
		return $liste;
	}
	function afficherAdmin($role)
	{
		$sql="SELECT * FROM users WHERE role='admin'";
		$db=config::getConnexion();
		$liste=$db->query($sql);
		return $liste;
	}
}
?>