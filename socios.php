<!doctype html>
<html class="no-js" lang=""> 
<head>
    
    <?php echo file_get_contents('rsc/head.html'); ?> 

    <title>SNK Gimnasios</title>

</head>
<body>

        <!-- Left Panel -->

    <?php echo file_get_contents('rsc/asideAdmin.html'); ?> 
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
       
      <?php echo file_get_contents('rsc/headerAdmin.html'); ?> 

        <div class="breadcrumbs">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Título</h1>
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
                                        <tr>
                                            <th>Socio</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                            <p style="text-align:justify">Marco</p>
                                        </td>
                                        <td>
                                            <div class="botones text-center" style="margin-bottom:10px;margin-top:10px">
                                                <button type="button" class="btn btn-danger"><i class="fa fa-times-circle" style="font-size:2em;margin:5px"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fa fa-times-circle" style="font-size:2em;margin:5px"></i></button>
                                            </div>
                                        </td>
                                      <tr>
                                        <td>
                                            <p style="text-align:justify">Arnold Schwarzenegger</p>
                                        </td>
                                        <td>
                                            <div class="botones text-center" style="margin-bottom:10px;margin-top:10px">
                                                <button type="button" class="btn btn-danger"><i class="fa fa-times-circle" style="font-size:2em;margin:5px"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fa fa-times-circle" style="font-size:2em;margin:5px"></i></button>
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
