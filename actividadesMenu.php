<!doctype html>
<html class="no-js" lang=""> 
<head>
    
    <?php echo file_get_contents('rsc/head.html'); ?> 

    <title>Gimnasios SNK</title>

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
                    <h1><i class="fa fa-dribbble" style="margin-right:10px"></i>Actividades</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="login-form">
                    <div style="margin-bottom:20px">
                       <a  href="actividadesDisponibles.php"><button type="button" class="btn btn-success btn-flat m-b-30 m-t-30">Disponibles</button></a></br>
                    </div>
                    <div style="margin-bottom:20px">
                        <a  href="actividadesReservadas.php"><button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Reservadas</button></a></br>
                    </div>
                </div>
            

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    
    <?php echo file_get_contents('rsc/scripts.html'); ?> 

</body>
</html>
