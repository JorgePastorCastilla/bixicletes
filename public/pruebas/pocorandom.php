		<?php echo "<div id='tablita'  class='col-sm-12'>";
		echo "<div class='row'>
			<div class='col-sm-3'><button type='button' class='btn btn-primary boton-insertar'>insertar <i class='fa fa-plus-circle' aria-hidden='true'></i></button></div>
		</div>
		<hr>
		<div class='row'>
			<div class='col-sm-3'>#ID</div>
			<div class='col-sm-3'>Nombre</div>
			<div class='col-sm-3'>url</div>
			<div class='col-sm-3'>Acciones</div>
		</div>
		<hr>";

		class TableRows extends RecursiveIteratorIterator {
			function __construct($it) {
				parent::__construct($it, self::LEAVES_ONLY);
			}

			function current() {
				return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
			}

			function beginChildren() {
				echo "<tr>";
			}

			function endChildren() {
				echo "</tr>" . "\n";
			}
		}

		$servername = "localhost";
		$username = "root";
		$password = "12345678";
		$dbname = "mydb";

		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $conn->prepare("SELECT idMarca,nombreMarca,webURL FROM Marca");
			$stmt->execute();

       // set the resulting array to associative
			$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
				echo $v;
			}
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		$conn = null;
	echo "</table>"; ?>