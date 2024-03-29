<?php
//Espacios de nombres
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Cargamos el Composer autoload para poder utilizar las clases
//Poned la ruta correcta a esta carpeta
require '../../vendor/autoload.php';
class ControllerCorreo
{
    //Método para enviar un correo
    //Recibe como parámetro la dirección de correo del receptor y el emisor
    public static function enviarCorreo($receptor,$gmail)
    {
        //var_dump($receptor);
        //var_dump($gmail);
        
        //Creamos el contenido del asunto 
        $subject = "Activacion de cuentas";
        //Cuerpo del mensaje
        $message = '<h1>¡Gracias por registrarse!Para poder activar la cuenta, haz click en el enlace</h1><a href="http://localhost/dwes2/Cine-Pedro/app/views/login_register.php?ctl=login">Iniciar sesion</a> <br> Enviado el día: ' . date("Y-m-d H:i:s");

        try {
            // Creando una nueva instancia de PHPMailer
            $mail = new PHPMailer(true);
            // Indicando el uso de SMTP
            //SMTP –Simple Mail Transfer Protocol, o protocolo simple de transferencia de correo
            //Protocolo básico que permite que los emails viajen a través de internet.
            $mail->isSMTP();
            // Habilitando SMTP debugging
            // 0 = apagado (para producción)
            // 1 = mensajes del cliente
            // 2 = mensajes del cliente y servidor
            $mail->SMTPDebug = 2;
            // Agregando compatibilidad con HTML
            $mail->Debugoutput = 'html';
            // Estableciendo el nombre del servidor de email
            $mail->Host = 'smtp.gmail.com';
            // Estableciendo el puerto
            // Se utilizan los puertos 25 o 587.
            // Gmail utiliza el 587
            $mail->Port = 587;
            // Estableciendo el sistema de encriptación
            $mail->SMTPSecure = 'tls';
            // Para utilizar la autenticación SMTP
            $mail->SMTPAuth = true;
            // Nombre de usuario para la autenticación SMTP - usar dirección de gmail
            //$mail->Username = "pedroentornocliente@gmail.com";
            $mail->Username = $gmail;
            // Password para la autenticación SMTP de aplicaciones de GMAIL           
            $mail->Password = "raqkafoltkmqajvg";//"vuestra contraseña para aplicaciones, NO sirve la contraseña de la cuenta";
            // Estableciendo como quién se va a enviar el mail
            //$emisor ="pedroentornocliente@gmail.com";//'vuestra dirección de gmail';
            $emisor =$gmail;
            $mail->setFrom($emisor);
            //Nombre del emisor que aparece en el mensaje
            $mail->FromName = 'Pedro Perez Sanchez';
            // Estableciendo a quién se va a enviar el correo   
            $mail->addAddress($receptor);
            //Establecemos el juego de caracteres 
            //Que se utilizará para enviar el mensaje (tíldes, ñ) 
            $mail->CharSet = 'UTF-8';
            // El asunto del mail
            $mail->Subject = $subject;
            // Estableciendo el mensaje a enviar
            // Cuerpo del mensaje es HTML
            $mail->MsgHTML($message);
            // Adjuntando unos archivos si fuese necesario, hay que colocar la ruta completa al archivo
            //$mail->addAttachment('imagenes/coche.');
            //Esta instrucción envía el mensaje
            //antes debemos establecer todas las condiciones
            $mail->Timeout = 7;
            //El método send devuelve true si el mensaje se ha podido enviar y false en caso contrario
            $mail->send();
            echo "<h2>Mensaje enviado correctamente <br> desde la dirección:  <br> $emisor    <br> a la dirección: <br> $receptor</h2>";
        } catch (Exception $e) {
            echo "En la línea "  . $e->getLine() . ' en el archivo ' . $e->getFile() . ': <br>';
            echo "<br>Mensaje de error:" . $e->getMessage();
        }
    }
}
