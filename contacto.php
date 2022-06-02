<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="w3pro.css">
    <link rel="stylesheet" href="estilo.css">
    <script src="js/verificar-formulario.js"></script>
</head>
<body id="contacto">
    <?php
        $sec = 6; 
        $seccion = 'CONTACTO';
        $dir = 'contacto.php';
        include('header.php'); 
    ?>

    <section class="contenido" style="margin-top: 200px"> 
        <h3 class="w3-center" style="margin-bottom: 50px">Contactanos para saber más de SOLIDWORKS</h3>
        <div class="w3-row">
            <div class="w3-half">
                <strong>Nos encontramos en México, Guadalajara y Monterrey</strong> <br> <br>
                Un representante en ventas se pondrá en contacto contigo para explicarte 
                los beneficios de obtener <b>SOLIDWORKS 2022</b> además de poder visitar nuestras 
                instalaciones y ver por qué somos la mejor opción para ti. <br> <br>
                Nosotros te capacitamos en <b>SOLIDWORKS CAMWORKS</b> y maquinados CNC,tenemos cursos, 
                diplomados, certificados y planes de estudio. <br> <br>
                Venta de licencias de <b>SOLIDWORKS</b> y <b>CAMWORKS.</b> <br> <br>
                Expertos evalúan tus necesidades y/o problemas, contamos con asesorías y soporte técnico. <br> <br>
                Mantenemos buenas instalaciones, material didáctico, software y clases personalizadas 
                para tu aprendizaje.
            </div>
            <div class="w3-half">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14934.963856200986!2d-103.3820267!3d20.6394127!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b24c85af2b7f%3A0xdb01669508da6b57!2sGrupo%20Insoft!5e0!3m2!1sen!2smx!4v1654181754322!5m2!1sen!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <?php include('formulario.php'); ?>
    
    <?php include('footer.html'); ?>
</body>
</html>