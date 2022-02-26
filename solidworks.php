<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solidworks</title>
    <link rel="stylesheet" href="w3pro.css">
    <link rel="stylesheet" href="estilo.css">
    <script type="text/javascript">
        function verifica()
        {
            if(document.contacto.nombre.value.trim()==""  || document.contacto.email.value.trim()=="" || document.contacto.informacion.value.trim()=="")
            {
                alert("Es necesario escribir tu nombre, e-mail e información adicional");     
            }
            else
            {
                var s = document.contacto.email.value;
                var filter=/^[A-Za-z][A-Za-z0-9_.ñÑ-]*@[A-Za-z0-9_ñÑ-]+\.[A-Za-z0-9_.ñÑ-]+[A-za-z]$/;
                if(filter.test(s))
                {            
                    document.contacto.submit();
                }
                else
                {
                    alert("Por favor, escribe una dirección de e-mail válida");
                }
            }
        }
	</script>
</head>
<body>
    <?php $sec=2; ?>
    <?php include("header.php"); ?>
    <div class="banner-principal" style="height: 600px; background-color:aliceblue">
        <div class="contenido">
            prueba
        </div>
    </div>

    <section id="frase" class="contenido w3-center">
        <h3>Si piensas en diseñar, piensa en SOLIDWORKS, si piensas innovar, piensa en INSOFT</h3>
        Soluciones de diseño en 3D intuitivas que le permiten centrarse en su producto y no en el 
        funcionamiento del software, para producir a mayor velocidad sus diseños.
    </section>


    <section id="rectangulos" class="contenido" style="max-width:1350px">
        <div style="border: 1px solid black;">
            <div class="contenido w3-row">
                <div class="w3-half mitadizq w3-hide-medium w3-hide-large" style="margin-bottom: 21px;">
                    <img src="assets/rectangle.png" alt="">
                </div>
                <div class="w3-half mitadizq">
                    <h2>CAD MECÁNICO EN 3D</h2>
                    <h2><strong>STANDAR</strong></h2>
                    Ofrece acceso a todas las herramientas necesarias para realizar superficies complejas, 
                    chapas desplegadas de chapa metálica y ensamblajes soldados estructurales. Además, incluye 
                    asistentes para automatizar los diseños, realizar análisis de tensión y determinar el 
                    impacto medioambiental de los componentes. <br>
                    <a href="" class="btn">Más información</a>
                </div>
                <div class="w3-half mitadder w3-hide-small">
                    <img src="assets/rectangle.png" alt="">
                </div>
            </div>
        </div>
        <div class="contenido w3-row">
            <br class="w3-hide-small">
            <br class="w3-hide-small">
            <div class="w3-half mitadizq">
                <img src="assets/rectangle.png" alt="">
            </div>
            <div class="w3-half mitadder">
                <h2>CAD MECÁNICO EN 3D</h2>
                <h2><strong>PROFESIONAL</strong></h2>
                SolidWorks Professional contiene bibliotecas de piezas y tornillería, herramientas para 
                utilizar la geometría importada y para buscar errores en los diseños. Además, SolidWorks 
                Professional ofrece un sistema integrado de gestión de datos que almacena de forma segura 
                toda la información del proyecto y registra todas las modificaciones del diseño. <br>
                <a href="" class="btn">Más información</a>
            </div>
        </div>
        <div style="border: 1px solid black;">
            <div class="contenido w3-row">
                <div class="w3-half mitadizq w3-hide-medium w3-hide-large" style="margin-bottom: 21px;">
                    <img src="assets/rectangle.png" alt="">
                </div>
                <div class="w3-half mitadizq">
                        <h2>CAD MECÁNICO EN 3D</h2>
                        <h2><strong>PREMIUM</strong></h2>
                        SOLIDWORKS Premium es una solución de diseño en 3D completa que se suma a las 
                        funciones de SolidWorks Professional junto con las potentes herramientas de simulación, 
                        movimiento y validación de diseños, así como la funcionalidad avanzada de trazado de 
                        recorridos de tuberías y cables, ingeniería inversa, entre otras. <br>
                        <a href="" class="btn">Más información</a>
                    </div>
                    <div class="w3-half mitadder w3-hide-small">
                        <img src="assets/rectangle.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contenido">
        <h3 class="w3-center margensupinf">¿Que incluye este paquete de SOLIDWORKS 3D CAD?</h3>
        <div class="w3-row">
            <div class="w3-half mitadizq">
            Se bassa en las funcionalidades de SOLIDWORKS Profesional con colaboracion de ECAD/MCAD, 
            estimación de costes automatizada , capacidades de colaboración, comprobación del diseño y 
            el dibujo , una amplia y sofisticada biblioteca de componentes, piezas y renderizado avanzado. 
            <br> <br>
            Gestione todos los aspectos de su modelado de piezas y ensamblajes con el sistema de diseño 
            3D de SOLIDWORKS para transformar las ideas y los conceptos en modelos 3D virtuales 
            <br> <br>
            Las bibliotecas CAD de SOLIDWORKS le permiten acceder de forma sencilla, localizar, descargar, 
            guardar y compartir modelos CAD 3D creados previamente y datos CAD que suelen reutilizarse.
            </div>
            <div class="w3-half mitadder">
            La herramienta de análisis de tolerancia TolAnalyst comprueba automáticamente los efectos 
            de las tolerancias en las piezas y los ensamblajes para asegurar un ajuste coherente de los 
            componentes y verificar los esquemas de tolerancias antes de que el producto llegue a la 
            fabricación <br> <br>
            Los fabricantes también pueden utilizar las herramientas de cálculo de costes de SOLIDWORKS 
            para automatizar los procesos de elaboración de presupuestos.
            </div>
        </div>
    </section>


    <section id="paquetes">
        <div class="contenido w3-row w3-center w3-hide-small">
            <div class="w3-third mitadizq">
                <h2>CAD MECÁNICO EN 3D</h2>
                <h2><strong>STANDAR</strong></h2>
            </div>
            <div class="w3-third mitadcentro">
                <h2>CAD MECÁNICO EN 3D</h2>
                <h2><strong>PROFESIONAL</strong></h2>
            </div>
            <div class="w3-third mitadder">
                <h2>CAD MECÁNICO EN 3D</h2>
                <h2><strong>PREMIUM</strong></h2>
            </div>
        </div>
        <div class="contenido w3-row cflex">
            <div class="w3-third mitadizq cflex">
                <h2 class="w3-center w3-hide-medium w3-hide-large">CAD MECÁNICO EN 3D</h2>
                <h2 class="w3-center w3-hide-medium w3-hide-large"><strong>STANDAR</strong></h2>
                <div>
                    <span>CAD en 3D de SOLIDWORKS</span>
                    <span>Modelado de piezas y ensamblajes</span>
                    <span>Dibujos 2D</span>
                    <span>Reutilización y automatización del diseño</span>
                    <span>Colaboración y uso compartido de datos CAD</span>
                    <span>Comprobación de interferencias</span>
                    <span>Herramientas de análisis preliminar</span>
                    <span>Programación de CAM (SOLIDWORKS CAM)</span>
                    <span>Diseño para la fabricación (DFM, del inglés "Design for Manufacturing")</span>
                    <span>Herramientas de productividad</span>
                    <span>Importación y exportación avanzadas de archivos de CAD y 3D Interconnect</span>
                    <span>Exportador Xtended Reality (XR)</span>
                    <a href="" class="btn flotante">Más información</a>
                </div>
            </div>
            <div class="w3-third mitadcentro cflex">
                <br class="w3-hide-medium w3-hide-large">
                <h2 class="w3-center w3-hide-medium w3-hide-large">CAD MECÁNICO EN 3D</h2>
                <h2 class="w3-center w3-hide-medium w3-hide-large"><strong>PROFESIONAL</strong></h2>
                <div>
                    <span>SOLIDWORKS Básico</span>
                    <span>Bibliotecas CAD (SOLIDWORKS Toolbox)</span>
                    <span>Diseño según coste (SOLIDWORKS Costing)</span>
                    <span>Colaboración de ECAD/MCAD (CircuitWorks)</span>
                    <span>Comprobación de los estándares de CAD (Design Checker)</span>
                    <span>Colaboración con eDrawings Professional</span>
                    <span>Análisis automatizado del apilado de tolerancias (TolAnalyst)</span>
                    <span>Renderizado fotorrealista avanzado (SOLIDWORKS Visualize)</span>
                    <span>Gestión de archivos de SOLIDWORKS Ingeniería inversa (ScanTo3D)</span>
                    <a href="" class="btn flotante">Más información</a>
                </div>
            </div>
            <div class="w3-third mitadder cflex">
                <br class="w3-hide-medium w3-hide-large">
                <h2 class="w3-center w3-hide-medium w3-hide-large">CAD MECÁNICO EN 3D</h2>
                <h2 class="w3-center w3-hide-medium w3-hide-large"><strong>PREMIUM</strong></h2>
                <div>
                    <span>SOLIDWORKS Básico</span>
                    <span>SOLIDWORKS Professional</span>
                    <span>Análisis de movimiento basado en el tiempo</span>
                    <span>Análisis estático lineal para piezas y ensamblajes</span>
                    <span>Recorridos de tubos y tuberías</span>
                    <span>Recorridos de cables eléctricos y mazos de cables eléctricos</span>
                    <span>Aplanamiento avanzado de superficies</span>
                    <span>Recorrido de secciones rectangulares y de otros tipos</span>
                    <a href="" class="btn flotante">Más información</a>
                </div>
            </div>
        </div>
    </section>


    <section id="ventas">
        <h3 class="contenido w3-center">Contacta con el área de ventas</h3>
        <a name="scontacto"></a>
    	<?php
	    if(isset($_GET['a']) && $_GET['a']==2 && isset($_POST['email']) && isset($_POST['nombre']) 
        && isset($_POST['informacion']) && trim($_POST['email'])!="" && trim($_POST['nombre'])!="" 
        && trim($_POST['informacion'])!=""){

			if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){	
				$nombre=strip_tags($_POST['nombre']);
				$from = $_POST['email'];
				$email_from = $from;
				$email_txt = "Este es un correo enviado desde el sitio web LOGITRAC<br><br>
                -Nombre: ".$nombre."<br>
                -Apellido: ".$_POST['apellido']."<br>
                "."-E-mail: ".$_POST['email']."<br>
                "."-Empresa: ".strip_tags($_POST['empresa'])."<br>
                "."-Teléfono: ".strip_tags($_POST['telefono'])."<br>
                "."-Productos de interés: ".$_POST['producto']."<br>
                "."-Demo: ".$_POST['demo']."<br>
                "."-Tamaño de flotilla: ".$_POST['flotilla']."<br>
                "."-¿Cómo se enteró?: ".$_POST['como']."<br> <br>
                "."-Información adicional: <br>  
                ".nl2br(strip_tags($_POST['informacion']));
                
					$email_to= "caros.lapso@gmail.com";
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
                    sans-serif\">ventas@pme.com.mx</span></div><br><br><br>";
				
			}
			else
				echo "<br><br><div class=\"aviso\">E-mail no válido.</div><br><br><br>";
	    }
	    else{?>
        <form action="contacto.php?a=2#scontacto" class="contenido" name="contacto" id="contacto" method="POST">
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
                <input type="checkbox" name="capacitacion" id="">
                &nbsp; &nbsp;
                <label for="capacitacion">CAPACITACIÓN</label> <br>
                <input type="checkbox" name="licencias" id="">
                &nbsp; &nbsp;
                <label for="licencias">IMPLEMENTAR LICENCIAS</label>
            </div>
        </form>
        <div class="lnazul">
            <div class="flotante" style="background:white; right:50%; transform:translateX(50%);
            height:10px; width:240px">
                <a onclick="verifica()" class="btn flotante">Enviar</a>
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

    <?php include("footer.html"); ?>
</body>
</html>