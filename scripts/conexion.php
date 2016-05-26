 <?php

//CONEXION BD SERVIDOR

$dsn = "bonito";
$servername = "10.3.132.38";
$dbname = 'bonito';
$username = "sa";
$password = "123";

$cid=odbc_connect($dsn, $username, $password);

if (!$cid){
	exit("<strong>Ya ocurrido un error tratando de conectarse con el origen de datos.</strong>");
}

?>
