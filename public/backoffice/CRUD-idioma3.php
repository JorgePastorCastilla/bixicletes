<?php

require_once "Idioma.php";




if(isset($_POST['IdDelete'])) {
    Idioma::delete($_POST['IdDelete']);
}
if(isset($_POST['nombreInsert'])) {
    Idioma::insert($_POST['nombreInsert']);
}

if(isset($_POST['IdUpdate'])) {
    Idioma::update($_POST['IdUpdate'],$_POST['NomUpdate']);
}


header("Location: http://localhost/BICICLETES/public/backoffice/insertar-idioma.php");
die();
?>