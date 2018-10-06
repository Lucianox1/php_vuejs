<?php

require_once('conexion.php');


class fruta
{
	private $id;
	private $nombre;
	private $color;
	const TABLA = 'frutas';
	function __construct($nombre = null,$color = null,$id = null)
	{
		$this->id = $id;
		$this->nombre = $nombre;
		$this->color = $color;
	}



	public function guardar(){
		$conexion = new conexion();
		if($this->id){//si hay id modifica
			$consulta = $conexion->prepare('UPDATE '. self::TABLA .'SET f_nombre = :n, f_color = :c WHERE f_id = :idf');
			$consulta->bindParam(':n',$this->nombre);
			$consulta->bindParam(':c',$this->color);
			$consulta->bindParam(':idf',$this->id);
			$consulta->execute();
		}else{//si no hay id guarda un nuevo registro
			$consulta = $conexion->prepare('INSERT INTO '. self::TABLA .' (f_nombre,f_color) VALUES (:n,:c)');
			$consulta->bindParam(':n',$this->nombre);
			$consulta->bindParam(':c',$this->color);
			$consulta->execute();
		}
	}

	public function traer_todos(){
		$conexion = new conexion();
        $consulta = $conexion->prepare('SELECT * FROM '. self::TABLA );
        $consulta->execute();
        $registros = $consulta->fetchAll();
        return $registros;
	}

	public function eliminar($id){
		$conexion = new conexion();
		$this->id = $id;
		$consulta = $conexion->prepare('DELETE FROM '.self::TABLA.' WHERE f_id = :f_id');
		$consulta->bindParam(':f_id',$this->id,PDO::PARAM_INT);
		$consulta->execute();
	}




}

?>