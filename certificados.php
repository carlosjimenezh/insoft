<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Especialidades</title>
    <link rel="stylesheet" href="w3pro.css">
    <link rel="stylesheet" href="estilo.css">
    <script src="js/verificar-formulario.js"></script>
</head>
<body id="capacitacion">
    <?php 
        $sec=4;
        $seccion='CERTIFICADOS';
        $dir='certificados.php';
        include('header.php'); 
    ?>


    <section id="certificaciones">
        <div class="banner-principal" style="height: 600px; background-image:url(assets/solidworks-insoft.jpeg)">
            <div class="contenido" style="margin-top: 0;height:100%; position:relative">
                <div class="w3-display-middle w3-center">
                    <span>CERTIFICADOS</span> <br>
                    <img src="assets/logo-solidworks.png" alt="">
                </div>
            </div>
        </div>
        <main class="contenido">
            <div class="frase" style="max-width: 680px">
                <h3 class="w3-center">CERTIFICACIONES SOLIDWORKS</h3>
                Contamos con cursos desde nivel básico y más de 15 especialidades que te ayudarán a 
                realizar tu trabajo de manera exitosa, cumpliendo las demandas del mercado laboral actual."
            </div>
            <div class="w3-row" style="margin-bottom: 100px;">
                <div class="w3-half mitadizq">
                    <h2>Certificación CSWA</h2>
                    Es una prueba de sus conocimientos en SOLIDWORKS, habilidades de diseño y resolución de 
                    problemas que las empresas necesitan hoy en día. <br> <br>
                    CSWA INCLUYE BÁSICO, INTERMEDIO Y AVANZADO TUTORIAL 3 HORAS Y DERECHO A EXAMEN (1 CÓDIGO INCLUIDO) <br> <br>
                    <b>Duración del examen:</b> 3 horas. <br>
                    <b>Calificación mínima para aprobar:</b> 70% <br>
                    <b>Política de reevaluación:</b> Hay un período mínimo de espera de 14 días entre cada intento 
                    del examen CSWA. <br>
                    <b>Horario:</b> Lunes a viernes de 9 a 7 pm. Sábados de 9 a 2 pm. <br> <br>
                    <b>Objetivo de aprendizaje</b> <br>
                    La Certificación CSWA, avala tus conocimientos prácticos en diseño de piezas 3d,ensambles y 
                    planos de ingeniería. Podrás demostrar tu capacidad de dar soluciones a problemas generales de 
                    diseño 3D con SOLIDWORKS
                </div>
                <div class="w3-half mitadder">
                    <img src="assets/cswa.jpg" alt="" width="100%">
                </div>
            </div>
            <div class="w3-row">
            <div class="w3-half mitadizq">
                    <h2>Certificación CSWA</h2>
                    Es una prueba de sus conocimientos en SOLIDWORKS, habilidades de diseño y resolución de 
                    problemas que las empresas necesitan hoy en día. <br> <br>
                    CSWA INCLUYE BÁSICO, INTERMEDIO Y AVANZADO TUTORIAL 3 HORAS Y DERECHO A EXAMEN (1 CÓDIGO INCLUIDO) <br> <br>
                    <b>Duración del examen:</b> 3 horas. <br>
                    <b>Calificación mínima para aprobar:</b> 70% <br>
                    <b>Política de reevaluación:</b> Hay un período mínimo de espera de 14 días entre cada intento 
                    del examen CSWA. <br>
                    <b>Horario:</b> Lunes a viernes de 9 a 7 pm. Sábados de 9 a 2 pm. <br> <br>
                    <b>Objetivo de aprendizaje</b> <br>
                    La Certificación CSWA, avala tus conocimientos prácticos en diseño de piezas 3d,ensambles y 
                    planos de ingeniería. Podrás demostrar tu capacidad de dar soluciones a problemas generales de 
                    diseño 3D con SOLIDWORKS
                </div>
                <div class="w3-half mitadder">
                    <img src="assets/cswp.jpg" alt="" width="100%">
                </div>
            </div>
        </main>
        
        <?php include ('formulario.php'); ?>

    <?php include('footer.html'); ?>
   
</body>
</html>