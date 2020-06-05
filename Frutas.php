<?php
  class Frutas {

  	public $nombre;
  	public $color;
  	public $sabor;
  	public $origen;

  	 function __construct($nombre,$color,$sabor,$origen)
  		{
  			$this->nombre=$nombre;
  			$this->color=$color;
  			$this->sabor=$sabor;
  			$this->origen=$origen;
  		}

    public function mensaje()
    {
      return 'Ha entrado a la función';
    }
}

class Tropicales extends Frutas{
  public $tamano;
  public $beneficios;
  public $aportes;
  public $funcion;

  function __construct($tamano,$beneficios,$aportes,$funcion){

    $this->tamano=$tamano;
    $this->beneficios=$beneficios;
    $this->aportes=$aportes;
    $this->funcion=$funcion;
    
  }
  }
  ?>