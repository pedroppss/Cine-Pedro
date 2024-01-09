
<main class="bg-no-repeat bg-personalized h-personalized grid content-around justify-around mt-[103px]" style="background-image: url(../images/login/fondo-imagenes.png);">
               
                <div class="p-24 w-500 h-[571px] rounded-2xl bg-fond_transp"> 
                <a href="login_register.php?ctl=login"><img class="-ml-20 -mt-16"  src="../images/register/vector.png" alt="vector"></a>
                    <form action="login_register.php?ctl=añadir" method="POST" class="-mt-[41px]">
                        <h1 class="text-3xl font-normal text-white font-poppins">Añadir una Pelicula</h1>
                        <input class="w-300 h-12 mt-3 bg-fond_black_2 rounded text-base font-normal font-poppins" type="text" name="nombrePelicula" id="nombrePelicula" placeholder="Nombre de la Pelicula">  
                        <br>
                        <input class="w-300 h-12 mt-3 bg-fond_black_2 rounded text-base font-normal font-poppins" type="text" name="argumento" id="argumento" placeholder="argumento de la Pelicula">
                        <br>
                        <input class="w-300 h-12 mt-3 bg-fond_black_2 rounded text-base font-normal font-poppins" type="text" name="clasificacion" id="clasificacion" placeholder="clasificacion de la Pelicula">
                        <br>
                        <input class="w-300 h-12 mt-3 bg-fond_black_2 rounded text-base font-normal font-poppins" type="text" name="ano" id="ano" placeholder="año de la Pelicula">
                        <br>
                        <input class="w-300 h-12 mt-3 bg-fond_black_2 rounded text-base font-normal font-poppins" type="text" name="duracion" id="duracion" placeholder="duracion de la Pelicula">
                        <br>
                        <input class="w-300 h-12 mt-3 bg-fond_black_2 rounded text-base font-normal font-poppins" type="text" name="edad" id="edad" placeholder="Edad de la Pelicula">
                        <br>
                        <input class="w-300 h-12 mt-3 bg-fond_black_2 rounded text-base font-normal font-poppins" type="text" name="genero_id" id="genero_id" placeholder="genero de la Pelicula">
                        <br>
                        <button class="w-300 h-12 mt-7 bg-rose-600 text-2xl font-normal text-white font-poppins" type="submit" name="añadir" value="añadir">Añadir</button>
                    </form>
                </div>      
    </main>