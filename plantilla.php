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
                    <h1>Título</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <!-- AQUÍ VA EL CONTENIDO -->
            

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    
    <?php echo file_get_contents('rsc/scripts.html'); ?> 

</body>
</html>
