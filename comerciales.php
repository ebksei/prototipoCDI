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

            <div class="login-form">
                <div style="margin-bottom:20px">
                   <a  href="campana.php"><button type="button" class="btn btn-success btn-flat m-b-30 m-t-30"><i class="fa fa-dribbble" style="margin-right:20px"></i>Campañas</button></a></br>
                </div>
                <div style="margin-bottom:20px">
                    <a  href="notificacionesAdmin.php"><button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30"><i class="fa fa-briefcase" style="margin-right:20px"></i>Notificaciones</button></a></br>
                </div>
            </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    
    <?php echo file_get_contents('rsc/scripts.html'); ?> 

</body>
</html>
