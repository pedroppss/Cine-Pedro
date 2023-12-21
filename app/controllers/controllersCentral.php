<?php
    include "app/controllers/controllersUsuario.php";
    $accion=$_REQUEST['ctl'] ?? 'inicio';
    switch ($accion) {
        case 'inicio':
            # code...
            break;
        case 'login':
            
            break;
        case 'registro':

            break;
        default:
            # code...
            break;
    }
?>