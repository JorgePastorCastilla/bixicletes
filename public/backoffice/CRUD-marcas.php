<?php

require_once "Marca.php";

if(isset($_POST['submit'])) {
	$valor = $_POST['submit'];
}else{
	$valor = 'nada';
}

if(isset($_POST['nombreInsert'])) {
    Marca::insert($_POST['nombreInsert'],$_POST['urlInsert']);
}

if($valor == 'borrar') {
    Marca::delete($_POST['id']);
}

if($valor == 'update') {
    Marca::update($_POST['id'],$_POST['nombre'],$_POST['url']);
}


header("Location: http://localhost/BICICLETES/public/backoffice/insertar-marcas.php");
die();
?>