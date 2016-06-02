function isEmpty(str) {
  return (!str || 0 === str.length);
}

function listaProductos(categoria){

    //alert("Llamando desde:"+categoria);

    document.getElementById("productos").innerHTML="";

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
       document.getElementById("productos").innerHTML = xhttp.responseText;
      }
    };
    xhttp.open("GET","scripts/cargarCategoria.php?cat="+categoria,true);
    xhttp.send();
}

function buscarProducto(){

    var busqueda = document.getElementById("busqueda").value

    if (isEmpty(busqueda)){
      alert("Ingrese parametros para la busqueda");
    }else{
      //alert("Buscar: "+busqueda);
      document.getElementById("productos").innerHTML="";

      var xhttp = new XMLHttpRequest();

      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
         document.getElementById("productos").innerHTML = xhttp.responseText;
        }
      };
      xhttp.open("GET","scripts/cargarProducto.php?pro="+busqueda,true);
      xhttp.send();
    }
}

function zoom(imagen,nombre){

  document.getElementById('vista-maximizada-imagen').src = imagen;
  document.getElementById('vista-maximizada-titulo').innerHTML = nombre;
  $('#myModal3').modal();
}
