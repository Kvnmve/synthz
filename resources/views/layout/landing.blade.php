<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/general/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('componentes/header/header.css') }}">
    <link rel="stylesheet" href="{{ asset('componentes/loader/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('aos-master/dist/aos.css') }}"> <!-- AOS -->
    <title>SYNTHZ MUSIC / Inicio</title>
    <script src="{{ asset('componentes/loader/loader.js') }}"></script>
</head>
<body>
    
    <!-- VENTANA MODAL -->
    <section class="modal">
        <div class="modal_contenedor">
            <img class="img_modal" src="{{ asset('img/img_indexContent/img_modal.jpg') }}" alt="">
            <h2 class="titulo_modal">Únete a <br> SYNTHZ </h2>
            <p class="parrafo_modal">Crea tu Cuenta ahota y accede a 4 Packs de recursos y muchos más totalmente GRATIS y dale el toque diferente a tus nuevas creaciones con SYNTHZ. <br> <br> Es fácil y rápido, ¿Qué esperas?</p>
            <div class="contenedor_botones">
                <a href="" data-aos="" class="neonClase2 botonNeonEditable small_boton modal_cerrar"> NO, GRACIAS </a>
                <a href="{{ url('formularios/registro/registro') }}" data-aos="" class="neonClase2 botonNeonEditable2 small_boton modal_cerrar"> CREAR CUENTA </a>
            </div>
        </div>
    </section>
    <!-- END VENTANA MODAL -->
    
    <!-- SLIDER -->
    <script>
        const imagenes = ["imagen1.jpg", "imagen2.jpg", "imagen3.jpg", "imagen4.jpg", "imagen5.jpg", "imagen6.jpg"];
        let indiceImagenActual = 0;
    
        function cambiarImagenFondo() {
            const sliderFondo = document.querySelector(".slider-fondo");
            sliderFondo.style.opacity = 0;
    
            setTimeout(() => {
                indiceImagenActual = (indiceImagenActual + 1) % imagenes.length;
                sliderFondo.style.backgroundImage = `url('{{ asset("img/img_slider/") }}/${imagenes[indiceImagenActual]}')`;
                sliderFondo.style.opacity = 1;
            }, 2000);
        }
    
        const intervalId = setInterval(cambiarImagenFondo, 10000);
    
        // Limpia el intervalo cuando sea necesario
        function limpiarIntervalo() {
            clearInterval(intervalId);
        }
    </script>
    
    <div class="contenedorInicio">
        <div class="slider-fondo"></div>
        <h1 data-aos="fade-down" class="textoBienvenida"><span class="letraGrande">B</span>IENVENIDO A <span class="letraGrande"><span class="neon">SYNTHZ</span></span></h1>
        <h2 data-aos="zoom-in" class="subTextoBienvenida">Sonidos profesionales para música profesional.</h2>
        <a href="" data-aos="" class="neonClase2 botonNeonEditable abrirModal"> PROBRAR AHORA </a>
    </div>
    <!-- END SLIDER -->

    <!-- HEADER -->
    <header>    
        <ul class="menuHeader">
            <img class="logoHeader" alt="" src="{{ asset('img/general/synthzLogo.png') }}">
            <li class="opcionMenuHeader"><a class="linkMenuHeader" href="#">Inicio</a></li>
            <li class="opcionMenuHeader"><a class="linkMenuHeader" href="{{ url('interfaz_usuario') }}">drumkits</a></li>
            <li class="opcionMenuHeader"><a class="linkMenuHeader" href="#">samples & loops</a></li>
            <li class="opcionMenuHeader"><a class="linkMenuHeader" href="#">vst & plugins</a></li>
            <a class="link2MenuHeader fondoAzul" href="{{ url('formularios/registro/registro') }}"><li class="cuentaMenuHeader">Registrarme</li></a>
            <a class="link2MenuHeader" href="{{ url('formularios/inicio_sesion/inicio_sesion') }}"><li class="cuentaMenuHeader">Iniciar sesión</li></a>
        </ul>
    </header>
    <!-- END HEADER -->

    <!-- CONTENIDO 1 BIENVENIDA -->


    <div class="gradNegroAzul_ArribaAbajo">
        <div class="contenedorTextoGiftAnclado">
            <p data-aos="fade-down" class="textoGiftAnclado"><span class="BigText">n</span>os alegra tenerte aquí en
                <span class="BigText">SYNTHZ</span></p>
            <p data-aos="fade-left" class="parrafoGiftAnclado">
                Si buscas potencializar tu música y llevarla más allá con sonidos diferentes, estás en el sitio
                indicado.
            </p>
        </div>
        <img data-aos="fade-right" class="imagenGiftAnclado" src="{{ asset('img/img_indexContent/ancladoPrincipal.jpg') }}" alt="Imagen">
        <br>
        <img class="flechaScroll" src="{{ asset('img/img_indexContent/ancFlechaScroll.png') }}" alt="">
    </div>
    <!-- END CONTENIDO 1 BIENVENIDA -->

    <!-- CONTENIDO 2 SUB BIENVENIDA -->
    <div class="gradNegroAzul">
        <div class="gradNegroAzul-contenedor">
            <p data-aos="fade-right" class="gradNegroAzul-texto">bienvenido a synthz</p>
            <p data-aos="fade-right" class="gradNegroAzul-parrafo2">Aquí puedes lograr ese sonido diferente</p>
            <p data-aos="fade-right" class="gradNegroAzul-parrafo1">
                Sabemos muy bien que el éxito en la industria musical depende de destacar y ser original... Ahora
                adivina qué es lo que SYNTHZ te puede ofrecer.
            </p>
        </div>
        <img data-aos="fade-left" class="gradImgDerecha" src="{{ asset('img/img_indexContent/bienvenido.png') }}" alt="Imagen">
    </div>
    <!-- END CONTENIDO 2 SUB BIENVENIDA -->

    <!-- CONTENIDO 3 -->
    <div class="gradAzulNegro">
        <img data-aos="fade-right" class="gradImgIzquierda" src="{{ asset('img/img_indexContent/estasEmpezando.png') }}" alt="Imagen">
        <div class="gradAzulNegro-contenedor">
            <p data-aos="fade-left" class="gradAzulNegro-texto">¿Apenas empiezas en el mundo de la producción musical?</p>
            <p data-aos="fade-left" class="gradAzulNegro-parrafo1">
                Da igual si apenas empiezas en este mundo, pues SYNTHZ, más que un alojamiento de sonidos para tus
                producciones musicales, es una comunidad.
                Aquí tienes todo lo esencial para seguir tu camino como productor.
            </p>
        </div>
    </div>
    <!-- END CONTENIDO 3 -->

    <!-- CONTENIDO 4 -->
    <div class="gradNegroAzul">
        <div class="gradNegroAzul-contenedor">
            <p data-aos="fade-right" class="gradNegroAzul-texto">POTENCIALIZA TU MÚSICA</p>
            <p data-aos="fade-right" class="gradNegroAzul-parrafo1">
                ¿Sonidos únicos? ¿Originales? ¿Géneros musicales diferentes? SYNTHZ tiene eso y más... Sabemos que eso
                buscas, así que ¿Qué esperas?
            </p>
        </div>
        <img data-aos="fade-left" class="gradImgDerecha" src="{{ asset('img/img_indexContent/potencializaMusica.png') }}" alt="Imagen">
    </div>
    <!-- END CONTENIDO 4 -->

    <!-- CONTENIDO 5 -->
    <div class="gradAzulNegro">
        <img data-aos="fade-right" class="gradImgIzquierda" src="{{ asset('img/img_indexContent/regalo.png') }}" alt="Imagen">
        <div class="gradAzulNegro-contenedor">
            <p data-aos="fade-left" class="gradAzulNegro-texto">DE PARTE DE SYNTHZ MUSIC TE TENEMOS UN REGALO</p>
            <p data-aos="fade-left" class="gradAzulNegro-parrafo1">
                Crea tu cuenta en SYNTHZ y obtén GRATIS 2 Sample Packs + 2 Drum Kits profesionales de Trap para empezar
                y mejorar tus producciones.
                Con SYNTHZ, lleva tu música más allá...
            </p>
        </div>
    </div>
    <!-- END CONTENIDO 5 -->

    <!-- CONTENIDO MATERIAL GRATIS POR REGISTRO -->

    <div class="gradAzulNegro_ArribaAbajo">
        <div class="flechas">
            <img class="flechaDer" src="{{ asset('img/img_IndexContent/flechaDer.png') }}" alt="">
        </div>
        @foreach ($regalos as $regalo)
            <div data-aos="fade-up" data-aos-duration="1500" class="carta">
                <div class="imagen-producto">
                    <img src="{{ asset($regalo->ruta_img) }}" alt="{{ $regalo->nombre }}">
                </div>
                <div class="contenido">
                    <div class="contenido-centrado">
                        <p class="nombre-producto">{{ $regalo->nombre }}</p>
                        <p class="descripcion">{{ $regalo->descripcion }}</p>
                        <a href="#" class="botonEstilos1 botonNeonEditable tamañoBotonTextoBoton abrirModal"> DESCARGAR TODO </a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="flechas">
            <img class="flechaIzq" src="{{ asset('img/img_IndexContent/flechaIzq.png') }}" alt="">
        </div>
        <div data-aos="zoom-in" class="contenedorBotonUnico">
            <a href="#" class="botonNeonEditable2 abrirModal">descargar todo</a>
        </div>
    </div>
    

    <!-- END CONTENIDO MATERIAL GRATIS POR REGISTRO -->

    <!-- FOOTER -->
    <footer>
        <div class="social-links">
            <span class="hover">
                <i class="redSocialIcon fa-brands fa-instagram" style="color: #ffffff;"></i>
                <a class="redSocialTexto" href="https://www.instagram.com/" target="_blank">Instagram</a>
            </span>
            <i class="redSocialIcon fa-brands fa-square-facebook"></i>
            <a class="redSocialTexto" href="https://www.facebook.com/" target="_blank">Facebook</a>
            <i class="redSocialIcon fa-brands fa-x-twitter"></i>
            <a class="redSocialTexto" href="https://twitter.com/" target="_blank">Twitter</a>
        </div>
        <p class="copyright">&copy; 2024 SYNTHZ MUSIC. Todos los derechos reservados.</p>
    </footer>
    <!-- END FOOTER -->

    <!-- SCRIPTS -->
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="{{ asset('aos-master/dist/aos.js') }}"></script>
    <script>
    AOS.init({
        easing: 'ease-in-out-sine'
    });
    </script>
</body>
</html>
