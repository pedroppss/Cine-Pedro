<?php
    include "controllersPeliculas.php";
    $accion=$_REQUEST['ctl'] ?? 'default';
    switch ($accion) {
        case 'id':
            include "app/views/informacionPelicula.php";
           //(new controllersPeliculas())->mostrar();
            break;
        case 'register':

            break;
        case 'inicio_2':
            include "app/views/inicio_2.php";
            break;
        default:
            include "app/views/inicio.php";
            break;
    }
?>