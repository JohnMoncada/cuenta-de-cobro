<?php require "./inc/sesion_star.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
        <?php include "./inc/head.php";
                ?>
</head>
<body>  <!--cuerpo del proyecto-->
    <?php   
        if (!isset($_GET['vista']) || $_GET['vista']=="") { //isset es para saber si la variable esta  vacia
            $_GET['vista'] = "login";
        }
        // evaluamos el valor que tiene vista
        if(is_file("./vistas/".$_GET['vista'].".php") && $_GET['vista']!="login" && $_GET['vista']!="404")
        {
            include "./inc/navbar.php";
            include "./vistas/".$_GET['vista'].".php";
            include "./inc/scrip.php";
        }else{
            if($_GET['vista']=="login"){
                include "./vistas/login.php";  
            }else{
                include "./vistas/404.php"; 
            }
        }

       
    ?>
</body>
</html>
