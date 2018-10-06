<?php

/**
 * 
 */
class conexion extends PDO
{
    private $tipo_bd = 'mysql';
    private $host = 'localhost';
    private $nombre_bd = 'crud_pdo';
    private $usuario = 'root';
    private $pass = '';


    function __construct()
    {
        //Sobreescribo el método constructor de la clase PDO.
      try{
         parent::__construct($this->tipo_bd.':host='.$this->host.';dbname='.$this->nombre_bd, $this->usuario, $this->pass);
      }catch(PDOException $e){
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      }
    }
}

?>