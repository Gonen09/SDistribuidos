<?php

  require('conexion.php');
  require('vistaProducto.php');

  $categoria = $_GET['cat'];
  //echo "<h3>La categoria es: ".$categoria."<h3>";

  //LOCAL

  function cargarCategoria($categoria,$conn){

    $stmt = $conn->prepare("SELECT * FROM productos WHERE categoria=:cat");
    $stmt->bindParam(':cat', $categoria);
    $stmt->execute();

    while($row = $stmt->fetch()){
        cargarProductos($row['id'],$row['nombre'],$row['precio'],$row['descripcion'],$row['imagen']);
    }
  }

  //SERVIDOR

  /*

  function cargarCategoria($categoria,$cid){

    if($categoria == 'computacion'){
      $codigo = 110;
    }

    if($categoria == 'electronica'){
      $codigo = 120;
    }

  if($categoria == 'telefonia'){
    $codigo = 130;
  }

  $sql="Select * from Productos where seccion =".$codigo;

  $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
  //print odbc_result_all($result,"border=1");

  while ($datos=odbc_fetch_row($result)){

    echo $datos['producto']."<br>";
  }

}*/

if(isset($categoria)){
  //cargarCategoria($categoria,$cid); //SERVIDOR
  cargarCategoria($categoria,$conn); //LOCAL
}
?>
