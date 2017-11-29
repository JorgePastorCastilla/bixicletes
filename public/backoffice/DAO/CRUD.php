
<?php

require_once "FormaPago.php";
require_once "Idioma.php";
require_once "IdiomaFormaPago.php";




if(isset($_POST['IdDelete'])) {
    FormaPago::delete($_POST['IdDelete']);
}
if(isset($_POST['textInsert'])) {
    FormaPago::insert($_POST['textInsert']);
}

if(isset($_POST['IdUpdate'])) {
    FormaPago::update($_POST['IdUpdate'],$_POST['NomUpdate']);
}


if(isset($_POST['IdIdiomaDesc'])) {
    IdiomaFormaPago::insert($_POST['IdIdiomaDesc'],$_POST['IdPagoDesc'],$_POST['descripcio']);
}

header("Location: http://localhost/project/BICICLETES/plantillasHTML/DAO/contenido-forma-pago.php");
die();
?>