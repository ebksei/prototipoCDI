<!doctype html>
<html class="no-js" lang="">
<head>

    <?php echo file_get_contents('rsc/head.html'); ?>

    <title>Gimnasios SNK</title>
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
          setCookie("nombre",nombre,30);
          var apellido = document.getElementById("apellido").value;
          setCookie("apellido",apellido,30);
          var mail = document.getElementById("email").value;
          setCookie("email",mail,30);
          var clave = document.getElementById("clave").value;
          setCookie("clave",clave,30);
          var direccion = document.getElementById("direccion").value;
          setCookie("direccion",direccion,30);
          var telefono = document.getElementById("tel").value;
          setCookie("tel",telefono,30);
          var cBan = document.getElementById("banco").value;
          setCookie("banco",cBan,30);
          //alert ("nombre =" +nombre+"\n correo = "+mail+"\n clave = "+clave+"\n direccion = "+direccion+"\n telefono = "+telefono+"\n cbanc = "+cBan);
          if(document.getElementById("ta1").checked){
            var ta=1;
          }else if(document.getElementById("ta2").checked){
            ta=2;
          }else if(document.getElementById("ta3").checked){
            ta = 3;
          }else if(document.getElementById("ta1").checked){
            ta = 4;
          }
          setCookie("ta",ta,30);
          if(document.getElementById("ho1").checked){
            var ho=1;
          }else if(document.getElementById("ho2").checked){
            ho=2;
          }else if(document.getElementById("ho3").checked){
            ho = 3;
          }
          setCookie("ho",ho,30);
          alert("Datos guardados");
      }
      function obtenerdatos(){
        var nombre = getCookie("nombre");
        if(nombre!=""){
          document.getElementById("nombre").value = nombre;
        }
        var apellido = getCookie("apellido");
        if(apellido!=""){
          document.getElementById("apellido").value = apellido;
        }


        var mail = getCookie("email");
        if(mail!=""){
          document.getElementById("email").value = mail;
        }
        var clave = getCookie("clave");
        if(clave!=""){
          document.getElementById("clave").value = clave;
        }

        var direccion = getCookie("direccion");
        if(direccion!=""){
          document.getElementById("direccion").value = direccion;
        }
        var telefono = getCookie("tel");
        if(telefono!=""){
          document.getElementById("tel").value = telefono;
        }

        var cBan = getCookie("banco");
        if(nombre!=""){
          document.getElementById("banco").value = cBan;
        }
        var ta = getCookie("ta");
        if(ta==1){
          document.getElementById("ta1").checked =true;
        } else if(ta==2){
          document.getElementById("ta2").checked =true;
        }
        else if(ta==3){
          document.getElementById("ta3").checked =true;
        }
        else if(ta==4){
          document.getElementById("ta4").checked =true;
        }
        var ho = getCookie("ho");
        if(ho==1){
          document.getElementById("ho1").checked =true;
        } else if(ho==2){
          document.getElementById("ho2").checked =true;
        }
        else if(ho==3){
          document.getElementById("ho3").checked =true;
        }

      }
      function comprobar(){
        var pas1 = document.getElementById("clave").value;
        var pas2 = document.getElementById("repPas").value;
        if (pas1!=pas2)alert("Las contraseñas no coinciden");
      }
  </script>
</head>
<body onload="obtenerdatos()">

        <!-- Left Panel -->

    <?php echo file_get_contents('rsc/aside.html'); ?>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->

      <?php echo file_get_contents('rsc/header.html'); ?>

      <div class="sufee-login d-flex align-content-center flex-wrap">
          <div class="container">
              <!-- <div class="login-content"> -->
                  <div class="login-form">
                    <div class="form-group">
                        <label>User Name</label>
                        <input id="nombre" class="form-control" placeholder="Nombre"  >
                    </div>
                    <div class="form-group">
                        <label>User sirname</label>
                        <input id="apellido" class="form-control" placeholder="Apellidos"  >
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input id="email" class="form-control" placeholder="Email" >
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Contraseña" id="clave">
                    </div>
                    <div class="form-group">
                        <label>Repeat</label>
                        <input type="password" class="form-control" placeholder="Password" id="repPas" onchange="comprobar()">
                    </div>
                    <div class="form-group">
                        <label>Direccion</label>
                        <input id="direccion" class="form-control" placeholder="Direccion" >
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="Phone" class="form-control" placeholder="Telefono" id="tel">
                    </div>
                    <div class="form-group">
                        <label>Cuanta Bancaria</label>
                        <input type="text" class="form-control" placeholder="Cuenta bancaria" id="banco">
                    </div>
                    <div class="form-group">
                      <h2>Selecciona tarifa</h2>
                      <div class="col-lg-3 col-sm-6 text-center mb-3">
                        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/100x100" alt="">
                        <h3>Tarifa Michoza
                        </h3>
                        <p>descripcion</p>
                        <p>precio:</p>
                          <div class="radio">
                            <label for="radio1" class="form-check-label ">
                              <input type="radio" id="ta1" name="ta1" value="option1" class="form-check-input">Michoza
                            </label>
                          </div>
                      </div>
                      <div class="col-lg-3 col-sm-6 text-center mb-3">
                        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/100x100" alt="">
                        <h3>Tarifa Mikasa
                        </h3>
                        <p>descripcion</p>
                        <p>precio:</p>
                        <div class="radio">
                          <label for="radio1" class="form-check-label ">
                            <input type="radio" id="ta2" name="ta2" value="option1" class="form-check-input">Mikasa
                          </label>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6 text-center mb-3">
                        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/100x100" alt="">
                        <h3>Tarifa Levi
                        </h3>
                        <p>descripcion</p>
                        <p>precio:</p>
                        <div class="radio">
                          <label for="radio1" class="form-check-label ">
                            <input type="radio" id="ta3" name="ta3" value="option1" class="form-check-input">Levi
                          </label>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6 text-center mb-3">
                        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/100x100" alt="">
                        <h3>Tarifa Titánica
                        </h3>
                        <p>descripcion</p>
                        <p>precio:</p>
                        <div class="radio">
                          <label for="radio1" class="form-check-label ">
                            <input type="radio" id="ta4" name="ta4" value="option1" class="form-check-input">Titánica
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <br><br>
                    </div>
                    <div class="form-group text-center">
                      <h2>Horario</h2>
                      <div class="col-lg-4 col-sm-4 text-center mb-4">
                          <div class="radio">
                            <label for="radio1" class="form-check-label ">
                              <input type="radio" id="ho1" name="hor1" value="option1" class="form-check-input">Mañana
                            </label>
                          </div>
                      </div>
                      <div class="col-lg-4 col-sm-4 text-center mb-4">
                          <div class="radio">
                            <label for="radio1" class="form-check-label ">
                              <input type="radio" id="ho2" name="hoe2" value="option1" class="form-check-input">Tarde
                            </label>
                          </div>
                      </div>
                      <div class="col-lg-4 col-sm-4 text-center mb-4">
                          <div class="radio">
                            <label for="radio1" class="form-check-label ">
                              <input type="radio" id="ho3" name="hor3" value="option1" class="form-check-input">Completo
                            </label>
                          </div>
                      </div>
                    </div>

                          <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" onclick="guardarDatos()">Guardar</button>
                         
                      </form>
                  </div>
              </div>
        <!--  </div>-->
      </div>


      <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/plugins.js"></script>
      <script src="assets/js/main.js"></script>
</body>
</html>
