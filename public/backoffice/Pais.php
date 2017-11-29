<?php
require_once "DataObject.class.php";


class Pais extends DataObject
{


    protected $data = array(
        "idPais" => "",
        "nombrePais" => ""
    );


    public static function selectAll()
    {
        $conn = parent::connect();
        $sql = "SELECT * FROM Pais";
        try {
            $st = $conn->prepare($sql);

            $st->execute();
            $members = array();
            foreach ($st->fetchAll() as $row) {
                $members[] = new Pais($row);
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
        $sql = "SELECT * FROM Pais WHERE idPais = :id";
        try {
            $st = $conn->prepare($sql);
            $st->bindValue(":id", $id, PDO::PARAM_INT);
            $st->execute();
            $row = $st->fetch();
            parent::disconnect($conn);
            if ($row) return new Pais($row);
        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }
    }

    public
    static function insert($nom)
    {
        $conn = parent::connect();
        $sql = "INSERT INTO Pais (nombrePais)
     VALUES (:nombrePais)";
        try {
            $st = $conn->prepare($sql);
            $st->bindParam(':nombrePais', $nom);
            $st->execute();


            parent::disconnect($conn);

        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }
        header("Location: http://localhost/BICICLETES/public/backoffice/insertar-pais.php");
        die();
    }


    public
    static function update($id, $nom)
    {
        $conn = parent::connect();
        $sql = "UPDATE Pais SET nombrePais=:nombrePais WHERE idPais=:idPais";
        try {

            $st = $conn->prepare($sql);
            $st->bindParam(':idPais', $id);
            $st->bindParam(':nombrePais', $nom);
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
        $sql = "DELETE FROM Pais WHERE idPais=:idPais";
        try {

            $st = $conn->prepare($sql);
            $st->bindParam(':idPais', $id);

            $st->execute();


            parent::disconnect($conn);

        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }
    }
}

?>