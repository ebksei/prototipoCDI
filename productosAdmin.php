<!doctype html>
<html class="no-js" lang="">
<head>

    <?php echo file_get_contents('rsc/head.html'); ?>

    <title>SNK - Título</title>

</head>
<body onload="ocultar()">

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
                    <h1><i class="fa fa-briefcase" style="margin-right:20px"></i>Productos</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                              <div class="text-right">
                                    <a href="carrito.php">
                                            <a href="productoExtra.php"><button class="btn btn-success" style="min-width:50px;min-height:50px;margin:10px       ">
                                                    <i class="fa fa-plus" style="margin-right:15px"></i>Añadir
                                            </button></a>
                                    </a>
                              </div>
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Descripción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                            <div class="productoImg " style="background-image:url('images/insignia.jpg');background-size:contain;background-position:center;background-repeat:no-repeat"></div>
                                        </td>
                                        <td>
                                            <h4 id=insNombre>Insignia del gimnasio</h4>
                                            <p id=insDescripcion style="text-align:justify">Obtén la Insignia del gimnasio SNK para lucirla delante de tus amigos</p>
                                            <div class="botones text-right" style="font-size:2em">
                                                8€
                                                <a href="producto1.php"><button type="button" class="btn btn-warning" style="font-size:1em;margin:0px 10px 10px 10px"><i class="fa fa-pencil"></i></button></a>
                                                <button type="button" class="btn btn-danger borrar" style="font-size:1em;margin:0px 10px 10px 0px"><i class="fa fa-times-circle"></i></button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr id="trE">
                                        <td>
                                            <div class="productoImg " style="background-image:url('')">Imagen</div>
                                        </td>
                                        <td>
                                            <h4 id="nombreExtra"></h4>
                                            <p id="descripcionExtra" style="text-align:justify"></p>
                                            <div class="botones text-right" style="font-size:2em">
                                                <p id="precioExtra"></p>
                                                <a href="producto1.php"><button type="button" class="btn btn-warning" style="font-size:1em;margin:0px 10px 10px 10px"><i class="fa fa-pencil"></i></button></a>
                                                <button type="button" class="btn btn-danger borrar" style="font-size:1em;margin:0px 10px 10px 0px"><i class="fa fa-times-circle"></i></button>
                                            </div>
                                        </td>
                                      </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <?php echo file_get_contents('rsc/scripts.html'); ?>
    <script type="text/javascript">
        jQuery(document).ready(function() {
          jQuery('#bootstrap-data-table').DataTable();
          jQuery('#bootstrap-data-table_length').parent().hide();
          jQuery('#bootstrap-data-table_info').hide();
        } );
        
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
      function obtenerdatos(){
        var nombre = getCookie("InsNombre");
        if(nombre!=""){
          document.getElementById("InsNombre").innerHTML = nombre;
        }

        var descripcion = getCookie("InsDescripcion");
        if(descripcion!=""){
          document.getElementById("insDescripcion").innerHTML = descripcion;
        }
      }
      function ocultar(){

        document.getElementById("trE").style.display="none";
        /*document.getElementById('b2').style.visibility = 'hidden';
        document.getElementById('b3').style.visibility = 'hidden';*/
        var nueva = getCookie("prod");
        var x = document.getElementById("extra");
        if (nueva==1){
          document.getElementById('trE').style.display="block";
          var nombre = getCookie("proExNombre");
          document.getElementById("nombreExtra").innerHTML =nombre;
          var desc = getCookie("proExDescripcion");
          document.getElementById("DescripcionExtra").innerHTML =desc;
          var precio = getCookie("proExPrecio");
          document.getElementById("PrecioExtra").innerHTML =precio;
        }
      }

      $(document).ready(function(){
        $('.borrar').click(function(){
            $(this).parent().parent().parent().remove();

        });
      });
    </script>


</body>
</html>
