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
                    <h1>Producto</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
                <div class="row">

                    <div class="col-md-12">
                      <div class="card">
                            <div class="card-body">
                                    <div class="form-group">
                                          <label for="nombre" class="control-label mb-1">Nombre</label>
                                          <input id="nombre" name="nombre" type="text" class="form-control">
                                      </div>
                                      <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descripción</label></div>
                                        <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" class="form-control"></textarea></div>
                                      </div>
                                    <div class="form-group">
                                          <label for="nombre" class="control-label mb-1">Precio</label>
                                          <input id="nombre" name="nombre" type="text" placeholder="€" class="form-control">
                                      </div>
                                    <div class="form-group">
                                          <label for="nombre" class="control-label mb-1">Subir imagen</label>
                                          <input type="file" class="form-control">
                                      </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-success btn-sm" style="font-size:1.5em">
                                  <i class="fa fa-dot-circle-o"></i> Confirmar
                                </button>
                              </div>


                    </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    
    <?php echo file_get_contents('rsc/scripts.html'); ?> 

</body>
</html>
