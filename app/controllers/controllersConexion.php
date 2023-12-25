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
        case 'recuperarPassword':
            (new controllersUsuario())->recuperarPassword();
        default:
            break;
    }
?>