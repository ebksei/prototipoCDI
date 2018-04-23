<!doctype html>
<html class="no-js" lang="">
<head>

    <?php echo file_get_contents('rsc/head.html'); ?>

    <title>SNK - Título</title>
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
      function setCookie(cname,cvalue,exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
      }
      function obtenerPrecio(){

        var p1 = getCookie("pago");
        document.getElementById("payment-button-amount").innerHTML ="Pagar "+p1+ "€";
        document.getElementById("cc-pament").value = p1 +"€";
      }
      function reenviar(){
        window.location = "http://localhost/prototipoCDI/pagos.php";
        alert ("Pago realizado");
        var p1 = getCookie("pago");
        if (p1==25){
          var pago= 1;
          setCookie("pagado1",pago,30);
        }else{
          pago = 1;
          setCookie("pagado2",pago,30);
        }

      }
    </script>
</head>
<body onload="obtenerPrecio()">

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
                    <h1>Introduzca tarjeta</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">

          <div id="pay-invoice">
              <div class="card-body">
                  <div class="card-title">
                      <h3 class="text-center">Metodo de pago</h3>
                  </div>
                  <hr>
                  <form action="" method="post" novalidate="novalidate">
                      <div class="form-group text-center">
                          <ul class="list-inline">
                              <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-2x"></i></li>
                              <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                              <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                              <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
                          </ul>
                      </div>
                      <div class="form-group">
                          <label for="cc-payment" class="control-label mb-1">Cantidad</label>
                          <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false">
                      </div>
                      <div class="form-group has-success">
                          <label for="cc-name" class="control-label mb-1">Titular</label>
                          <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                          <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                      </div>
                      <div class="form-group">
                          <label for="cc-number" class="control-label mb-1">Numero de Tarjeta</label>
                          <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                          <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                      </div>
                      <div class="row">
                          <div class="col-6">
                              <div class="form-group">
                                  <label for="cc-exp" class="control-label mb-1">Caducidad</label>
                                  <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY" autocomplete="cc-exp">
                                  <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                              </div>
                          </div>
                          <div class="col-6">
                              <label for="x_card_code" class="control-label mb-1">CVV</label>
                              <div class="input-group">
                                  <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                  <div class="input-group-addon">
                                      <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                                      data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                      data-trigger="hover"></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div>
                          <a href="pagos.php"><button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" onclick="reenviar()">
                              <i class="fa fa-lock fa-lg"></i>&nbsp;
                              <span id="payment-button-amount"></span>
                          </button></a>
                      </div>
                  </form>
              </div>
          </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <?php echo file_get_contents('rsc/scripts.html'); ?>

</body>
</html>
