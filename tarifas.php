<!doctype html>
<html class="no-js" lang="">
<head>

    <?php echo file_get_contents('rsc/head.html'); ?>

    <title>SNK Gimnasios</title>
    <script>
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
        function ocultar(){
          var nueva = getCookie("nueva");
          var x = document.getElementById("extra");
          if (nueva==1){
            document.getElementById('b1').style.visibility = 'hidden';
            document.getElementById('b2').style.visibility = 'visible';
            document.getElementById('b3').style.visibility = 'visible';
            var nombre = getCookie("nuevaNombre");
            document.getElementById("nuevaNombre").innerHTML =nombre;
          }
        }
    </script>
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
                    <h1>Tarifas</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tarifas</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr id= titan>
                                        <td>
                                            <p style="text-align:justify">Tarifa Titán</p>
                                        </td>
                                        <td>
                                            <div class="botones text-center" style="margin-bottom:10px;margin-top:10px">
                                                <a href="tarifaTitan.php"><button type="button" class="btn btn-warning" style="font-size:2em;margin:0px 10px 10px 10px"><i class="fa fa-pencil"></i></button><a>
                                                <button type="button" class="btn btn-danger" style="font-size:2em;margin:0px 10px 10px 0px"><i class="fa fa-times-circle"></i></button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr >
                                        <td>
                                            <p style="text-align:justify">Tarifa Michoza</p>
                                        </td>
                                        <td>
                                            <div class="botones text-center" style="margin-bottom:10px;margin-top:10px">
                                                <a href="tarifaMichoza.php"><button type="button" class="btn btn-warning" style="font-size:2em;margin:0px 10px 10px 10px"><i class="fa fa-pencil"></i></button><a>
                                                <button type="button" class="btn btn-danger" style="font-size:2em;margin:0px 10px 10px 0px"><i class="fa fa-times-circle"></i></button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                            <p style="text-align:justify">Tarifa Micasa</p>
                                        </td>
                                        <td>
                                            <div class="botones text-center" style="margin-bottom:10px;margin-top:10px">
                                                <a href="tarifaMicasa.php"><button type="button" class="btn btn-warning" style="font-size:2em;margin:0px 10px 10px 10px"><i class="fa fa-pencil"></i></button><a>
                                                <button type="button" class="btn btn-danger" style="font-size:2em;margin:0px 10px 10px 0px"><i class="fa fa-times-circle"></i></button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                            <p style="text-align:justify">Tarifa Levi</p>
                                        </td>
                                        <td>
                                            <div class="botones text-center" style="margin-bottom:10px;margin-top:10px">
                                                <a href="tarifaLevi.php"><button type="button" class="btn btn-warning" style="font-size:2em;margin:0px 10px 10px 10px"><i class="fa fa-pencil"></i></button><a>
                                                <button type="button" class="btn btn-danger" style="font-size:2em;margin:0px 10px 10px 0px"><i class="fa fa-times-circle"></i></button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                            <p id="nuevaNombre" style="text-align:justify">Añadir Tarifa</p>
                                        </td>
                                        <td>
                                            <div class="botones text-center" style="margin-bottom:10px;margin-top:10px">
                                                <a href="tarifaExtra.php"><button id="b1" type="button" class="btn btn-success" style="font-size:2em;margin:0px 10px 10px 10px"><i class="fa fa-plus-square-o"></i></button><a>
                                                  <a href="tarifaExtra.php"><button id="b2" type="button" class="btn btn-warning" style="font-size:2em;margin:0px 10px 10px 10px"><i class="fa fa-pencil"></i></button><a>
                                                  <button id="b3" type="button" class="btn btn-danger" style="font-size:2em;margin:0px 10px 10px 0px"><i class="fa fa-times-circle"></i></button>
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
        } );
    </script>

</body>
</html>
