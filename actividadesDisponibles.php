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
                    <h1>Actividades disponibles</h1>
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
                                    </th>
                                </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                            <h4 style="text-align:center;margin-bottom:10px;margin-top:10px">Matar titanes</h4>
                                            <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <div class="botones text-center" style="margin-bottom:10px;margin-top:10px">
                                                <button type="button" class="btn btn-success"><i class="fa fa-calendar-o"></i> Inscribirse</button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                            <h4 style="text-align:center;margin-bottom:10px;margin-top:10px">Entrenamiento</h4>
                                            <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <div class="botones text-center" style="margin-bottom:10px;margin-top:10px">
                                                <button type="button" class="btn btn-success"><i class="fa fa-calendar-o"></i> Inscribirse</button>
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
          jQuery('#bootstrap-data-table_length').parent().hide();
        } );
    </script>


</body>
</html>
