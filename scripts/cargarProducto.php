<?php
  require('conexion.php');
  require('vistaProducto.php');

  $producto = $_GET['pro'];
  echo "<h3>El producto es: ".$producto."<h3>";

  //LOCAL
  function cargarBusqueda($producto,$cid){
    //$stmt = $conn->prepare("SELECT * FROM productos WHERE CONTAINS (nombre,':nombre')");
	/*
    $stmt = $conn->prepare("SELECT * FROM productos WHERE nombre LIKE ':%nombre%'");
    $stmt->bindParam(':nombre', $producto);
    $stmt->execute();

    while($row = $stmt->fetch()){
        cargarProductos($row['id'],$row['nombre'],$row['precio'],$row['descripcion'],$row['imagen']);
    }
	*/
	rellenarTablero($producto, $cid);
  }

  function rellenarTablero($producto,$cid)
{
	print $producto;
  $stmt    = odbc_prepare($cid, 'SP_BUSCA_PRODUCTO()');//'CALL SP_BUSCA_PRODUCTO(?)');
  $exito = odbc_execute($stmt, array($producto));
  //$res = odbc_fetch_array(resource $exito);
  
  $codigo = "######";
  $precio = 999999;
  $nombre = "fake name";
  
  
  
  $i=0;
  while(odbc_fetch_row($stmt) and $i < 25)
  {
                //Build tempory
     for ($j = 1; $j <= odbc_num_fields($stmt); $j++)
     {
		 $field_name = odbc_field_name($stmt, $j);
		 if ($j == 1)
		 {
			 $codigo = odbc_result($stmt, $field_name);
			 //print $codigo."<br>";  
		 }
		 
		 if ($j == 2)
		 {
			 $nombre = odbc_result($stmt, $field_name);
			 //print $nombre."<br>";  
		 }
		 
		 if ($j == 3)
		 {
			 $precio = odbc_result($stmt, $field_name);
			 //print $precio."<br><br>";  
		 }
			 
		 
		 //print odbc_result($stmt, $field_name)."<br>" ;
		 
	 }
	 $ruta = 'images//'.$codigo.'.jpg';
	 print $ruta."<br>";
	 cargarProductos($codigo,$nombre,$precio,'Descripcion',$ruta);
	 $i=$i+1;
  }
}


  if(isset($producto)){
    cargarBusqueda($producto,$cid); //SERVIDOR
    //cargarBusqueda($producto,$conn); //LOCAL
  }
 ?>
