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
                    <h1><i class="fa fa-users" style="margin-right:20px"></i>Socios</h1>
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
                                            <th>Confirmar pago</th>
                                            <th>Reactivar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                            <p style="text-align:justify">Marco</p>
                                        </td>
                                        <td>
                                            <div class="botones text-center" style="margin-bottom:10px;margin-top:10px">
                                                <button type="button" class="btn btn-info pago"><i class="fa fa-eur" style="font-size:2em;margin:5px"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="botones text-center" style="margin-bottom:10px;margin-top:10px">

                                                <button type="button" class="btn btn-success reactivar"><i class="fa fa-thumbs-up" style="font-size:2em;margin:5px"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                      <tr>
                                        <td>
                                            <p style="text-align:justify">Arnold Schwarzenegger</p>
                                        </td>
                                        <td>
                                            <div class="botones text-center" style="margin-bottom:10px;margin-top:10px">
                                                <button type="button" class="btn" id="pago"><i class="fa fa-eur pagosDone" style="font-size:2em;margin:5px"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="botones text-center" style="margin-bottom:10px;margin-top:10px">

                                                <button type="button" class="btn"><i class="fa fa-thumbs-up reactivado" style="font-size:2em;margin:5px"></i></button>
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
        jQuery('.reactivar').click(function(){
            alert("Usuario reactivado");
            jQuery(this).removeClass('reactivar');
            jQuery(this).addClass('reactivado');
            jQuery(this).removeClass('btn-success');
        })
        jQuery('.reactivado').click(function(){
            alert("El usuario no está desactivado.");
        })

        jQuery('.pago').click(function(){
            alert("Pagos confirmados");
            jQuery(this).removeClass('pago');
            jQuery(this).addClass('pagosDone');
            jQuery(this).removeClass('btn-info');
        })
        jQuery('.pagosDone').click(function(){
            alert("El usuario tiene todos los pagos al día");
        })
    </script>

</body>
</html>
