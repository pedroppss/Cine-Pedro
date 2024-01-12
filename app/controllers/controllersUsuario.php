<?php
include "../models/usuario.php";
class controllersUsuario{
    public function login()
    {
        $encontrado=false;
        $error="";
        isset($_SESSION)?:session_start();
       
        if(empty($_REQUEST['gmail']) && empty($_REQUEST['password']))
        {
            
            include "../views/login_register_header.php";
            include "../views/login.php";
            $error= "Debes introducir el email y la contraseña que son obligatorios";
            return;
        }

        $usuario=new Usuario();
        $_SESSION['usuarios']=$usuario->login($_REQUEST['gmail'],$_REQUEST['password']);

        if($_SESSION['usuarios']==false)
            {
                //var_dump('no conectado');
                
                include "../views/login_register_header.php";
                include "../views/login.php";
            }else
            {
                $encontrado=true;
                if($_SESSION["usuarios"]["rol"]=="cliente"){

                    include "../views/pagcliente.php";
                }else{
                    include "../views/pagadmin.php";
                    //var_dump($_SESSION["usuarios"]);
                    //var_dump($_SESSION["usuarios"]['avatar']);
                }
            
            }   
        
    }
    public function registarUsuario()
    {
        include "../views/login_register_header.php";
        include "../views/register.php";
        $usuario=new Usuario();
        if(!isset($_REQUEST['nombre']) || !isset($_REQUEST['apellidos']) || !isset($_REQUEST['password']) || !isset($_REQUEST['nif']) || !isset($_REQUEST['gmail']))
        {
            echo "Todos los campos debe ser obligatorios";

        }else{
            
        $_SESSION['usuarios']=$usuario->registar($_REQUEST['nombre'],$_REQUEST['apellidos'],$_REQUEST['password'],$_REQUEST['nif'],$_REQUEST['gmail']);
        //ControllerCorreo::enviarCorreo("pedroentornocliente@gmail.com",$_REQUEST['gmail']);
        }
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
            include "../../admin/html/CrearPelicula.php";
            $usuario=new Usuario();
            if(!empty($_REQUEST['nombrePelicula']) && !empty($_REQUEST['argumento']) && !empty($_REQUEST['clasificacion']) && !empty($_REQUEST['ano']) && !empty($_REQUEST['duracion']) && !empty($_REQUEST['edad'])
            && !empty($_REQUEST['genero_id']))
            {
                $_SESSION['usuarios']=$usuario->añadir($_REQUEST['nombrePelicula'],$_REQUEST['argumento'],$_REQUEST['clasificacion'],$_REQUEST['ano'],$_REQUEST['duracion'],$_REQUEST['edad'],
                $_REQUEST['genero_id']);
            }else{
                echo "debes introducir todos los campos que son obligatorios";
            }
    }
    public function eliminarPelicula()
    {
        include "../../admin/html/borrarPelicula.php";
        $usuario=new Usuario();
        if(!empty($_REQUEST['nombrePelicula']))
        {
            $_SESSION['pelicula']=$usuario->eliminar($_REQUEST['nombrePelicula']);     
            echo "Se ha borrado la pelicula correctamente";

        }else{
            echo "No se ha borrado la pelicula";
        }
               
    }
    public function eliminarUsuario()
    {
        include "../../admin/html/borrarUsuario.php";
        $usuario=new Usuario();
        if(!empty($_REQUEST['nombreUsuario']))
        {
            $usuario->eliminarusuario($_REQUEST['nombreUsuario']);     
            echo "Se ha borrado el usuario correctamente";

        }else{
            echo "No se ha borrado el usuario";
        }
    }
    public function editarPelicula()
    {
        include "../../admin/html/editarPelicula.php";
        $usuario=new Usuario();
        if(!empty($_REQUEST['nombrePelicula']) && !empty($_REQUEST['argumento']) && !empty($_REQUEST['clasificacion']) && !empty($_REQUEST['ano']) && !empty($_REQUEST['duracion']) && !empty($_REQUEST['edad'])
            && !empty($_REQUEST['genero_id']))
            {
                $_SESSION['pelicula']=$usuario->editar($_REQUEST['nombrePelicula'],$_REQUEST['argumento'],$_REQUEST['clasificacion'],$_REQUEST['ano'],$_REQUEST['duracion'],$_REQUEST['edad'],
                $_REQUEST['genero_id']);
                echo "Se ha editado la pelicula exitosamente";
            }
            else{
                echo "No se ha editado la pelicula";
            }
            
        //$_SESSION['usuarios']=$usuario->editar($_REQUEST['nombrePelicula'],$_REQUEST['argumento']);
    }
    public function listarPeliculas(){
        include "../../admin/html/listado.php";
        $usuario=new Usuario();
        $_SESSION['peliculas']=$usuario->listarPeliculas();
        //var_dump($_SESSION['peliculas']);
    }
    public function listarUsuarios(){
        include "../../admin/html/listadoUsuario.php";
        $usuario=new Usuario();
        $_SESSION['usuarios']=$usuario->listarUsuarios();
        //var_dump($_SESSION['usuarios']);
    }
    public function listarActoresActricesDirector()
    {
        include "../../admin/html/listadoActoresActricesDirectores.php";
        $usuario=new Usuario();
        $_SESSION['actores']=$usuario->listarActores();
        $_SESSION['actrices']=$usuario->listarActrices();
        $_SESSION['directores']=$usuario->listarDirector();
        //var_dump($_SESSION['actores']);
        //var_dump($_SESSION['actrices']);
        //var_dump($_SESSION['directores']);
    }
}
?>