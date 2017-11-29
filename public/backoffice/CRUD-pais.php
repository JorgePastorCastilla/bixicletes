<?php

require_once "Pais.php";

if(isset($_POST['submit'])) {
	$valor = $_POST['submit'];
}else{
	$valor = 'nada';
}

if(isset($_POST['nombreInsert'])) {
    Pais::insert($_POST['nombreInsert']);
}

if($valor == 'borrar') {
    Pais::delete($_POST['id']);
}

if($valor == 'update') {
    Pais::update($_POST['id'],$_POST['nombre']);
}


header("Location: http://localhost/BICICLETES/public/backoffice/insertar-pais.php");
die();
?>