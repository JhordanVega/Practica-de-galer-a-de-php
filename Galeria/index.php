<?php 

	require_once "funciones.php";

	$conexion = conexion('galeria_op', 'root', '');

	if (!$conexion) {
		die();
	}

	$Statement = $conexion->prepare("SELECT * FROM fotos");

	$Statement->execute();

	$fotos = $Statement->fetchAll();

	require "views/index.view.php";

 ?>