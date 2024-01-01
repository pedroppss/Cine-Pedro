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
    
}