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
                    <h1>Nueva Notificación</h1>
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
                                <label>Enviar a todos los miembros</label>
                                <div class="form-check-inline form-check">
                                    <label for="inline-radio1" class="form-check-label " style="margin-right:10px">
                                      <input type="radio" id="todosSi" name="todos" value="1" class="form-check-input">Sí
                                    </label>
                                    <label for="inline-radio2" class="form-check-label ">
                                      <input type="radio" id="todosNo" name="todos" value="0" class="form-check-input" checked="checked">No
                                    </label>
                              </div>
                            </div>
                            <div class="form-group">
                                <label>Destinatario</label></br>
                                <input type="text" class="form-control" id="destinatario"></p>
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
