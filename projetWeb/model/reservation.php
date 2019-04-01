<?php
/**
 * 
 */
class reservation
{
	private $numero;
	private $id;
	private $nom;
	private $email;
	private $duree;
	private $date;
	private $nombre;
	private $id_client;
	private $statut;
	function __construct($a,$c,$d,$e,$f,$g,$h)
	{
		$this->numero=$a;
		$this->nom=$c;
		$this->email=$d;
		$this->duree=$e;
		$this->date=$f;
		$this->nombre=$g;
		$this->id_client=$h;
	}
	public function getnumero()
	{
		return $this->numero;
	}
	public function getid_client()
	{
		return $this->id_client;
	}
	public function getstatut()
	{
		return $this->statut;
	}
	public function getid()
	{
		return $this->id;
	}
	public function getduree()
	{
		return $this->duree;
	}
	public function getnom()
	{
		return $this->nom;
	}
	public function getemail()
	{
		return $this->email;
	}
	public function getdate()
	{
		return $this->date;
	}
	public function getnombre()
	{
			return $this->nombre;
	}
	
	public function setid($id)
	{
		$this->id=$id;
	}
	public function setnumero($numero)
	{
		$this->numero=$numero;
	}
	public function setemail($email)
	{
		$this->email=$email;
	}
	public function setnom($nom)
	{
		$this->nom=$nom;
	}
	public function setduree($duree)
	{
		$this->duree=$duree;
	}
	public function setdate($date)
	{
		$this->date=$date;
	}
	public function setnombre($nombre)
	{
		$this->nombre=$nombre;
	}
	public function setstatut($statut)
	{
		$this->statut=$statut;
	}
	public function setid_client($id_client)
	{
		$this->id_client=$id_client;
	}
	
}
?>