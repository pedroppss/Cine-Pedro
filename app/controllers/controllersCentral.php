<?php
    include "controllersPeliculas.php";
    $accion=$_REQUEST['ctl'] ?? 'default';
    switch ($accion) {
        case 'id=2':
            include "app/views/informacionPelicula.php";
           (new controllersPeliculas())->mostrar_fast_furious();
            break;
        case 'id=3':
            include "app/views/informacionPelicula.php";
           (new controllersPeliculas())->mostrar_air();
            break;
        case 'register':

            break;
        case 'inicio_2':
            include "app/views/inicio_2.php";
            break;
        default:
            include "app/views/inicio.php";
            //unset($_SESSION['peliculas']);
            break;
    }
?>