<!doctype html>
<html class="no-js" lang=""> 
<head>
    
    <?php echo file_get_contents('rsc/head.html'); ?> 

    <title>SNK - Título</title>

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
                    <h1>Productos</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <th>
                                            <td>Descripción</td>
                                        </th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                            <div class="productoImg " style="background-image:url('')">Imagen</div>
                                        </td>
                                        <td>
                                            <h4>Insignia del gimnasio</h4>
                                            <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <div class="botones text-right">
                                                8€
                                                <button type="button" class="btn"><i class="fa fa-shopping-cart"></i></button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                            <div class="productoImg " style="background-image:url('')">Imagen</div>
                                        </td>
                                        <td>
                                            <h4>Barritas titán</h4>
                                            <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <div class="botones text-right">
                                                8€
                                                <button type="button" class="btn"><i class="fa fa-shopping-cart"></i></button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                            <div class="productoImg " style="background-image:url('')">Imagen</div>
                                        </td>
                                        <td>
                                            <h4>Shasha la patata</h4>
                                            <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <div class="botones text-right">
                                                8€
                                                <button type="button" class="btn"><i class="fa fa-shopping-cart"></i></button>
                                            </div>
                                        </td>
                                      </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    
    <?php echo file_get_contents('rsc/scripts.html'); ?> 
    <script type="text/javascript">
        jQuery(document).ready(function() {
          jQuery('#bootstrap-data-table').DataTable();
        } );
    </script>


</body>
</html>
