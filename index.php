<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insoft</title>
    <link rel="stylesheet" href="swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="w3pro.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body id="insoft">
    <?php include("header.php"); ?>
    <section class="carrusel">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(assets/principal.jpg)">
                    <div class="contenido" style="height:100%; position: relative">
                        <div class="w3-display-bottomleft txtblanco" style="bottom:100px;font-size:35px;line-height:1.1;
                        text-align:left; padding: 0 10px">
                            <span style="font-size:70px"><b>CNC</b></span> <br>
                            <span style="font-size:45px"><b>Fresa / Torno</b></span> <br>
                            Realiza prácticas a pie de máquina
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url(assets/principal2.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(assets/principal3.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(assets/principal4.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(assets/principal5.jpg)"></div>
            </div>
            <!-- Add Pagination -->
            <div style="width: max-content; padding:0 20px; background:inherit; position:relative;
            z-index:2; margin:auto; bottom: 10px; height:25px">
                <div class="swiper-pagination" style="padding: 4px 20px 0;"></div>
                <div class="swiper-button-prev txtblanco" style="font-size: 30px;"></div>
                <div class="swiper-button-next txtblanco" style="font-size: 30px;"></div>
            </div>
            <div class="lnazul" style="width: 100%; position:relative; z-index:1;top: -54px;
            background-color:white"></div>
        </div>
    </section>

    <section id="productos">
        <div class="w3-center contenido" style="max-width: 700px;">
            <h1>PRODUCTOS Y SOLUCIONES</h1>
            Contamos con soluciones eficaces e intuitivas para innovar y abarcar todos 
            los aspectos del proceso de desarrollo de productos, sin importar el tamaño de su empresa.
            <br>
            <a href="solidworks.php" class="btn">Más información</a>
        </div>
        <div class="w3-row contenido w3-center linea-fondo">
            <div class="w3-third mitadizq linea-fondo-small">
                <a href="solidworks.php">
                    <div class="circular" style="background-image: url('assets/solidworks.jpg');"></div>
                </a>
                <h2>SOLIDWORKS</h2>
                <strong>DISEÑA</strong> <br>
                Es el mejor Software CAD de diseño asistido por computadora para modelado mecánico
                en 3D, te permite gracias a sus herramientas innovar y desarollar tus propios productos.
            </div>
            <div class="w3-third mitadcentro linea-fondo-small"> 
                <a href="camworks.php">
                    <div class="circular" style="background-image: url('assets/camworks.jpg');"></div>
                </a>
                <h2>CAMWorks</h2>
                <strong>SIMULA</strong> <br>
                La conexión entre el diseño y mecanizado CNC para crear código G y la simulación de 
                maquinados CNC, integrado totalmente a SOLIDWORKS será mas fácil las actualizaciones de diseño.
            </div>
            <div class="w3-third mitadder linea-fondo-small">
                <a href="capacitacion.php">
                    <div class="circular" style="background-image: url('assets/capacitacion.jpg');"></div>
                </a>
                <h2>Capacitación</h2>
                <strong>APRENDE</strong> <br>
                Visita nuestros distintos centros de capacitación equipadas y acondicionadas SOLIDWORKS 
                en México, Guadalajara y Monterrey, ven y descubre porque somos ideal para ti.
            </div>
        </div>
    </section>


    <section id="paralax">
    </section>

    <section id="scapacitacion">
        <div class="w3-center contenido" style="max-width: 700px;">
            <h1>CAPACITACIÓN</h1>
            Contamos con cursos desde nivel básico y más de 15 especialidades que te 
            ayudarán a realizar tu trabajo de manera exitosa, cumpliendo las demandas del mercado laboral actual.
            <br>
            <a href="capacitacion.php" class="btn">Contactar</a>
        </div>
        <div class="contenido w3-center">
            <div class="w3-row linea-fondo">
                <div class="w3-third mitadizq linea-fondo-small">
                    <a href="">
                        <div class="circular" style="background-image: url(assets/clases-virtuales.jpg);"></div>
                    </a>
                    <h2>CLASE VIRTUAL</h2>
                    Es el mejor Software CAD de diseño asistido por computadora para modelado mecánico
                    en 3D, te permite gracias a sus herramientas innovar y desarollar tus propios productos.
                </div>
                <div class="w3-third mitadcentro linea-fondo-small">
                    <a href="">
                        <div class="circular" style="background-image: url(assets/fechas.jpg);"></div>
                    </a>
                    <h2>FECHAS</h2>
                    <b>HORARIO:</b> <br>
                    <b>Lunes a Viernes</b> <br> 
                    A partir de las 7 AM hasta las 7 PM <br>
                    <b>Sábados y Domingos</b> <br>
                    A partir de las 9 AM hasta las 2 PM.
                </div>
                <div class="w3-third mitadder linea-fondo-small">
                    <a href="">
                        <div class="circular" style="background-image: url(assets/temario.jpg);"></div>
                    </a>
                    <h2>TEMARIOS</h2>
                    Conoce los cursos de SOLIDWORKS que tenemos para ti junto con el plan de estudios, 
                    duración, examenes de ubicación y los requisitos para mejorar tu aprendizaje.
                </div>
            </div>
            <div class="w3-row linea-fondo">
                <div class="w3-third mitadizq linea-fondo-small">
                    <a href="cursos.php">
                        <div class="circular" style="background-image: url(assets/cursos.jpg);"></div>
                    </a>
                    <h2>CURSOS</h2>
                    Contamos con una amplia variedad de cursos que te ayudarán a desempeñarte 
                    de mejor manera en el ámbito laboral.
                </div>
                <div class="w3-third mitadcentro linea-fondo-small">
                    <a href="especialidades.php">
                        <div class="circular" style="background-image: url(assets/diplomados.jpg);"></div>
                    </a>
                    <h2>DIPLOMADOS</h2>
                    Nuestros cursos y diplomados SOLIDWORKS tienen validez curricular lo cual 
                    tiene genera interés para la industria.
                </div>
                <div class="w3-third mitadder linea-fondo-small">
                    <a href="certificados.php">
                        <div class="circular" style="background-image: url(assets/certificaciones.jpg)"></div>
                    </a>
                    <h2>CERTIFICIONES</h2>
                    Te permitirán diseñar, gestionar, analizar, competir y sobresalir, sobre los 
                    demás ingenieros a nivel mundial.
                </div>
            </div>
        </div>
    </section>


    <section id="cuadro-rojo">
        <div class="contenido txtblanco" style="position: relative; height:100%">
            <div class="w3-display-bottomleft">
                Conviértete <br>
                en un experto <br>
                <img src="assets/logo-solidworks.svg" class="logo" alt="">
            </div>
            <div class="w3-display-bottommiddle">
                <img src="assets/laptop.png" alt="">
            </div>
            <div class="w3-display-right">
                <img src="assets/certificaciones-solidworks.png" alt="">
            </div>
        </div>
    </section>
    

    <section id="centro-capacitacion">
        <div class="contenido w3-row w3-center" style="max-width: 700px;">
            <h1>CENTROS DE CAPACITACIÓN</h1>
            <div class="w3-half mitadizq">
                <h2>Guadalajara</h2>
                Av. Cristóbal Colón 2706 <br>
                Col. Jardines de la Cruz  <br>
                01 (33) 3124 3922
            </div>
            <div class="w3-half mitadder">
                <h2>CDMX</h2>
                Av. Gustavo Baz 209 int. 203 <br>
                Col. Hacienda Echegaray, Naucalpan <br> 
                01 (55) 5009 5585
            </div>
        </div>
    </section>

    <?php include("footer.html"); ?>
    <!-- swiperjs js -->
    <script src="swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper', {
        spaceBetween: 30, 
        speed: 800,
        disableOnInteraction: false,
        effect: 'fade',
        adeEffect: {
            crossFade: true
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
            autoplay: {
            delay: 3000,
        }
        });
    </script>
</body>
</html>