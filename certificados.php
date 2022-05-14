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
        $dir='cursos.php';
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
        <section id="ventas">
        <a name="scontacto-certificados"></a>
            <?php
            if(isset($_GET['a']) && $_GET['a']==2 && isset($_POST['email']) && isset($_POST['nombre']) 
            && isset($_POST['producto']) && trim($_POST['email'])!="" && trim($_POST['nombre'])!="" 
            && trim($_POST['producto'])!=""){

                if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){	
                    $nombre=strip_tags($_POST['nombre']);
                    $from = $_POST['email'];
                    $email_from = $from;
                    $email_txt = "Este es un correo enviado desde el formulario web de SOLIDWORKS<br><br>
                    &middot; Nombre: ".$nombre."<br>
                    &middot; E-mail: ".$_POST['email']."<br>
                    &middot; Empresa: ".strip_tags($_POST['empresa'])."<br>
                    &middot; Teléfono: ".strip_tags($_POST['telefono'])."<br>
                    &middot; Diseño de producto: ".strip_tags($_POST['producto'])."<br><br>";
                    
                    if($_POST['capacitacion'] || $_POST['licencias']){
                        $email_txt.="INTERÉS:<br>";
                        if($_POST['capacitacion'])
                            $email_txt.="- Capacitación<br>";
                        if($_POST['licencias'])
                            $email_txt.="- Implementar licencias<br>";
                    }
                    
                    
                        $email_to= "carlosejimenezh95@gmail.com";
                        $email_subject = "contacto de ".$nombre;
                    
                    $headers = "From: ".$email_from;
                    
                    $semi_rand = md5(time());
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
                    
                    $headers .= "\nMIME-Version: 1.0\n" . 
                                "Content-Type: multipart/mixed;\n" . 
                                " boundary=\"{$mime_boundary}\"";  
                    $email_message .= $email_txt. "\n\n" . 
                                    "--{$mime_boundary}\n" . 
                                    "Content-Type:text/html; charset=\"utf-8\"\n" . 
                                "Content-Transfer-Encoding: 7bit\n\n" . 
                    $email_txt . "\n\n";  
                    
                    $data = chunk_split(base64_encode($data)); 
                    
                    $ok = @mail($email_to, $email_subject, $email_message, $headers); 
                    if($ok)
                        echo "<br><br><div class=\"aviso txtazul\">Gracias por escribirnos,<br>
                        nos pondremos en contacto lo antes posible.</div><br><br><br>";
                    else
                        echo "<br><br><div class=\"aviso txtazul\">Hubo un error al enviar su mensaje, 
                        inténtelo de nuevo o escríbanos a <span style=\"font-family:arial, 
                        sans-serif\">ventas@.com</span></div><br><br><br>";
                    
                }
                else
                    echo "<br><br><div class=\"aviso\">E-mail no válido.</div><br><br><br>";
            }
            else{?>
            <h3 class="contenido w3-center">Contacta con el área de ventas</h3>
            <form action="<?php $dir;?>?a=2#scontacto-certificados" class="contenido" name="contacto-certificados" id="contacto-certificados" method="POST">
                <div class="w3-row">
                    <div class="w3-half mitadizq">
                        <input type="text" name="nombre" placeholder="Nombre completo">
                        <input type="tel" name="telefono" placeholder="Teléfono">
                        <input type="emal" name="email" placeholder="E-mail">
                    </div>
                    <div class="w3-half mitadder">
                        <input type="text" name="ciudad" placeholder="Ciudad/País">
                        <input type="text" name="empresa" placeholder="Empresa o particular">
                        <input type="text" name="producto" placeholder="Diseño de producto">
                    </div>
                </div>
                <div class="checkboxs">
                    <input type="checkbox" name="capacitacion" id="chkcapacitacion">
                    &nbsp; &nbsp;
                    <label for="chkcapacitacion">CAPACITACIÓN</label> <br>
                    <input type="checkbox" name="licencias" id="chklicencias">
                    &nbsp; &nbsp;
                    <label for="chklicencias">IMPLEMENTAR LICENCIAS</label>
                </div>
            </form>
            <div class="lnazul">
                <div class="flotante" style="background:white; right:50%; transform:translateX(50%);
                height:10px; width:240px">
                    <a onclick="verifica('contacto-certificados')" class="btn flotante">Enviar</a>
                </div>
            </div>
            <?php
            }?>
            
            <div class="contenido w3-center">
                Su información será tratada con confidencialidad lea nuestro <br>
                <a href="" onclick="privacidad()" style="text-decoration:underline">
                    Aviso de privacidad
                </a>
            </div>
        </section>
    </section>


    <?php include('footer.html'); ?>
   
</body>
</html>