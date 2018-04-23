<!doctype html>
<html class="no-js" lang="">
<head>

    <?php echo file_get_contents('rsc/head.html'); ?>

    <title>SNK - Título</title>
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
      function precio1(){
        var p1 = 25;
        setCookie("pago",p1,30);
        window.location = "http://localhost/prototipoCDI/pagar.php";
      }
      function precio2(){
        var p2 = 15;
        setCookie("pago",p2,30);
        window.location = "http://localhost/prototipoCDI/pagar.php";
      }
      function ocultar(){

        var x = document.getElementById("1");
        var p1= getCookie("pagado1");
        var p2= getCookie("pagado2");
        if (p1==1) {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
        var y = document.getElementById("2");
        if (p2==1) {
            y.style.display = "none";
        } else {
            y.style.display = "block";
        }
      }
    </script>
</head>
<body onload="ocultar()">

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
                    <h1>PAGOS PENDIENTES</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="card border border-secondary " id="1">
                <div class="card-header">
                    <strong class="card-title">Cuota mensual</strong>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 text-left">25€</div>
                            <div class="col-xs-6 col-md-6 text-right">Vence: 25/8/2018</div>
                        </div>
                        <div class="row">
                            <button onclick="precio1()">Pagar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border border-secondary"id="2">
                <div class="card-header">
                    <strong class="card-title">Actividad</strong>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 text-left">15€</div>
                            <div class="col-xs-6 col-md-6 text-right">Vence: 10/7/2018</div>
                        </div>
                        <div class="row">
                            <button  onclick="precio2()">Pagar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <?php echo file_get_contents('rsc/scripts.html'); ?>

</body>
</html>
