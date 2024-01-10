<?php
    include "../controllers/controllersUsuario.php";
    
    
    $accion=$_REQUEST['ctl'] ?? 'login';
    switch ($accion) {
        case 'login':
            (new controllersUsuario())->login();
            break;
        case 'register':
            (new controllersUsuario())->registarUsuario();
            break;
        case 'logout':
            (new controllersUsuario())->logout();
            break;
        case 'añadir':
            (new controllersUsuario())->añadirPelicula();
            break;
        case 'borrar':
            (new controllersUsuario())->eliminarPelicula();
            break;
        case 'editar':
            (new controllersUsuario())->editarPelicula();
            break;
        case 'recuperarPassword':
            (new controllersUsuario())->recuperarPassword();
        default:
            break;
    }
?>