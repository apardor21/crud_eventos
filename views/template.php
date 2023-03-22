<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Material Dark</title>
    
     <!-- Normalize CSS -->
    <link rel="stylesheet" href="dist/css/normalize.css">
    
     <!-- Materialize CSS -->
    <link rel="stylesheet" href="dist/css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="dist/css/material-design-iconic-font.min.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
    <link rel="stylesheet" href="dist/css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="dist/css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
    <link rel="stylesheet" href="dist/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!-- Nav Lateral -->
    <?php include('layout/navbar_lateral.php'); 

    ?>

    <!-- Page content -->
    <section class="ContentPage full-width">
        <!-- Nav Info -->
        <?php include('layout/header.php') ?>
          

        <!-- Notifications area -->
      
        <?php include('layout/notificaciones.php') ?>
        
        <!-- Your code here -->
            <?php 
                echo '<div class="content-wrapper">';
        
                include ('layout/content.php');
                
            echo '</div>';
            ?>
            
        <!--end Your code here -->
        
        <!-- Footer -->
        <?php include('layout/footer.php') ?>
            
    <!-- Sweet Alert JS -->
    <script src="dist/js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
    <script src="dist/js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
    <script src="dist/js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
    <script src="dist/js/main.js"></script>
    <script>
         function cargarContenido(contenedor,contenido){
        $("."+contenedor).load(contenido);
      }
    </script>
</body>
</html>