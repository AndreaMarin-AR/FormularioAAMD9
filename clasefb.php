<<?php 

 class clasefb{
 	private $db;
 	public function conectar(){
 		$this->db= new mysqli("localhost","root", "" ,"frutas") or die ("No se pudo conectar con Mysql");

 		return $this->db;
 	}

 	}
 ?>