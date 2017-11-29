<?php
require_once "DataObject.class.php";


class IdiomaFormaPago extends DataObject
{


    protected $data = array(
        "iidIdioma" => "",
        "idFormaPago" => "",
        "descripcio" => ""
    );


    public static function selectAll()
    {
        $conn = parent::connect();
        $sql = "SELECT * FROM idioma_has_forma_pago";
        try {
            $st = $conn->prepare($sql);

            $st->execute();
            $members = array();
            foreach ($st->fetchAll() as $row) {
                $members[] = new IdiomaFormaPago($row);
            }

            $row = $st->fetch();
            parent::disconnect($conn);
            return array($members);
        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }

    }
//    public static function selectAllJoin()
//    {
//
//
//        $conn = parent::connect();
//        $sql = "SELECT idioma.nombreidioma, idioma_has_forma_pago.descripcio
//FROM idioma_has_forma_pago
//INNER JOIN idioma
//ON idioma.idIdioma=idioma_has_forma_pago.iidIdioma";
//        try {
//            $st = $conn->prepare($sql);
//
//            $st->execute();
//            $members = array();
//            foreach ($st->fetchAll() as $row) {
//                $members[] = new IdiomaFormaPago($row);
//            }
//
//            $row = $st->fetch();
//            parent::disconnect($conn);
//            return array($members);
//        } catch (PDOException $e) {
//            parent::disconnect($conn);
//            die("Query failed: " . $e->getMessage());
//        }
//
//    }



    public
    static function insert($iidIdioma,$idFormaPago,$descripcio)
    {
        $conn = parent::connect();
        $sql = "INSERT INTO idioma_has_forma_pago (iidIdioma,idFormaPago,descripcio)
     VALUES (:iidIdioma,:idFormaPago,:descripcio)";
        try {

            $st = $conn->prepare($sql);
            $st->bindParam(':iidIdioma', $iidIdioma);
            $st->bindParam(':idFormaPago', $idFormaPago);
            $st->bindParam(':descripcio', $descripcio);
            $st->execute();


            parent::disconnect($conn);

        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }
        header("Location: http://localhost/project/BICICLETES/plantillasHTML/DAO/contenido-forma-pago.php");
        die();
    }



}

?>
