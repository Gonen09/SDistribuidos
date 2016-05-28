<?php

require('conexion.php');

$categoria = $_GET['cat'];
//echo "<h3>La categoria es: ".$categoria."<h3>";

function cargarCategoria($categoria,$conn){

  $stmt = $conn->prepare("SELECT * FROM productos WHERE categoria=:cat");
  $stmt->bindParam(':cat', $categoria);
  $stmt->execute();

  while($row = $stmt->fetch()){
      cargarProductos($row['id'],$row['nombre'],$row['precio'],$row['descripcion'],$row['imagen']);
  }
}


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

function cargarProductos($idProducto,$nombre,$precio,$descripcion,$imagen){

  echo '
      <div class="item  col-xs-4 col-lg-4" id="'.$idProducto.'">
          <div class="thumbnail">
              <img class="group list-group-image img-responsive" id="vista-previa" src="'.$imagen.'"/>
              <div class="caption">
                  <h4 class="group inner list-group-item-heading">'.$nombre.'</h4>
                  <p class="group inner list-group-item-text">'.$descripcion.'</p>
                  <div class="row">
                      <div class="col-xs-12 col-md-6">
                          <p class="lead">$ '.$precio.'</p>
                      </div>
                      <div class="col-xs-12 col-md-6">
                          <a class="btn btn-success" href="#">Comprar</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  ';
}

//cargarCategoria($categoria,$cid); //SERVIDOR
cargarCategoria($categoria,$conn); //LOCAL
?>
