<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dist/output.css" type="text/css"/>
        <title></title>
</head>
<body class="container max-w-screen-2xl mx-auto bg-fond_black">
   <header class="container max-w-screen-2xl p-11 grid grid-cols-2">
        <img src="../images/login_register/logo.png" style="width: 179.23px ; height: 55px;" alt="logo">
        <div class="flex justify-end text-white font-normal font-poppins gap-6 text-sm">
            <img src="../images/avatar/<?php $_SESSION['usuarios']['avatar'][0]?>">
            <a href="login_register.php?ctl=logout">Cerrar Sesion</a>
            <a href="login_register.php?ctl=añadir">Añadir una nueva pelicula</a>
            <a href="login_register.php?ctl=eliminar">Eliminar una pelicula</a>
            <a href="login_register.php?ctl=editar">Editar una pelicula</a>
        </div>
   </header>
   <main class="bg-no-repeat bg-personalized h-personalized grid content-around justify-around" style="background-image: url(../images/login/fondo-imagenes.png);">
                <div class="p-24 w-500 h-516 rounded-2xl bg-fond_transp">
                    <form action="login_register.php?ctl=recuperarPassword" method="POST"> 
                        <a class="w-300 h-12 mt-1 ml-2 bg-rose-600 text-2xl font-normal text-white font-poppins" type="submit" href="../../index.php"><p class="text-center mt-2">Ir al inicio</p></a>
                    </form>
                </div>
    </main>
   <body>
</body>
</html>