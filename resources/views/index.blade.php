<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/estilos.css') }}">
    {{-- <link rel="shortcut icon" type="image/png" href="{{ asset('assets/logo.png') }}"> 
            mint 29:05 
    --}}
    <link rel="icon" type="image/x-icon"  href="{{ asset('assets/logo.ico') }}">
    <title>SuperCampeones | vive la pasión</title>
</head>
<body>
    <header>
        <div class="textos">
            <h1 class="titulo">SUPERCAMPEONES</h1>
            <h3 class="subtitulo">Escuela de futbol</h3>
            <a href="#" class="boton">Registrate</a>
        </div>
        <div class="sesgoabajo"></div>
    </header>
    <main>        
        <section class="acerca-de">
            <div class="contenedor">
                <h2 class="sobre-nosotros">Sobre nosotros</h2>
                <h3 class="slogan">Vive la pasión del futbol</h3>
                <p class="  ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, facere aliquid, consequuntur fuga quam nam quae deserunt et, beatae nisi optio sit dolore nemo? Voluptas praesentium deserunt at eaque temporibus explicabo deleniti magni, facilis qui, nobis officia. Corporis praesentium vel blanditiis hic voluptas! Consectetur molestias itaque ipsum. Labore, hic ad!</p>
                <p class="parrafo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, facere aliquid, consequuntur fuga quam nam quae deserunt et, beatae nisi optio sit dolore nemo? Voluptas praesentium deserunt at eaque temporibus explicabo deleniti magni, facilis qui, nobis officia. Corporis praesentium vel blanditiis hic voluptas! Consectetur molestias itaque ipsum. Labore, hic ad!</p>
                <a href="#" class="boton">Registrate</a>
            </div>            
        </section>
        <section class="galeria">
            {{-- <div class="sesgoarriba"></div> --}}
            <div class="imagenes">
                <img src="{{ asset('assets/grupo.jpeg') }}" alt="">
                <div class="encima"><h2>Super Campeones</h2></div>
            </div>
            <div class="imagenes">
                <img src="{{ asset('assets/equipo.jpeg') }}" alt="">
            </div>
            <div class="imagenes">
                <img src="{{ asset('assets/grupo2.jpeg') }}" alt="">
            </div>
            <div class="imagenes">
                <img src="{{ asset('assets/jugador.jpeg') }}" alt="">
            </div>
            <div class="imagenes">
                <img src="{{ asset('assets/math.jpeg') }}" alt="">
            </div>
            {{-- <div class="sesgoabajo"></div> --}}
        </section>
        <section class="miembros">
            <div class="contenedor">
                <h2 class="sobre-nosotros">nuestro equipo</h2>
                <h3 class="slogan">conoce a nuestro equipo de trabajo</h3>
                <div class="cards">
                    <div class="card">
                        <img src="{{ asset('assets/logo.png') }}" alt="">
                        <h4>supercampeones</h4>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/logo.png') }}" alt="">
                        <h4>supercampeones</h4>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/logo.png') }}" alt="">
                        <h4>supercampeones</h4>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="fondo">
            {{-- <div class="sesgoarriba"></div> --}}
 
            {{-- mint 0:00
 https://www.youtube.com/watch?v=G6-7SYXd9NU&t=3s&ab_channel=AlexCGDesign --}}

            <div class="contenedor">
                <h2 class="titulo-patrocinadores">Nuestros jugadores</h2>
                <h3 class="subtitulo-patrocinadores">Conoce a algunos de nuestros patrocinadores</h3>
                <div class="clientes">
                    <div class="cliente"><img src="{{ asset('assets/1399.png') }}" alt=""></div>
                    <div class="cliente"><img src="{{ asset('assets/1399.png') }}" alt=""></div>
                    <div class="cliente"><img src="{{ asset('assets/1399.png') }}" alt=""></div>
                </div>
                <h3 class="subtitulo-patrocinadores especial">y muchos más clientes</h3>
            </div>
            <div class="sesgoabajo-unico"></div>
        </section>
    </main>
    <footer>
        <div class="contenedor">
            <h2 class="titulo-footer">Contactanos</h2>
            <h3 class="subtitulo-footer">Lo apreciamos mucho</h3>
            <div class="footer">
                <form action="">
                    <input type="text" name="" id="" placeholder="Nombre">
                    <input type="email" name="" id="" placeholder="Email">
                    <textarea name="" id="" cols="30" rows="10" ></textarea>
                    <input type="submit" value="">
                </form>
            </div>
        </div>
    </footer>    
</body>
</html>