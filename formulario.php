<section id="ventas">
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
        <h3 class="contenido w3-center">Contacta con el área de ventas</h3>
        <form action="<?php $dir;?>?a=2#scontacto" class="contenido" name="contacto" id="contacto" method="POST">
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