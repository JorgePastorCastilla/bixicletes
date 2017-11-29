<?php
require_once "DataObject.class.php";


class FormaPago extends DataObject
{


    protected $data = array(
        "idFormaPago" => "",
        "nombreFormaPago" => ""
    );


    public static function selectAll()
    {
        $conn = parent::connect();
        $sql = "SELECT * FROM forma_pago";
        try {
            $st = $conn->prepare($sql);

            $st->execute();
            $members = array();
            foreach ($st->fetchAll() as $row) {
                $members[] = new FormaPago($row);
            }

            $row = $st->fetch();
            parent::disconnect($conn);
            return array($members);
        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }

    }


    public static function select($id)
    {
        $conn = parent::connect();
        $sql = "SELECT * FROM " . TBL_PAGO . " WHERE idFormaPago = :id";
        try {
            $st = $conn->prepare($sql);
            $st->bindValue(":id", $id, PDO::PARAM_INT);
            $st->execute();
            $row = $st->fetch();
            parent::disconnect($conn);
            if ($row) return new FormaPago($row);
        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }
    }

    public
    static function insert($nom)
    {
        $conn = parent::connect();
        $sql = "INSERT INTO forma_pago (idFormaPago,nombreFormaPago)
     VALUES (:idFormaPago,:nombreFormaPago)";
        try {
            $id = 'DEFAULT';
            $st = $conn->prepare($sql);
            $st->bindParam(':idFormaPago', $id);
            $st->bindParam(':nombreFormaPago', $nom);
            $st->execute();


            parent::disconnect($conn);

        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }
        header("Location: http://localhost/project/BICICLETES/plantillasHTML/DAO/contenido-forma-pago.php");
        die();
    }


    public
    static function update($id, $nom)
    {
        $conn = parent::connect();
        $sql = "UPDATE forma_pago SET nombreFormaPago=:nombreFormaPago WHERE idFormaPago=:idFormaPago";
        try {

            $st = $conn->prepare($sql);
            $st->bindParam(':idFormaPago', $id);
            $st->bindParam(':nombreFormaPago', $nom);
            $st->execute();


            parent::disconnect($conn);

        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }
    }

    public
    static function delete($id)
    {
        $conn = parent::connect();
        $sql = "DELETE FROM forma_pago WHERE idFormaPago=:idFormaPago";
        try {

            $st = $conn->prepare($sql);
            $st->bindParam(':idFormaPago', $id);

            $st->execute();


            parent::disconnect($conn);

        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }
    }
}

?>
