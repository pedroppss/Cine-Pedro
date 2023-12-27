<?php
include "../models/usuario.php";
class controllersUsuario{
    public function login()
    {
        isset($_SESSION)?:session_start();
        $usuario=new Usuario();
        $_SESSION['usuarios']=$usuario->login($_REQUEST['gmail'],$_REQUEST['password']);
        if($_SESSION['usuarios']==false)
        {
            //var_dump('no conectado');
            include "../views/login_register_header.php";
            include "../views/login.php";
        }else
        {
            //var_dump("conectado");
            include "../views/login_register2.php";
        }
    }
    public function registarUsuario()
    {
        include "../views/login_register_header.php";
        include "../views/register.php";
        $usuario=new Usuario();
        $_SESSION['usuarios']=$usuario->registar($_REQUEST['nombre'],$_REQUEST['apellidos'],$_REQUEST['password'],$_REQUEST['nif'],$_REQUEST['gmail']);
    }
    public function logout(){
        session_destroy();
        include "../views/login_register_header.php";
        include "../views/login.php";
    }
    public function recuperarPassword(){
        include "../views/recuperarPassword.php";
    }
}
?>