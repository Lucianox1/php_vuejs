<?php
$data = json_decode(file_get_contents("php://input"), true);
$opcion = $data['opcion'];
require_once('fruta.php');


switch ($opcion) {
	case 1://guarda
		$nombre = $data['nombre'];
		$color = $data['color'];
		$f = new fruta($nombre,$color);
		$f->guardar();
		//$row = $f->traer_todos();
		echo "mensaje desde php";
	break;
	case 2:
		$f = new fruta();
		$f->eliminar($data['id_b']);
		$row = $f->traer_todos();
		echo json_encode($row);
	break;
	case 3:
		$f = new fruta();
		$row = $f->traer_todos();
		echo json_encode($row);
	break;
	
	default:
		# code...
		break;
}
		
?>