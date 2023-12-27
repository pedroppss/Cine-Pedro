<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dist/output.css" type="text/css"/>
        <title>Recuperar Contraseña</title>
</head>
<body  class="container max-w-screen-2xl mx-auto bg-fond_black">
   <header class="container max-w-screen-2xl p-11">
        <img src="../images/recuperarContraseña/logo.png" style="width: 179.23px ; height: 55px;" alt="logo">
   </header> 
-->
   <main class="bg-no-repeat bg-personalized h-personalized grid content-around justify-around" style="background-image: url(../images/recuperarContraseña/fondo-imagenes.png);">
                <div class="p-24 w-500 h-620 rounded-2xl bg-fond_transp">
                    <form action="login_register.php?ctl=login" method="POST">
                        <img class="-ml-20 -mt-10"  src="../images/recuperarContraseña/vector.png" alt="vector">
                    </form>
                    <form action="login_register.php?ctl=recuperarPassword" method="POST">
                        <h1 class="text-3xl font-normal mt-12 text-white font-poppins">Recuperacion de Contraseña</h1>
                        <input class="w-300 h-12 mt-3 bg-fond_black_2 rounded text-base font-normal font-poppins" type="email" name="gmail" id="gmail" placeholder="Email" value="">
                        <br>
                        <button class="w-300 h-12 mt-7 bg-rose-600 text-2xl font-normal text-white font-poppins" type="submit" name="recuperar" value="recuperar">Recuperar</button>
                    </form> 
                </div>
    </main>
<!--
</body>
</html>
-->