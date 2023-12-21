<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dist/output.css" type="text/css"/>
        <title>Login</title>
</head>
<body>
   <header class="container max-w-screen-2xl p-11">
        <img src="../images/login/logo.png" style="width: 179.23px ; height: 55px;" alt="logo">
   </header> 
   <body class="container max-w-screen-2xl mx-auto bg-fond_black">
        <div class="bg-no-repeat bg-personalized h-personalized" style="background-image: url(../images/login/fondo-imagenes.png);">
               <div class="p-36 w-500 h-516 rounded-2xl ml-96 ml-personalized bg-fond_transp ">
                    <form action="index.php?ctl=login" method="POST">
                        <h1>Login</h1>
                        <input type="email" id="gmail" placeholder="Email" value="">  
                        <br>
                        <input type="password" id="password" placeholder="Password" value="">
                        <br>
                        <button type="submit" name="Enviar" value="Enviar">Enviar</button>
                    </form> 
                </div>
        </div>
   </body>
</body>
</html>
