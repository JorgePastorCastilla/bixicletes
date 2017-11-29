<?php
require_once "DataObject.class.php";


class Idioma extends DataObject
{


    protected $data = array(
        "idIdioma" => "",
        "nombreIdioma" => ""
    );


    public static function selectAll()
    {
        $conn = parent::connect();
        $sql = "SELECT * FROM idioma";
        try {
            $st = $conn->prepare($sql);

            $st->execute();
            $members = array();
            foreach ($st->fetchAll() as $row) {
                $members[] = new Idioma($row);
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
        $sql = "SELECT * FROM " . TBL_PAGO . " WHERE idIdioma = :id";
        try {
            $st = $conn->prepare($sql);
            $st->bindValue(":id", $id, PDO::PARAM_INT);
            $st->execute();
            $row = $st->fetch();
            parent::disconnect($conn);
            if ($row) return new Idioma($row);
        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }
    }




}

?>
