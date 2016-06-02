<?php

function cargarProductos($idProducto,$nombre,$precio,$descripcion,$imagen){

  echo '
      <div class="item  col-xs-4 col-lg-4" id="'.$idProducto.'">
          <div class="thumbnail">
                <img  data-toggle="modal" onclick="zoom(\''.$imagen.'\',\''.$nombre.'\')" class="group list-group-image img-responsive" id="vista-previa" src="'.$imagen.'"/>
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
?>
