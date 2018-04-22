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
                    <h1><i class="fa fa-shopping-cart" style="margin-right:20px"></i>Carrito de Compra</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">

             <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Artículo</th>
                                  <th scope="col">Precio</th>
                                  <th scope="col">Eliminar</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr id="vacio">
                              <td>Carrito vacío</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr id="insignia" style="display:none">
                              <td>Insignia del gimnasio</td>
                              <td>8€</td>
                              <td class="text-center"><button class="btn btn-danger" style="font-size:1.5em;margin:5px" onclick="eliminarInsignia()"><i class="fa fa-trash-o"></i></button></td>
                          </tr>
                          <tr>
                              <td style="font-weight:bolder">Total:</td>
                              <td style="font-weight:bolder" colspan="2" id="precio">0€</td>
                          </tr>
                      </tbody>
                  </table>
                  <div class="text-center" id="pagar" style="display:none"><button class="btn btn-success">Pagar</button></div>


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
    function eliminarInsignia(){
      setCookie('insignia',false,1);
      $('#vacio').show();
      $('#insignia').hide();
      $('#pagar').hide();
      $('#precio').html('0€');
    }

    $(document).ready(function(){
      if(getCookie('insignia') == "true"){
        $('#vacio').hide();
        $('#insignia').show();
        $('#pagar').show();
        $('#precio').html('8€');
      } 
    })
    </script>

</body>
</html>
