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
                    <h1>Actividades Reservadas</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">

             <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Actividad</th>
                                  <th scope="col">Cancelar</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Matar titanes</td>
                              <td class="text-center"><button class="btn btn-danger"><i class="fa fa-times-circle"></i></button></td>
                          </tr>
                          <tr>
                              <td>Destrozar la cancha</td>
                              <td class="text-center"><button class="btn btn-danger"><i class="fa fa-times-circle"></i></button></td>
                          </tr>
                          <tr>
                              <td>Entrenamiento</td>
                              <td class="text-center"><button class="btn btn-danger"><i class="fa fa-times-circle"></i></button></td>
                          </tr>
                      </tbody>
                  </table>


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    
    <?php echo file_get_contents('rsc/scripts.html'); ?> 

</body>
</html>
