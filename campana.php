<!doctype html>
<html class="no-js" lang=""> 
<head>
    
    <?php echo file_get_contents('rsc/head.html'); ?> 

    <title>SNK Gimnasios</title>

</head>
<body>

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
                    <h1>Campaña</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                    <div class="card-body">
                      <div class="row form-group">
                        <div class="col col-md-12">
                          <label>Código</label>
                          <input id="codigo" class="form-control" placeholder="Código" >
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label" placeholder="Descripción">Descripción</label></div>
                        <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" class="form-control"></textarea></div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Targets</label></div>
                        <div class="col col-md-9">
                          <div class="form-check">
                            <div class="checkbox">
                              <label for="checkbox1" class="form-check-label ">
                                <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Anuncio
                              </label>
                            </div>
                            <div class="checkbox">
                              <label for="checkbox2" class="form-check-label ">
                                <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">Cartel
                              </label>
                            </div>
                            <div class="checkbox">
                              <label for="checkbox3" class="form-check-label ">
                                <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Notificación
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-3"><label for="text-input" class=" form-control-label">Duración</label></div>
                        <div class="col-3"><input type="number" id="dia" name="dia"  placeholder="Días" class="form-control"></div>
                        <div class="col-3"><label for="descuento" class=" form-control-label">Descuento</label></div>
                        <div class="col-3"><input type="text" id="descuento" name="descuento" placeholder="%" class="form-control"></div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Unidad</label></div>
                        <div class="col-12 col-md-9">
                          <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                            <option value="0">Selecciona</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-center">
                      <button type="submit" class="btn btn-success btn-sm" style="font-size:1.5em" onclick="guardarCampana()">
                        <i class="fa fa-dot-circle-o"></i> Confirmar
                      </button>
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
      function guardarCampana(){
        setCookie('campana', $('#codigo').val());
        alert('Campaña añadida');
      }
    </script>

</body>
</html>
