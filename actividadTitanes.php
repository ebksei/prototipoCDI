<!doctype html>
<html class="no-js" lang="">
<head>

    <?php echo file_get_contents('rsc/head.html'); ?>

    <title>SNK Gimnasios</title>

</head>
<body onload="obtenerDatos()">

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
                    <h1><i class="fa fa-dribbble" style="margin-right:10px"></i>Editar Actividad</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
                <div class="row">

                    <div class="col-md-12">
                      <div class="card">
                            <div class="card-body">
                                    <div class="form-group">
                                          <label for="nombre" class="control-label mb-1">Nombre</label>
                                          <input id="nombre" name="nombre" type="text" class="form-control" value="Matar Titanes">
                                      </div>
                                      <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Horario</label></div>
                                        <div class="col col-md-9">
                                          <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                              <input type="radio" id="ra1" name="inline-radios" value="option1" class="form-check-input">Mañana
                                            </label>
                                            <label for="inline-radio2" class="form-check-label ">
                                              <input type="radio" id="ra2" name="inline-radios" value="option2" class="form-check-input">Tarde
                                            </label>
                                            <label for="inline-radio3" class="form-check-label ">
                                              <input type="radio" id="ra3" name="inline-radios" value="option3" class="form-check-input">Ambos
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row form-group">
                                        <div class="col-3"><label for="text-input" class=" form-control-label">Fecha</label></div>
                                        <div class="col-3"><input type="text" id="dia" name="dia" placeholder="Día" class="form-control"></div>
                                        <div class="col-3"><input type="text" id="mes" name="mes" placeholder="Mes" class="form-control"></div>
                                        <div class="col-3"><input type="text" id="ano" name="ano" placeholder="Año" class="form-control"></div>
                                      </div>
                                      <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descripción</label></div>
                                        <div class="col-12 col-md-9"><textarea name="textarea-input" id="descripcion" rows="9" class="form-control"></textarea></div>
                                      </div>
                            </div>
                            <div class="card-footer text-center">
                                <a href="actividadesAdmin.php"><button onclick="guardarDatos()" type="submit" class="btn btn-success btn-sm" style="font-size:1.5em">
                                  <i class="fa fa-dot-circle-o"></i> Confirmar
                                </button></a>
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
          setCookie("actTnombre",nombre,30);
          var dia = document.getElementById("dia").value;
          setCookie("actTdia",dia,30);
          var mes = document.getElementById("mes").value;
          setCookie("actTmes",mes,30);
          var ano = document.getElementById("ano").value;
          setCookie("actTano",ano,30);
          var descripcion = document.getElementById("descripcion").value;
          setCookie("actTdescripcion",descripcion,30);

          if(document.getElementById("ra1").checked){
            var ra=1;
          }else if(document.getElementById("ra2").checked){
            ra=2;
          }else if(document.getElementById("ra3").checked){
            ra = 3;
          }
          setCookie("raT",ra,30);

      }
      function obtenerDatos(){
        var nombre = getCookie("actTnombre");
        if(nombre==""){
          nombre = "Matar titanes";
        }
        document.getElementById("nombre").value = nombre;

        var descripcion = getCookie("actTdescripcion");
        if(descripcion==""){
          descripcion ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
        }
        document.getElementById("descripcion").value = descripcion;

        var dia = getCookie("actTdia");
        if(dia==""){
          dia=13;
        }
        document.getElementById("dia").value = dia;

        var mes = getCookie("actTmes");
        if(mes==""){
          mes= mayo;
        }
          document.getElementById("mes").value = mes;

        var ano = getCookie("actTano");
        if(ano==""){
          ano=2018;
        }
          document.getElementById("ano").value = ano;

        var ta = getCookie("raT");
        if(ta==1){
          document.getElementById("ra1").checked =true;
        } else if(ta==2){
          document.getElementById("ra2").checked =true;
        }
        else if(ta==3){
          document.getElementById("ra3").checked =true;
        }
        else {
          document.getElementById("ra3").checked =true;
        }
      }


    </script>
</body>
</html>
