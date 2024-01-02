<?php
include "app/models/peliculas.php";
class controllersPeliculas{
    public function mostrar_fast_furious(){
        //$id=(isset($_GET["id"]) ? intval($_GET["id"]):0);
        //if($id==2){
            //isset($_SESSION)?:session_start();
            $peli=new peliculas();
            $_SESSION['peliculas']=$peli->mostrarImagenes(2);
            //unset($_SESSION['peliculas']);
            //var_dump($_SESSION['peliculas']);
            //unset($_SESSION['peliculas']);
            //header("");
            //exit();      
       
    }
    public function mostrar_air()
    {
            $peli=new peliculas();
            $_SESSION['peliculas']=$peli->mostrarImagenes(3);
       
    }
    public function mostrar_transformers()
    {
            $peli=new peliculas();
            $_SESSION['peliculas']=$peli->mostrarImagenes(5);
       
    }
    public function mostrar_sawx()
    {
            $peli=new peliculas();
            $_SESSION['peliculas']=$peli->mostrarImagenes(7);
       
    }
    public function mostrar_65()
    {
            $peli=new peliculas();
            $_SESSION['peliculas']=$peli->mostrarImagenes(1);
       
    }
    public function mostrar_godzilla_kong()
    {
            $peli=new peliculas();
            $_SESSION['peliculas']=$peli->mostrarImagenes(6);
       
    }
    public function mostrar_spiderman()
    {
            $peli=new peliculas();
            $_SESSION['peliculas']=$peli->mostrarImagenes(8);
       
    }
    public function mostrar_aquaman()
    {
            $peli=new peliculas();
            $_SESSION['peliculas']=$peli->mostrarImagenes(9);
       
    }
    public function mostrar_guardianes_galaxia()
    {
            $peli=new peliculas();
            $_SESSION['peliculas']=$peli->mostrarImagenes(4);
       
    }
    public function mostrar_sirena()
    {
            $peli=new peliculas();
            $_SESSION['peliculas']=$peli->mostrarImagenes(10);
       
    }
    
}