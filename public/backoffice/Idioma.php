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
        $sql = "SELECT * FROM Idioma";
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
        $sql = "SELECT * FROM Idioma WHERE idIdioma = :id";
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

    public
    static function insert($nom)
    {
        $conn = parent::connect();
        $sql = "INSERT INTO Idioma (nombreIdioma)
     VALUES (:nombreIdioma)";
        try {
            $st = $conn->prepare($sql);
            $st->bindParam(':nombreIdioma', $nom);
            $st->execute();


            parent::disconnect($conn);

        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }
        header("Location: insertar-idioma.php");
        die();
    }


    public
    static function update($id, $nom)
    {
        $conn = parent::connect();
        $sql = "UPDATE Idioma SET nombreIdioma=:nombreIdioma WHERE idIdioma=:idIdioma";
        try {

            $st = $conn->prepare($sql);
            $st->bindParam(':idIdioma', $id);
            $st->bindParam(':nombreIdioma', $nom);
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
        $sql = "DELETE FROM Idioma WHERE idIdioma=:idIdioma";
        try {

            $st = $conn->prepare($sql);
            $st->bindParam(':idIdioma', $id);

            $st->execute();


            parent::disconnect($conn);

        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }
    }
}

?>