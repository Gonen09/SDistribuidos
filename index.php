<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Pagina de prueba de productos para Sistemas Dristribuidos">
        <meta name="author" content="Gonzalo Santander">

        <title>SDFACTORY - Tu centro tecnológico</title>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/shop-item.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body onload="listaProductos('computacion')">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-pills nav-justified" role ="tablist" id="nav-principal">
                        <li><a href="index.php">Inicio</a></li>
                        <li data-toggle="modal" onclick="$('#myModal1').modal()"><a href="#">Contacto</a></li>
                        <li data-toggle="modal" onclick="$('#myModal2').modal()"><a href="#">Sobre nosotros</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- modal nav -->

        <!-- Modal -->
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Contacto</h4>
              </div>
              <div class="modal-body text-center">
                <img src="image/uls-logo.jpg" class="img-responsive center-block" id ="logo-uls"><br>
                <p>Universidad de la Serena<br> Departamento de Matematicas<br>
                   Avenida Cisternas Nº 1200<br> La Serena <br> Teléfono: 51 2 204102 / 51 2 204103</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary center-block" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sobre nosotros</h4>
              </div>
              <div class="modal-body text-center">
                <img src="image/comp-logo.jpg" class="img-responsive center-block" id ="logo-comp"><br>
                <p>Curso de sistemas dristibuidos<br> Ingenieria en Computación<br> Universidad de la Serena</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary center-block" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal producto -->

        <div class="modal fade" id="myModal3" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="vista-maximizada-titulo"></h4>
              </div>
              <div class="modal-body">
                <img class="img-responsive center-block" id="vista-maximizada-imagen" src=""/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary center-block" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Page Content -->
        <div class="container col-md-12" >
            <div class="row">
                <div class="col-md-2">
                    <img src="image/page-logo.png" class="img-responsive" id ="logo">
                    <ul id="categorias" class="nav nav-pills nav-stacked">
                        <li role="separator" class="divider"></li>
                        <div class="input-group">
                            <input type="text" id="busqueda" class="form-control" placeholder="Buscar" name="q">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="button"
                                onclick="buscarProducto()"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                        <li role="separator" class="divider"></li>
                        <li class="active" onclick="listaProductos('computacion')"><a data-toggle="pill" href="#">Computación</a></li>
                        <li onclick="listaProductos('electronica')"><a data-toggle="pill" href="#">Electrónica</a></li>
                        <li onclick="listaProductos('telefonia')"><a data-toggle="pill" href="#">Telefonía</a></li>
                    </ul>
                </div>
                <div class="col-md-10">
                    <div class="well well-sm">
                        <strong>Vista</strong>
                        <div class="btn-group">
                            <a href="#" id="list" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-th-list"> </span> Lista</a>
                            <a href="#" id="grid" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-th"></span> Grilla</a>
                        </div>
                    </div>
                    <div id="productos" class="row list-group">

                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->

        <div class="container col-md-12">
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12" >
                        <p class="text-center">Sistemas Distribuidos &copy; Universidad de La Serena 2016</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /.container -->

        <!-- jOther -->
        <script src="js/prefixfree.min.js"></script>
        <script src="js/index.js"></script>
        <script src="js/productos.js"></script>
        <!-- jQuery -->
        <script src='js/jquery.min.js'></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modal.js"></script>
    </body>
</html>
