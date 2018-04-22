<!doctype html>
<html class="no-js" lang=""> 
<head>
    
    <?php echo file_get_contents('rsc/head.html'); ?> 

    <title>SNK Gimnasios</title>

</head>
<body>

        <!-- Left Panel -->

    <?php echo file_get_contents('rsc/aside.html'); ?> 
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
       
      <?php echo file_get_contents('rsc/header.html'); ?> 

        <div class="breadcrumbs">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><i class="fa fa-dribbble" style="margin-right:10px"></i>Actividades Reservadas</h1>
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
                                      <th>Actividad</th>
                                      <th>Anular reserva</th>
                                    </td>
                                </thead>
                                    <tbody>
                                      <tr id="matarTitanes" style="display:none">
                                        <td>
                                            <h4 style="text-align:center;margin-bottom:10px;margin-top:10px">Matar titanes</h4>
                                          </td>
                                          <td>
                                            <div class="botones text-center" style="margin-bottom:10px;margin-top:10px">
                                                <button type="button" class="btn btn-danger" class="desinscribirse" data-actividad="matarTitanes" onclick="desinscribirse('matarTitanes')" ><i class="fa fa-times-circle" style="font-size:2em;margin:5px"></i></button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr id="entrenamiento" style="display:none">
                                        <td>
                                            <h4 style="text-align:center;margin-bottom:10px;margin-top:10px">Entrenamiento</h4>
                                          </td>
                                          <td>
                                            <div class="botones text-center" style="margin-bottom:10px;margin-top:10px">
                                                <button type="button" class="btn btn-danger" class="desinscribirse" onclick="desinscribirse('entrenamiento')"><i class="fa fa-times-circle" style="font-size:2em;margin:5px"></i></button>
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
      function desinscribirse(actividad){
        $('#'+actividad).hide();
        setCookie(actividad, false,1);
      }

        jQuery(document).ready(function() {
          jQuery('#bootstrap-data-table').DataTable();
          jQuery('#bootstrap-data-table_length').parent().hide();
          jQuery('#bootstrap-data-table_info').hide();
          if(getCookie('entrenamiento') == 'true'){
            $('#entrenamiento').show();
          }
          if(getCookie('matarTitanes') == 'true'){
            $('#matarTitanes').show();
          }
        } );
    </script>


</body>
</html>
