<!doctype html>
<html class="no-js" lang="">
<head>

    <?php echo file_get_contents('rsc/head.html'); ?>

    <title>Gimnasios SNK</title>
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
      function comprobarNotificaciones(){
        var evento = getCookie("eventoNotificacion");
        var fecha = getCookie("fechaNotificacion");
        var dest = getCookie("destinatario");
        var x = document.getElementById("admin");
        x.style.display === "none";
        if (evento!=""){
          if (dest!=""){
            var ussr = getCookie("ussr");
            if (dest == ussr){
              alert ("Nueva notificacion");
                  x.style.display = "block";
                  document.getElementById("fecha").innerHTML =fecha;
                  document.getElementById("even").innerHTML =evento;
            }
          }else if (dest ==""){
              alert ("Nueva notificacion");
              x.style.display = "block";
              document.getElementById("fecha").innerHTML =fecha;
              document.getElementById("even").innerHTML =evento;
          }
        }
      }
    </script>
</head>
<body onload="comprobarNotificaciones()">

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
                    <h1>Notificaciones <button class="btn btn-danger" style="border-radius:50px">3</button></h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">

			<div class="card border border-success">
                <div class="card-header">
                    <strong class="card-title text-right">20/5/2018</strong>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="card border border-success">
                <div class="card-header">
                    <strong class="card-title text-right">1/5/2018</strong>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="card border border-success">
                <div class="card-header">
                    <strong class="card-title text-right">2/3/2018</strong>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="card border border-success" id="admin">
                <div class="card-header">
                    <strong class="card-title text-right" id="fecha"></strong>
                </div>
                <div class="card-body">
                    <p class="card-text" id="even"></p>
                </div>
            </div>


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <?php echo file_get_contents('rsc/scripts.html'); ?>

</body>
</html>
