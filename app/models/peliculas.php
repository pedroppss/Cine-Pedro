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
            $consultasql="select peliculasc.id,peliculasc.nombre,peliculasc.cartel,peliculasc.clasificacion_edad, generoc.nombre from peliculasc LEFT join generoc on peliculasc.genero_id=generoc.id WHERE peliculasc.id=:id;";
            $enlaceDatos=$conexion->prepare($consultasql);
            $enlaceDatos->bindParam(":id",$id,PDO::PARAM_INT);
            $enlaceDatos->execute();
            while($row = $enlaceDatos->fetch(PDO::FETCH_ASSOC)){
                $genero=$row["generoc.nombre"];
                $imagen=$row["peliculasc.cartel"];
                $edad=$row['peliculasc.clasificacion_edad'];
                $_SESSION['peliculas']['genero'][]=$genero;
                $_SESSION['peliculas']['imagen'][]=$imagen;
                $_SESSION['peliculas']['edad'][]=$edad;
            }
            $conexion=null;
            

        }catch(PDOException $e){
            $e->getMessage();
        }
    }
}
?>