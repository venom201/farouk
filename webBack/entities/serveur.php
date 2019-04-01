<?php
/**
 * 
 */
class serveur
{
	private $id;
	private $nom;
	private $prenom;
	private $age;
	private $sexe;
	private $tel;
	private $salaire;
	function __construct($a,$c,$d,$e,$f,$g)
	{
		$this->nom=$a;
		$this->prenom=$c;
		$this->age=$d;
		$this->sexe=$e;
		$this->tel=$f;
		$this->salaire=$g;
	}
	public function getid()
	{
		return $this->id;
	}
	public function getnom()
	{
		return $this->nom;
	}
	public function getprenom()
	{
		return $this->prenom;
	}

	public function getage()
	{
		return $this->age;
	}
	public function getsexe()
	{
		return $this->sexe;
	}
	public function gettel()
	{
		return $this->tel;
	}
	public function getsalaire()
	{
		return $this->salaire;
	}
	
	
	public function setid($id)
	{
		$this->id=$id;
	}
	public function setnom($nom)
	{
		$this->nom=$nom;
	}
	public function setemail($age)
	{
		$this->age=$age;
	}
	public function setsexe($sexe)
	{
		$this->sexe=$sexe;
	}
	public function settel($tel)
	{
		$this->tel=$tel;
	}
	public function setprenom($prenom)
	{
		$this->prenom=$prenom;
	}
	public function setsalaire($salaire)
	{
		$this->salaire=$salaire;
	}
}
?>