<div class="row">
  <div class="col-sm-1">

  </div>
  <div class="col-sm-3">

      <?php echo "<table style='border: solid 1px black;'>";
      echo "<tr><th>Id</th><th>Nombre</th></tr>";

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
      $password = "";
      $dbname = "mydb";

      try {
       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $stmt = $conn->prepare("SELECT idFormaPago,nombreFormaPago FROM forma_pago");
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

  </div>
  <div class="col-sm-7">
    <div class="row">
      <div class="col-sm-4">
        <div class="card border-primary mb-3" style="max-width: 20rem;">
          <div class="card-header">INSERT</div>
          <div class="card-body">
            <form class="form" action="insert.php" method="post">
              <button type="submit" name="submit">ejecutar INSERT</button>
              <input type="text" name="nom" value=""></form>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
      <div class="card border-warning mb-3" style="max-width: 20rem;">
          <div class="card-header">UPDATE</div>
          <div class="card-body">
            <form class="form" action="update.php" method="post">
              <p> Introduzca el id que desea cambiar</p>
              <input type="text" name="id" value="">
              <p>Introduzca el Nuevo nombre de la forma de pago que desea cambiar</p>
              <input type="text" name="nom" value="">    <br><br>
              <button type="submit" name="submit">ejecutar UPDATE</button>

            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-4">

<div class="card border-danger mb-3" style="max-width: 20rem;">
            <div class="card-header">DELETE</div>
            <div class="card-body">
              <form class="form" action="delete.php" method="post">
                <p>Introduesqui l'id que vol eliminar</p>
                    <input type="text" name="idd" value="">
                <button type="submit" name="submit">ejecutar DELETE</button>
</form>
            </div>
          </div>

      </div>
    </div>
  </div>
  <div class="col-sm-1">

  </div>
</div>






</body>
</html>
