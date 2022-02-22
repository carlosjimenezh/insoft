<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insoft</title>
    <link rel="stylesheet" href="w3pro.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php $sec=1; ?>
    <?php include("header.php"); ?>
    <div class="banner-principal" style="height: 600px; background-color:aliceblue">
        <div class="contenido">
            prueba
        </div>
    </div>

    <section class="productos">
        <div class="w3-center contenido" style="max-width: 700px;">
            <h1>PRODUCTOS Y SOLUCIONES</h1>
            Contamos con soluciones eficaces e intuitivas para innovar y abarcar todos 
            los aspectos del proceso de desarrollo de productos, sin importar el tamaño de su empresa.
            <br>
            <button>Más información</button>
        </div>
        <div class="w3-row contenido w3-center">
            <div class="w3-third mitadizq">
                <img src="" alt="">
                <h2>SOLIDWORKS</h2>
                <strong>DISEÑA</strong> <br>
                Es el mejor Software CAD de diseño asistido por computadora para modelado mecánico
                en 3D, te permite gracias a sus herramientas innovar y desarollar tus propios productos.
            </div>
            <div class="w3-third mitadcentro">
            <img src="" alt="">
                <h2>CAMWorks</h2>
                <strong>SIMULA</strong> <br>
                La conexión entre el diseño y mecanizado CNC para crear código G y la simulación de 
                maquinados CNC, integrado totalmente a SOLIDWORKS será mas fácil las actualizaciones de diseño.
            </div>
            <div class="w3-third mitadder">
            <img src="" alt="">
                <h2>Capacitación</h2>
                <strong>APRENDE</strong> <br>
                Visita nuestros distintos centros de capacitación equipadas y acondicionadas SOLIDWORKS 
                en México, Guadalajara y Monterrey, ven y descubre porque somos ideal para ti.
            </div>
        </div>
    </section>


    <section style="background-color: aliceblue; height:400px; position:relative">
        <div class="w3-display-middle">
            PARALAX
        </div>
    </section>
    

    <?php include("footer.html"); ?>
</body>
</html>