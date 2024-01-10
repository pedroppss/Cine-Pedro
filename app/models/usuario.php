<?php
include_once "conexion.php";
include "../controllers/controllersCorreo.php";

class Usuario extends conexion{
   public function __construct()
   {
        parent::__construct();
   }
   public function login($gmail,$password)
   {
    try{
        $instancia=new Usuario();
        $conexion=$instancia->conexion;
        $consultasql="select correo,nombre,hash_pass,avatar,rol from usuariosc where correo=:correo";
        $enlaceDatos=$conexion->prepare($consultasql);
        $enlaceDatos->bindParam(":correo",$gmail,PDO::PARAM_STR);
        $enlaceDatos->execute();
        $usuario=$enlaceDatos->fetch(PDO::FETCH_ASSOC);
        //var_dump($usuario);
        if(password_verify($password,$usuario['hash_pass']))
        {
            $usuariocorrecto[]=$usuario;
            $usuariocorrecto['rol']=$usuario['rol'];
            $usuariocorrecto['avatar']=$usuario['avatar'];
            $usuariocorrecto['nombre']=$usuario['nombre'];
            //echo  $_SESSION["usuarios"]['nombre'];
        }else{
            $usuariocorrecto=false;
        }
        $conexion=null;
        return $usuariocorrecto;
       // return $_SESSION["usuarios"];
    }catch(PDOException $e){
        exit("Error: ".$e->getMessage());
    }
   }
   public function registar($nombre,$apellidos,$password,$nif,$gmail)
   {
        try
        {
            $instancia=new Usuario();
            $conexion=$instancia->conexion;
            $consultasql="insert into usuariosc (correo,nombre,apellidos,NIF,hash_pass,rol) values (:correo,:nombre,:apellidos,:nif,:pash,'cliente')";
            $enlaceDatos=$conexion->prepare($consultasql);
            $enlaceDatos->bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $enlaceDatos->bindParam(":apellidos",$apellidos,PDO::PARAM_STR);
            $hash=password_hash($password,PASSWORD_BCRYPT);
            $enlaceDatos->bindParam(":pash",$hash,PDO::PARAM_STR);
            $enlaceDatos->bindParam(":nif",$nif,PDO::PARAM_STR);
            $enlaceDatos->bindParam(":correo",$gmail,PDO::PARAM_STR);
            $enlaceDatos->execute();
            $enlaceDatos->fetch(PDO::PARAM_STR);
            ControllerCorreo::enviarCorreo("pedroentornocliente@gmail.com",$gmail);


        }catch(PDOException $e)
        {
            exit("Error:".$e->getMessage());
        }
   }
   public function añadir($nombrePelicula,$argumento,$clasificacion,$ano,$duracion,$edad,$genero_id)
   {
        try
        {
            $instancia=new Usuario();
            $conexion=$instancia->conexion;
            $consultasql="insert into peliculasc (nombre,clasificacion,año,duracion,argumento,clasificacion_edad,genero_id) values (:nombre,:clasif,:ano,:duracion,:argumento,:edad,:genero)";
            $enlaceDatos=$conexion->prepare($consultasql);
            $enlaceDatos->bindParam(":nombre",$nombrePelicula,PDO::PARAM_STR);
            $enlaceDatos->bindParam(":clasif",$clasificacion,PDO::PARAM_STR);
            $enlaceDatos->bindParam(":ano",$ano,PDO::PARAM_STR);
            $enlaceDatos->bindParam(":duracion",$duracion,PDO::PARAM_STR);
            $enlaceDatos->bindParam(":argumento",$argumento,PDO::PARAM_STR);
            $enlaceDatos->bindParam(":edad",$edad,PDO::PARAM_STR);
            $enlaceDatos->bindParam(":genero",$genero_id,PDO::PARAM_STR);
            $enlaceDatos->execute();
            $enlaceDatos->fetch(PDO::PARAM_STR);
        }catch(PDOException $e)
        {
            exit("Error:" .$e->getMessage());
        }
   }
   public function eliminar($nombrePelicula)
   {
    try
    {
        $instancia=new Usuario();
        $conexion=$instancia->conexion;
        $consultasql="delete from peliculasc where nombre=:nombre";
        $enlaceDatos=$conexion->prepare($consultasql);
        $enlaceDatos->bindParam(":nombre",$nombrePelicula,PDO::PARAM_STR);
        $enlaceDatos->execute();
        $enlaceDatos->fetch(PDO::PARAM_STR);

    }catch(PDOException $e)
    {
        exit("Error:" .$e->getMessage());
    }
   }
   public function editar($nombrePelicula,$argumento)
   {
        try
        {
            $instancia=new Usuario();
            $conexion=$instancia->conexion;
            $consultasql="update peliculasc set argumento=:argumento  where nombre=:nombre ";
            $enlaceDatos=$conexion->prepare($consultasql);
            $enlaceDatos->bindParam(":nombre",$nombrePelicula,PDO::PARAM_STR);
            $enlaceDatos->bindParam(":argumento",$argumento,PDO::PARAM_STR);
            $enlaceDatos->execute();
            $enlaceDatos->fetch(PDO::PARAM_STR);
        }catch(PDOException $e)
        {
            exit("Error:" .$e->getMessage());
        }
   }
}
?>
