<?php

require_once "Idioma.php";

if(isset($_POST['submit'])) {
	$valor = $_POST['submit'];
}else{
	$valor = 'nada';
}

if(isset($_POST['nombreInsert'])) {
    Idioma::insert($_POST['nombreInsert']);
}

if($valor == 'borrar') {
    Idioma::delete($_POST['id']);
}

if($valor == 'update') {
    Idioma::update($_POST['id'],$_POST['nombre']);
}


header("Location: insertar-idioma.php");
die();
?>