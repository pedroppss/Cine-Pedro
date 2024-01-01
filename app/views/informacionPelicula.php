<?php
session_start();
?>
<section>
    <div class="grid grid-cols-2">
        <div>
            <a href="index.php?ctl=default"><img src="app/images/informacionPeliculas/vector.png" class="w-6 h-7"></a>
            <h1 class="p-8 text-white  text-7xl font-poppins font-normal"><?=$_SESSION['peliculas']['nombre'][0]?></h1>
            <ul class="flex gap-7 mt-6 ml-8 text-color_gray">
                <li><?=$_SESSION['peliculas']['clasificacion'][0]?></li>
                <li><?=$_SESSION['peliculas']['año'][0]?></li>
                <li><?=$_SESSION['peliculas']['genero'][0]?></li>
                <li><?=$_SESSION['peliculas']['duracion'][0]?></li>
                <li><?=$_SESSION['peliculas']['edad'][0]?></li>
            </ul>
            <p class="text-white font-normal font-poppins text-sm ml-8 mt-7"><?=$_SESSION['peliculas']['argumento'][0]?></p> <!--Argumento-->
            <div class="flex  gap-2 ml-8 mt-4">
                <p class="text-color_gray font-normal font-poppins text-sm">Director:</p>
                <p class="text-white font-normal font-poppins text-sm">James Gunn</p> <!--Nombre_de_Director-->
            </div>
            <div class="flex gap-2 ml-8 mt-4">
                <p class="text-color_gray font-normal font-poppins text-sm">Actors:</p>
                <p class="text-white font-normal font-poppins text-sm">efewgfregte,sfdsdfdfd,dsgfdfgdgfred,fewdfewferd,</p> <!--Actores-->
            </div>
            <div class="grid grid-cols-2 justify-between mt-32 ml-8">
                    <div class="flex gap-4">
                        <button class="bg-button_gray w-28 h-11 rounded-md text-white font-medium font-poppins text-base">Trailer</button>
                        <button class="bg-rose-600 w-28 h-11 rounded-md text-white font-medium font-poppins text-base">Comprar</button>
                    </div>
                    <div class="flex gap-4">
                        <img class="w-8 h-8" src="app/images/informacionPeliculas/gusta.png">
                        <img class="w-8 h-8" src="app/images/informacionPeliculas/marcador.png">
                    </div>
            </div>
        </div>
        <div>
            <img src="app/images/carteles/<?=$_SESSION['peliculas']['imagen'][0]?>" class="w-1000 h-620 -ml-151 rounded-md" alt="">
        </div>
    </div>
</section>