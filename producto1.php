<!doctype html>
<html class="no-js" lang="">
<head>

    <?php echo file_get_contents('rsc/head.html'); ?>

    <title>Gimnasios SNK</title>
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
                    <h1><i class="fa fa-briefcase" style="margin-right:20px"></i>Insignia del gimnasio</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
          <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input id="nombre" class="form-control" placeholder="Nombre Producto" value="Insignia del Gimnasio" >
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <textarea rows="5" id="descripcion" class="form-control" >Obtén la Insignia del gimnasio SNK para lucirla delante de tus amigos
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Precio </label>
                            <input id="precio" class="form-control" placeholder="8€ "  >
                        </div>
                        <div class="text-center">
                          <a href="productosAdmin.php"><button onclick="guardarDatos()" type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Guardar Cambios</button></a>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php echo file_get_contents('rsc/scripts.html'); ?>
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
          setCookie("InsNombre",nombre,30);
          var descripcion = document.getElementById("descripcion").value;
          setCookie("insDescripcion",descripcion,30);
          var precio = document.getElementById("precio").value;
          setCookie("InsPrecio",precio,30);

      }
      function obtenerdatos(){
        var nombre = getCookie("InsNombre");
        if(nombre!=""){
          document.getElementById("nombre").value = nombre;
        }
        var descripcion = getCookie("InsDescripcion");
        if(descripcion!=""){
          document.getElementById("descripcion").value = descripcion;
        }

        var precio = getCookie("InsPrecio");
        if(precio!=""){
          document.getElementById("precio").value = precio;
        }

      }

  </script>

</body>
</html>
