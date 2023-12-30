<?php
include "app/models/peliculas.php";
class controllersPeliculas{
    public function mostrar(){
        $idFoto=(isset($_GET["id"]) ? intval($_GET["id"]):0);
        $peli=new peliculas();
        $peli->mostrarImagenes($idFoto);
    }
}
