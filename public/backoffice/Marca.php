<?php
require_once "DataObject.class.php";


class Marca extends DataObject
{


    protected $data = array(
        "idMarca" => "",
        "nombreMarca" => "",
        "webURL" => ""
    );


    public static function selectAll()
    {
        $conn = parent::connect();
        $sql = "SELECT * FROM Marca";
        try {
            $st = $conn->prepare($sql);

            $st->execute();
            $members = array();
            foreach ($st->fetchAll() as $row) {
                $members[] = new Marca($row);
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
        $sql = "SELECT * FROM Marca WHERE idMarca = :id";
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
    static function insert($nom, $url)
    {
        $conn = parent::connect();
        $sql = "INSERT INTO Marca (nombreMarca,webURL)
     VALUES (:nombreMarca,:webURL)";
        try {
            $st = $conn->prepare($sql);
            $st->bindParam(':nombreMarca', $nom);
            $st->bindParam(':webURL', $url);
            $st->execute();


            parent::disconnect($conn);

        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }
        header("Location: http://localhost/BICICLETES/public/backoffice/insertar-marcas.php");
        die();
    }


    public
    static function update($id, $nom, $url)
    {
        $conn = parent::connect();
        $sql = "UPDATE Marca SET nombreMarca=:nombreMarca , webURL=:webURL WHERE idMarca=:idMarca";
        try {

            $st = $conn->prepare($sql);
            $st->bindParam(':idMarca', $id);
            $st->bindParam(':nombreMarca', $nom);
            $st->bindParam(':webURL', $url);
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
        $sql = "DELETE FROM Marca WHERE idMarca=:idMarca";
        try {

            $st = $conn->prepare($sql);
            $st->bindParam(':idMarca', $id);

            $st->execute();


            parent::disconnect($conn);

        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }
    }
}

?>