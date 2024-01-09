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
            if($_SESSION["usuarios"]["rol"]=="cliente"){

                include "../views/pagcliente.php";
            }else{
                include "../views/pagadmin.php";
            }
            
            //var_dump($_SESSION["usuarios"]['rol']);
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
    public function añadirPelicula(){
        /*
        $existe=false;
        $error="";
        if(isset($_REQUEST["nombrePelicula"]) && isset($_REQUEST["argumento"]) && isset($_REQUEST["clasificacion"]) && isset($_REQUEST["año"])
            && isset($_REQUEST["duracion"]) && isset($_REQUEST["edad"]) && isset($_REQUEST["genero_id"]))
        {
        */
            include "../views/anadirPelicula.php";
            $usuario=new Usuario();
            $_SESSION['usuarios']=$usuario->añadir($_REQUEST['nombrePelicula'],$_REQUEST['argumento'],$_REQUEST['clasificacion'],$_REQUEST['ano'],$_REQUEST['duracion'],$_REQUEST['edad'],
            $_REQUEST['genero_id']);
            //$error="Pelicula creada";

        //}
    }
    public function eliminarPelicula()
    {
        include "../views/borrarPelicula.php";
        $usuario=new Usuario();
        $_SESSION['usuarios']=$usuario->eliminar($_REQUEST['nombrePelicula']);
        
            
    }
    public function editarPelicula()
    {
        include "../views/editarPelicula.php";
        $usuario=new Usuario();
        $_SESSION['usuarios']=$usuario->editar($_REQUEST['nombrePelicula'],$_REQUEST['argumento']);
    }
}
?>