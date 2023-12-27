
<?php
    
    $accion=$_REQUEST['ctl'] ?? 'default';
    switch ($accion) {
        case 'login':
           
            break;
        case 'register':

            break;
        default:
            include "app/views/inicio.php";
            break;
    }
?>