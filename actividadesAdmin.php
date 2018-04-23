<!doctype html>
<html class="no-js" lang="">
<head>

    <?php echo file_get_contents('rsc/head.html'); ?>

    <title>SNK Gimnasios</title>

</head>
<body onload=ocultar()>

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
                    <h1><i class="fa fa-dribbble" style="margin-right:10px"></i>Actividades</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                              <div class="text-right">
                                    <a href="actividadForm.php">
                                            <button class="btn btn-success" style="min-width:50px;min-height:50px;margin:10px       ">
                                                    <i class="fa fa-plus" style="margin-right:15px"></i>Añadir
                                            </button>
                                    </a>
                              </div>
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Actividades</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                            <h4 style="text-align:center;margin-bottom:10px;margin-top:10px">Matar titanes</h4>
                                            <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <div class="botones text-right" style="font-size:2em">
                                                <a href="actividadTitanes.php"><button type="button" class="btn btn-warning" style="font-size:1em;margin:0px 10px 10px 10px"><i class="fa fa-pencil"></i></button></a>
                                                <button type="button" class="btn btn-danger borrar" style="font-size:1em;margin:0px 10px 10px 0px"><i class="fa fa-times-circle"></i></button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr id="trE">
                                        <td>
                                            <h4 style="text-align:center;margin-bottom:10px;margin-top:10px" id="actE"></h4>
                                            <p style="text-align:justify" id="descE"></p>
                                            <div class="botones text-right" style="font-size:2em">
                                                <button type="button" class="btn btn-warning" style="font-size:1em;margin:0px 10px 10px 10px"><i class="fa fa-pencil"></i></button>
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
        function ocultar(){
          
          document.getElementById("trE").style.display="none";
          /*document.getElementById('b2').style.visibility = 'hidden';
          document.getElementById('b3').style.visibility = 'hidden';*/
          var nueva = getCookie("actnueva");
          if (nueva==1){
            document.getElementById('trE').style.display="table-row";
            var nombre = getCookie("actEnombre");
            if(nombre==""){
              nombre="Sin definir";
            }

            document.getElementById("actE").innerHTML =nombre;
            var desc = getCookie("actEdescripcion");
            if(desc==""){
              desc="Sin definir";
            }

            document.getElementById("descE").innerHTML =desc;

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
