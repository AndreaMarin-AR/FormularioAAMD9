<?php
    class conexion{
        private $db;
        public function conectar()
        {
            $this->db=new mysqli("localhost","root","","condominio") or die ("La conexion con la base de datos no fue posible");
        return $this->db;
        }
    }