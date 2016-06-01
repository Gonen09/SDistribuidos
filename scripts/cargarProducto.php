<?php
  require('conexion.php');
  require('vistaProducto.php');

  $producto = $_GET['pro'];
  echo "<h3>El producto es: ".$producto."<h3>";

  //LOCAL
  function cargarBusqueda($producto,$conn){
    //$stmt = $conn->prepare("SELECT * FROM productos WHERE CONTAINS (nombre,':nombre')");
    $stmt = $conn->prepare("SELECT * FROM productos WHERE nombre LIKE ':%nombre%'");
    $stmt->bindParam(':nombre', $producto);
    $stmt->execute();

    while($row = $stmt->fetch()){
        cargarProductos($row['id'],$row['nombre'],$row['precio'],$row['descripcion'],$row['imagen']);
    }
  }

  //SERVIDOR
  /*
  function cargarBusqueda($producto,$cid){

  }
  */

  if(isset($producto)){
    //cargarBusqueda($producto,$cid); //SERVIDOR
    cargarBusqueda($producto,$conn); //LOCAL
  }
 ?>
