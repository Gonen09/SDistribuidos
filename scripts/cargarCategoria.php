<?php

  require('conexion.php');
  require('vistaProducto.php');

  $categoria = $_GET['cat'];
  //echo "<h3>La categoria es: ".$categoria."<h3>";

  //LOCAL
/*
  function cargarCategoria($categoria,$conn){

    $stmt = $conn->prepare("SELECT * FROM productos WHERE categoria=:cat");
    $stmt->bindParam(':cat', $categoria);
    $stmt->execute();

    while($row = $stmt->fetch()){
        cargarProductos($row['id'],$row['nombre'],$row['precio'],$row['descripcion'],$row['imagen']);
    }
  }
*/
  //SERVIDOR

  

  function cargarCategoria($categoria,$cid){

    if($categoria == 'computacion'){
      $codigo = 110;
	  rellenarTablero('SP_PRODUCTOS_COMPUTACION', $cid);
    }

    if($categoria == 'electronica'){
      $codigo = 120;
	  rellenarTablero('SP_PRODUCTOS_ELECTRONICA',$cid);
    }

    if($categoria == 'telefonia'){
      $codigo = 130;
    	rellenarTablero('SP_PRODUCTOS_TELEFONIA',$cid);
   }
 }

function rellenarTablero($categoria,$cid)
{
  $stmt    = odbc_prepare($cid, $categoria);
  $exito = odbc_execute($stmt, array());
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

if(isset($categoria)){
  cargarCategoria($categoria,$cid); //SERVIDOR
  //cargarCategoria($categoria,$conn); //LOCAL
}
?>
