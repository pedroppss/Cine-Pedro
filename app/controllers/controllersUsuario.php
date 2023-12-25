<?php
class controllersUsuario{
    public function login()
    {
        include "../views/login.php";
    }
    public function registarUsuario()
    {
        include "../views/register.php";
    }
    public function recuperarPassword(){
        include "../views/recuperarPassword.php";
    }
}
?>