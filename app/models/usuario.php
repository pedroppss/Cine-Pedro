<?php
include_once "conexion.php";
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
        $consultasql="select correo,nombre,hash_pass from usuariosc where correo=:correo";
        $enlaceDatos=$conexion->prepare($consultasql);
        $enlaceDatos->bindParam(":correo",$gmail,PDO::PARAM_STR);
        $enlaceDatos->execute();
        $usuario=$enlaceDatos->fetch(PDO::FETCH_ASSOC);
        if(password_verify($password,$usuario['hash_pass']))
        {
            $usuariocorrecto[]=$usuario;
        }else{
            $usuariocorrecto=false;
        }
    }catch(PDOException $e){
        exit("Error: ".$e->getMessage());
    }
   }
   public function registar($gmail,$nombre,$apellidos,$password,$nif)
   {
        try
        {
           
            $instancia=new Usuario();
            $conexion=$instancia->conexion;
            $consultasql="insert into usuariosc (correo,nombre,apellidos,NIF,hash_pass,rol) values (:correo,:nombre,:apellidos,:nif,:pash,'cliente')";
            $enlaceDatos=$conexion->prepare($consultasql);
            $enlaceDatos->bindParam(":correo",$gmail,PDO::PARAM_STR);
            $enlaceDatos->bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $enlaceDatos->bindParam(":apellidos",$apellidos,PDO::PARAM_STR);
            $enlaceDatos->bindParam(":nif",$nif,PDO::PARAM_STR);
            $hash=password_hash($password,PASSWORD_BCRYPT);
            $enlaceDatos->bindParam(":pash",$hash,PDO::PARAM_STR);
            $enlaceDatos->execute();
            $enlaceDatos->fetch(PDO::PARAM_STR);
        }catch(PDOException $e)
        {
            exit("Error:".$e->getMessage());
        }
   }

}
?>
