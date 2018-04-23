<!doctype html>
<html class="no-js" lang="">
<head>

    <?php echo file_get_contents('rsc/head.html'); ?>

    <title>Gimnasios SNK</title>
    <script>
      function setCookie(cname,cvalue,exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
      }

      function getCookie(cname) {
          var name = cname + "=";
          var ca = document.cookie.split(';');
          for(var i = 0; i < ca.length; i++) {
              var c = ca[i];
              while (c.charAt(0) == ' ') {
                  c = c.substring(1);
              }
              if (c.indexOf(name) == 0) {
                  return c.substring(name.length, c.length);
              }
          }
          return "";
      }
      function guardarDatos(){
          var nombre = document.getElementById("nombre").value;
          setCookie("chozaNombre",nombre,30);
          var descripcion = document.getElementById("descripcion").value;
          setCookie("chozaDescripcion",descripcion,30);
          var precio = document.getElementById("precio").value;
          setCookie("chozaPrecio",precio,30);
          var suplemento = document.getElementById("suplemento").value;
          setCookie("chozaSuplemento",suplemento,30);
      }
      function obtenerdatos(){
        var nombre = getCookie("chozaNombre");
        if(nombre!=""){
          document.getElementById("nombre").value = nombre;
        }
        var descripcion = getCookie("chozaDescripcion");
        if(descripcion!=""){
          document.getElementById("descripcion").value = descripcion;
        }

        var precio = getCookie("chozaPrecio");
        if(precio!=""){
          document.getElementById("precio").value = precio;
        }
        var suplemento = getCookie("chozaSuplemento");
        if(suplemento!=""){
          document.getElementById("suplemento").value = suplemento;
        }

      }

  </script>
</head>
<body onload ="obtenerdatos()">

        <!-- Left Panel -->
    <?php echo file_get_contents('rsc/asideAdmin.html'); ?>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->

      <?php echo file_get_contents('rsc/headerAdmin.html'); ?>

        <div class="breadcrumbs">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Tarifa Michoza</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
          <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                        <div class ="form-group">
                          <img class="rounded-circle img-fluid d-block mx-auto" src="images/mikasaKawai.jpg" alt="">
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input id="nombre" class="form-control" placeholder="Nombre Tarifa" value="Michoza" >
                      </div>
                      <div class="form-group">
                          <label>Descripcion</label>
                          <textarea rows="5" id="descripcion" class="form-control" >La tarifa perfecta para los soldados ahorradores
                          </textarea>
                      </div>
                      <div class="form-group">
                          <label>Precio General</label>
                          <input id="precio" class="form-control" placeholder="29€ "  >
                      </div>
                      <div class="form-group">
                          <label>Suplemento Horario</label>
                          <input id="suplemento" class="form-control" placeholder="10€ "  >
                      </div>
                            <div class="text-center">
                              <a href="tarifas.php"><button onclick="guardarDatos()" type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Guardar Cambios</button></a>
                            </div>
                    </div>
                  </div>
                </div>
              </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php echo file_get_contents('rsc/scripts.html'); ?>

</body>
</html>
