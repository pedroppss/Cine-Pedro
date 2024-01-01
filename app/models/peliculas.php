<?php
include_once "conexion_2.php";
class peliculas extends conexion_2{
    public function __construct()
    {
        parent::__construct();
    }
    public function mostrarImagenes($id)
    {
        try
        {
            $instancia=new peliculas();
            $conexion=$instancia->conexion;
            $consultasql="select peliculasc.id,peliculasc.clasificacion as clasif,peliculasc.año as año, peliculasc.duracion as duracion,peliculasc.argumento as argumento,peliculasc.nombre as nombre ,peliculasc.cartel as cartel ,peliculasc.clasificacion_edad as edad, generoc.nombre as genero from peliculasc LEFT join generoc on peliculasc.genero_id=generoc.id WHERE peliculasc.id=:id;";
            $enlaceDatos=$conexion->prepare($consultasql);
            $enlaceDatos->bindParam(":id",$id,PDO::PARAM_INT);
            $enlaceDatos->execute();

            unset($_SESSION['peliculas']);

            while($row = $enlaceDatos->fetch(PDO::FETCH_ASSOC)){
                $titulo=$row["nombre"];
                $genero=$row["genero"];
                $imagen=$row["cartel"];
                $edad=$row['edad'];
                $argumento=$row["argumento"];
                $clasif=$row["clasif"];
                $año=$row["año"];
                $duracion=$row["duracion"];
                //Agregar informacion a las variables de sesión.
                $_SESSION['peliculas']['genero'][]=$genero;
                $_SESSION['peliculas']['imagen'][]=$imagen;
                $_SESSION['peliculas']['edad'][]=$edad;
                $_SESSION['peliculas']['nombre'][]=$titulo;
                $_SESSION['peliculas']['argumento'][]=$argumento;
                $_SESSION['peliculas']['clasificacion'][]=$clasif;
                $_SESSION['peliculas']['año'][]=$año;
                $_SESSION['peliculas']['duracion'][]=$duracion;

            }
            $conexion=null;
            return $_SESSION['peliculas'];
            

        }catch(PDOException $e){
            echo "Error:" .$e->getMessage();
        }
    }
}
?>