<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <?php echo file_get_contents('rsc/head.html'); ?>

  <title>Gimnasios SNK</title>

  <script>
    function IniciarUsuarios(){
      var us1 = "alumno@ump.es";
      var pass1 = 1234;
      var usAdmin = "root@upm.es";
      var passAdmin = "root";
    }
    function setCookie(cname,cvalue,exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays*24*60*60*1000));
      var expires = "expires=" + d.toGMTString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    function comprobarUsuario(){
      var usAdmin = "root@upm.es";
      var passAdmin = "root";
      var us = document.getElementById("mail").value;
      var pass = document.getElementById("pass").value;
      alert(123);
      if (us == usAdmin){
        if(pass == passAdmin){
          window.location = "menuAdmin.php";
        }
        else{ alert("Contraseña incorrecta"); }
      }
      else{

        window.location = "menuUsuario.php";

      }
    }



  </script>
</head>
<body class="bg-externo">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo" style="font-size:3em">
                    <a href="index.html">
                        Gimnasios SNK
                    </a>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>Correo</label>
                            <input id="mail" type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Constraseña</label>
                            <input id="pass" type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Recuerdame
                            </label>
                            <label class="pull-right">
                                <a href="page-forget.html">¿Contraseña olvidada?</a>
                            </label>

                        </div>
                        <button onclick="comprobarUsuario()" type="button" class="btn btn-success btn-flat m-b-30 m-t-30">Log in</button>

                        <div class="register-link m-t-15 text-center">
                            <p>¿Aun no eres miembro? <a href="registro.html"></br> Click aqui</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
