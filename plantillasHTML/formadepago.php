<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$nom = $_POST['nom'];
try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO forma_pago (nombreFormaPago,)
   VALUES ($nom)";
   // use exec() because no results are returned
   $conn->exec($sql);
   echo "New record created successfully";
   }
catch(PDOException $e)
   {
   echo $sql . "<br>" . $e->getMessage();
   }

$conn = null;
?>
