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
                    <h1>Rendimiento</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
                <div class="row">

                    <div class="col-md-12">
                      <div class="card">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-5"><h4>Asistencia</h4></div>
                                            <div class="col-2"></div>
                                            <div class="col-5"> <input type="text" class="form-control" id="usr" value="65%"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5"><h4>Demanda</h4></div>
                                            <div class="col-2"></div>
                                            <div class="col-5"><input type="text" class="form-control" id="usr" value="88%"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5"><h4>Satisfacción</h4></div>
                                            <div class="col-2"></div>
                                            <div class="col-5"><input type="text" class="form-control" id="usr" value="93%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    
    <?php echo file_get_contents('rsc/scripts.html'); ?> 

</body>
</html>
