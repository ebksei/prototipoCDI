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
                    <h1>Perfil</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">Nombre</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Apellidos</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa">@</i></div>
                                        <input class="form-control" type="mail">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Horario</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                       <select data-placeholder="Elige un horario..." class="form-control selectHorario" tabindex="1">
                                            <option value=""></option>
                                            <option value="manana">Mañana</option>
                                            <option value="tarde">Tarde</option>
                                            <option value="completo">Jornada completa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Dirección</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                        <input class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Teléfono</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" type="number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Tarifa</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                       <select data-placeholder="Elige una tarifa..." class="form-control selectTarifa" tabindex="1">
                                            <option value=""></option>
                                            <option value="manana">T1</option>
                                            <option value="tarde">T2</option>
                                            <option value="completo">T3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Contraseña</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Repetir contraseña</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-success">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    
    <?php echo file_get_contents('rsc/scripts.html'); ?> 
        <script>
        jQuery(document).ready(function() {
            jQuery(".selectTarifa").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".selectHorario").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>

</body>
</html>
