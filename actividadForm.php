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
                    <h1><i class="fa fa-dribbble" style="margin-right:10px"></i>Nueva Actividad</h1>
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
                                        <div class="col col-md-3"><label class=" form-control-label">Horario</label></div>
                                        <div class="col col-md-9">
                                          <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                              <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">Mañana
                                            </label>
                                            <label for="inline-radio2" class="form-check-label ">
                                              <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Tarde
                                            </label>
                                            <label for="inline-radio3" class="form-check-label ">
                                              <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Ambos    
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row form-group">
                                        <div class="col-3"><label for="text-input" class=" form-control-label">Fecha</label></div>
                                        <div class="col-3"><input type="text" id="dia" name="dia" placeholder="Día" class="form-control"></div>
                                        <div class="col-3"><input type="text" id="mes" name="mes" placeholder="Mes" class="form-control"></div>
                                        <div class="col-3"><input type="text" id="ano" name="ano" placeholder="Año" class="form-control"></div>
                                      </div>
                                      <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descripción</label></div>
                                        <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" class="form-control"></textarea></div>
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
