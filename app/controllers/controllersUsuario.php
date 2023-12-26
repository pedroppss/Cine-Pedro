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
        include "../views/login.php";
        }else
        {
        include "../../index.php";
        }
    }
    public function registarUsuario()
    {
        include "../views/register.php";
        isset($_SESSION)?:session_start();
        $usuario=new Usuario();
        $_SESSION['usuarios']=$usuario->registar($_REQUEST['nombre'],$_REQUEST['apellidos'],$_REQUEST['password'],$_REQUEST['nif'],$_REQUEST['gmail']);
        if($_SESSION['usuarios']==false)
        {
            include "../views/register.php";
        }else
        {
            include "../views/login.php";
        }
        
    }
    public function recuperarPassword(){
        include "../views/recuperarPassword.php";
    }
}
?>