<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capacitación</title>
    <link rel="stylesheet" href="w3pro.css">
    <link rel="stylesheet" href="estilo.css">
    <script src="js/verificar-formulario.js"></script>
</head>
<body id="capacitacion">
    <?php 
        $sec=4;
        $seccion='CAPACITACION';
        $dir='capacitacion.php';
        include('header.php'); 
    ?>
    
    <section id="ventas-capacitacion">
        <div class="banner-principal" style="height: 600px; background-image:url(assets/capacitacion.jpg)">
            <div class="contenido" style="margin-top: 0;height:100%; position:relative">
                <div class="w3-display-middle w3-center">
                    <span>NOMBRE</span> <br>
                    <img src="assets/logo-solidworks.png" alt="">
                </div>
            </div>
        </div>
        <h3 class="contenido w3-center">Contacta con el área de ventas</h3>
        <div class="w3-row contenido">
            <div class="w3-half mitadizq">
                <h2>SOLIDWORKS Básico</h2>
                <b>Objetivo de aprendizaje</b> <br>
                En el curso de SOLIDWORKS Básico aprenderá los conceptos básicos de SOLIDWORKS le enseña 
                a utilizar el software de automatización de diseño mecánico SOLIDWORKS para construir modelos 
                paramétricos de piezas y ensamblajes, así como a realizar dibujos de dichas piezas y ensamblajes.
                <img src="assets/area-ventas.jpg" alt="" width="100%" style="margin: 30px 0">
            </div>
            <div class="w3-half mitadder">
                <div class="w3-row">
                <a name="scontacto"></a>
                    <?php
                    if(isset($_GET['a']) && $_GET['a']==2 && isset($_POST['email']) && isset($_POST['nombre']) 
                    && isset($_POST['producto']) && trim($_POST['email'])!="" && trim($_POST['nombre'])!="" 
                    && trim($_POST['producto'])!=""){

                        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){	
                            $nombre=strip_tags($_POST['nombre']);
                            $from = $_POST['email'];
                            $email_from = $from;
                            $email_txt = "Este es un correo enviado desde el formulario de la sección $seccion<br><br>
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
                    <form action="<?php $dir; ?>?a=2#scontacto" name="contacto" id="contacto" method="POST">
                        <input type="text" name="nombre" placeholder="Nombre completo">
                        <input type="tel" name="telefono" placeholder="Teléfono">
                        <input type="emal" name="email" placeholder="E-mail">
                        <input type="text" name="ciudad" placeholder="Ciudad/País">
                        <input type="text" name="empresa" placeholder="Empresa o particular">
                        <input type="text" name="producto" placeholder="Diseño de producto">
                        <div class="checkboxs">
                            <input type="checkbox" name="capacitacion" id="chkcapacitacion">
                            &nbsp; &nbsp;
                            <label for="chkcapacitacion">CAPACITACIÓN</label> <br>
                            <input type="checkbox" name="licencias" id="chklicencias">
                            &nbsp; &nbsp;
                            <label for="chklicencias">IMPLEMENTAR LICENCIAS</label>
                        </div>
                    </form>
                    <div>
                       <a onclick="verifica()" class="btn">Enviar</a>
                    </div>
                    <div style="margin-top: 15px;">
                        Su información será tratada con confidencialidad lea nuestro <br>
                        <a href="" onclick="privacidad()" style="text-decoration:underline">
                            Aviso de privacidad
                        </a>
                    </div>
                    <?php
                    }?>
                </div>
            </div>
        </div>
    </section>


    <section id=impresiones3d>
        <div class="banner-principal" style="height: 450px; background-image:url(assets/impresion-3d.jpg); margin-bottom:100px">
            <div class="contenido" style="margin-top: 0;height:100%; position:relative">
                <div class="w3-display-middle w3-center">
                    <span>IMPRESIONES&nbsp;3D</span> <br>
                </div>
            </div>
        </div>
        <div class="w3-row contenido" style="margin-bottom: 200px; position:relative">
            <div class="w3-half mitadizq">
                <h2>Impresiones 3D</h2>
                Permiten realizar réplicas, como piezas o maquetas de diseños en 3D creados 
                por medio de SOLIDWORKS u otro CAD 3D, además de soporte para tus proyectos y 
                cotizaciones sin costo <br> <br>
                <b>¿Cómo funciona?</b> <br>
                Un filamento plástico (ABS), se coloca en una boquilla, la cual funde el material y 
                puede desplazarse en tres ejes controlada electrónicamente."
            </div>
            <div class="w3-half mitadder">
                <img src="assets/impresion-3d.jpg" alt="" width="100%">
                <img src="assets/circle.svg" alt="" width="100px" style="position: absolute; bottom:0; right:50px">
            </div>
        </div>
    </section>

    <?php include('footer.html'); ?>
   
</body>
</html>