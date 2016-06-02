 <?php

//CONEXION BD LOCAL

$servername = "localhost";
$dbname = "sdproductos";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexion exitosa";
}catch(PDOException $e){
    echo "Conexion fallida: " . $e->getMessage();
}

//CONEXION BD SERVIDOR
/*
$dsn = "bonito";
$servername = "10.3.132.38";
$dbname = 'bonito';
$username = "sa";
$password = "123";

$cid=odbc_connect($dsn, $username, $password);

if (!$cid){
	exit("<strong>Ha ocurrido un error tratando de conectarse con el origen de datos.</strong>");
}else{
  echo("<strong>Conectado con el origen de datos.</strong>");
}
*/
?>
