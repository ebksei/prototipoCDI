<!doctype html>
<html class="no-js" lang="">
<head>

    <?php echo file_get_contents('rsc/head.html'); ?>
  <link rel="stylesheet" href="assets/css/jquery-ui.css">

    <title>SNK - Título</title>

</head>
<body>

        <!-- Left Panel -->

    <?php echo file_get_contents('rsc/asideadmin.html'); ?>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->

      <?php echo file_get_contents('rsc/headeradmin.html'); ?>

        <div class="breadcrumbs">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><i class="fa fa-bell" style="margin-right:20px"></i>Nueva Notificación</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">
                            <div class="form-group">
                                <label>Fecha</label></br>
                                <input type="text" class="form-control" id="datepicker"></p>
                            </div>
                            <div class="form-group">
                              <label>Evento:</label>
                                <div class="form-check">
                                <div class="radio">
                                  <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="e1" name="radios" value="option1" class="check" selected>Evento 1
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="e2" name="radios" value="option2" class="check">Evento 2
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio3" class="form-check-label ">
                                    <input type="radio" id="e3" name="radios" value="option3" class="check">Evento 3
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                                <label>Enviar a todos los miembros</label>
                                <div class="form-check-inline form-check">
                                    <label for="todosSi" class="form-check-label " style="margin-right:10px">
                                      <input type="radio" id="todosSi" name="todos" value="1" class="form-check-input">Sí
                                    </label>
                                    <label for="todosNo" class="form-check-label ">
                                      <input type="radio" id="todosNo" name="todos" value="0" class="form-check-input" checked="checked">No
                                    </label>
                              </div>
                            </div>
                            <div class="form-group">
                                <label>Destinatario</label></br>
                                <input type="text" class="form-control" id="destinatario"></p>
                            </div>
                             <div class="text-center">
                              <button onclick="enviar()" type="button" class="btn btn-success btn-flat m-b-30 m-t-30">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <?php echo file_get_contents('rsc/scripts.html'); ?>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
      function enviar(){

          var evento;

          if($('#e1').is(':checked')){ evento = 'Evento 1';}
          else if($('#e2').is(':checked')){ evento = 'Evento 2';}
          else if($('#e3').is(':checked')){ evento = 'Evento 3';}
          else if($('#e4').is(':checked')){ evento = 'Evento 4';}

          var fecha = $('#datepicker').val();

          setCookie('eventoNotificacion',evento,30);
          setCookie('fechaNotificacion',fecha,30);

        if($('#todosNo').is(':checked')){
          var us = document.getElementById("destinatario").value;
          setCookie("destinatario", us, 30);
        }
        
        alert('Notificación enviada');
      }


      $('.form-check-input').click(function(){
        if($(this).val() == 1){
          $('#destinatario').attr('disabled', true);
        } else{
          $('#destinatario').attr('disabled', false);

        }
      $(document).ready(function() {
        $( "#datepicker" ).datepicker();
      } );
      });

  </script>
</body>
</html>
