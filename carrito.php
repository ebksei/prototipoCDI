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
                    <h1>Carrito de Compra</h1>
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
                            <tr>
                              <td>Sasha la patata</td>
                              <td>8€</td>
                              <td class="text-center"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                          </tr>
                          <tr>
                              <td>Barritas titán</td>
                              <td>5€</td>
                              <td class="text-center"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                          </tr>
                          <tr>
                              <td>Cinturón de soldado</td>
                              <td>3€</td>
                              <td class="text-center"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                          </tr>
                          <tr>
                              <td style="font-weight:bolder">Total:</td>
                              <td style="font-weight:bolder" colspan="2">16€</td>
                          </tr>
                      </tbody>
                  </table>
                  <div class="text-center"><button class="btn btn-success">Pagar</button></div>


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    
    <?php echo file_get_contents('rsc/scripts.html'); ?> 

</body>
</html>
