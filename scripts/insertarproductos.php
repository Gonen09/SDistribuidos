<?php

require('conexion.php');

$categoria = $_GET['cat'];
//echo "<h3>La categoria es: ".$categoria."<h3>";

function cargarCategoria($categoria,$cid){

  $sql="Select * from Productos where nom_categoria =".$categoria;

  $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
  //print odbc_result_all($result,"border=1");

  while ($datos=odbc_fetch_row($result)){

    echo $datos['categoria']."<br>";
  }

}

function cargarProductos($idProducto,$nombre,$precio,$descripcion,$imagen){

  echo '
      <div class="item  col-xs-4 col-lg-4" id="'.$idProducto.'">
          <div class="thumbnail">
              <img class="group list-group-image" src="'.$imagen.'"/>
              <div class="caption">
                  <h4 class="group inner list-group-item-heading">Product title</h4>
                  <p class="group inner list-group-item-text">'.$descripcion.'</p>
                  <div class="row">
                      <div class="col-xs-12 col-md-6">
                          <p class="lead">'.$precio.'</p>
                      </div>
                      <div class="col-xs-12 col-md-6">
                          <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  ';
}

cargarCategoria($categoria,$cid);

?>
