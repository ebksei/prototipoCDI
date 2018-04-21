<!doctype html>
<html class="no-js" lang="">
<head>

    <?php echo file_get_contents('rsc/head.html'); ?>

    <title>Gimnasios SNK</title>

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
                    <h1>Menú</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="login-form">
                <div style="margin-bottom:20px">
                   <a  href="socios.php"><button type="button" class="btn btn-success btn-flat m-b-30 m-t-30"><i class="fa fa-dribbble" style="margin-right:20px"></i>Socios</button></a></br>
                </div>
                <div style="margin-bottom:20px">
                    <a  href="comerciales.php"><button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30"><i class="fa fa-briefcase" style="margin-right:20px"></i>Acciones</br>Comerciales</button></a></br>
                </div>
                <div style="margin-bottom:20px">
                    <a  href="tarifas.php"><button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30"><i class="fa fa-credit-card" style="margin-right:20px"></i>Tarifas</button></a></br>
                </div>
                <div style="margin-bottom:20px">
                    <a  href="productosAdmin.php"><button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30"><i class="fa fa-credit-card" style="margin-right:20px"></i>Productos</button></a></br>
                </div>
                <div style="margin-bottom:20px">
                    <a  href="actividadesAdmin.php"><button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30"><i class="fa fa-credit-card" style="margin-right:20px"></i>Actividades</button></a></br>
                </div>
                <div style="margin-bottom:20px">
                    <a  href="rendimiento.php"><button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30"><i class="fa fa-credit-card" style="margin-right:20px"></i>Rendimiento</button></a></br>
                </div>
            </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    
    <?php echo file_get_contents('rsc/scripts.html'); ?> 

</body>
</html>
