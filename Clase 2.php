<?php

	class animal {
 
 public static var $vive = true;//propiedad
 
  public static function comer(){
 
    echo 'Estoy comiendo';//metodo
 
  }
 
 public static function estaVivo(){
 
    return ($this->vive) ? true : false;
 
  }
 
}

?>
