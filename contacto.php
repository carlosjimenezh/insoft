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
        include('header.php'); 
    ?>

    <section class="contenido" style="margin-top: 200px"> 
        <h3 class="w3-center">Contactanos para saber más de SOLIDWORKS</h3>
        <div class="w3-row">
            <div class="w3-half">
                <strong>Nos encontramos en México, Guadalajara y Monterrey</strong> <br> <br>
                Un representante en ventas se pondrá en contacto contigo para explicarte 
                los beneficios de obtener <b>SOLIDWORKS 2022</b> además de poder visitar nuestras 
                instalaciones y ver por qué somos la mejor opción para ti. <br> <br>
                Nosotros te capacitamos en SOLIDWORKS CAMWORKS y maquinados CNC,tenemos cursos, 
                diplomados, certificados y planes de estudio. <br> <br>
                Venta de licencias de SOLIDWORKS y CAMWORKS. <br> <br>
                Expertos evalúan tus necesidades y/o problemas, contamos con asesorías y soporte técnico. <br> <br>
                Mantenemos buenas instalaciones, material didáctico, software y clases personalizadas 
                para tu aprendizaje.
            </div>
            <div class="w3-half">
                
            </div>
        </div>
    </section>

    <?php include('formulario.php'); ?>
    
    <?php include('footer.html'); ?>
</body>
</html>