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

        <script>

          function listaProductos(categoria){

            //alert("Llamando desde:"+categoria);

            document.getElementById("productos").innerHTML="";

            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
              if (xhttp.readyState == 4 && xhttp.status == 200) {
               document.getElementById("productos").innerHTML = xhttp.responseText;
              }
            };
            xhttp.open("GET","scripts/insertarproductos.php?cat="+categoria,true);
            xhttp.send();
          }
        </script>
    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-pills nav-justified" role ="tablist" id="nav-principal">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Sobre nosotros</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role ="button">Sucursales  <b class="caret"></b></a>
                            <ul class="dropdown-menu" id="sub-menu">
                                <li>
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">La Serena</a>
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Coquimbo</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container col-md-12" >
            <div class="row">
                <div class="col-md-2">
                    <img src="image/logo.png" class="img-responsive" id ="logo">
                    <ul id="categorias" class="nav nav-pills nav-stacked">
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
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <script src='js/jquery.min.js'></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
                $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
                $('.dropdown-toggle').dropdown();
            });
        </script>
    </body>
</html>