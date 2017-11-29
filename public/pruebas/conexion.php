
<?php
try {

	$dsn = "mysql:mydb=mydb";
	$username = "root";
	$password = "12345678";

	$base = new PDO('mysql:host=localhost; dbname=mydb','root','12345678');
	$base->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	$base->exec("SET CHARACTER SET UTF8");


} catch ( PDOException $e ) {

	echo "Connection failed: " . $e-> getMessage();
}

?>