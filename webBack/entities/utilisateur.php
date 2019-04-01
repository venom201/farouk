<?php
/**
 * 
 */
class utilisateur
{
	private $id;
	private $nom;
	private $email;
	private $mdp;
	private $role;
	function __construct($a,$b,$c)
	{
		$this->nom=$a;
		$this->email=$b;
		$this->mdp=$c;
		
		
	}
	public function getid()
	{
		return $this->id;
	}
	public function getnom()
	{
		return $this->nom;
	}
	public function getemail()
	{
		return $this->email;
	}
	public function getmdp()
	{
		return $this->mdp;
	}

	public function getrole()
	{
		return $this->role;
	}
	
	
	
	public function setid($id)
	{
		$this->id=$id;
	}
	public function setnom($nom)
	{
		$this->nom=$nom;
	}
	public function setemail($email)
	{
		$this->email=$email;
	}
	public function setrole($role)
	{
		$this->role=$role;
	}
	public function setmdp($mdp)
	{
		$this->mdp=$mdp;
	}
}
?>