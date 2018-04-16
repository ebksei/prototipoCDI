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
                    <h1>PAGOS PENDIENTES</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="card border border-secondary">
                <div class="card-header">
                    <strong class="card-title">Cuota mensual</strong>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 text-left">25€</div>
                            <div class="col-xs-6 col-md-6 text-right">Vence: 25/8/2018</div>
                        </div>
                        <div class="row">
                            <a href="pagar.php"><button>Pagar</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border border-secondary">
                <div class="card-header">
                    <strong class="card-title">Actividad</strong>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 text-left">15€</div>
                            <div class="col-xs-6 col-md-6 text-right">Vence: 10/7/2018</div>
                        </div>
                        <div class="row">
                            <a href="pagar.php"><button>Pagar</button></a>
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
