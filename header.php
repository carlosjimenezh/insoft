<header>
    <div class="contenido contactos txtazul">
        <div class="w3-right">
            <a href="">
                (33)&nbsp;3124&nbsp;3922
            </a>
            <a href="">
                (55)&nbsp;4612&nbsp;0706
            </a>
            <a href="">
                contacto@insoftnc.com
            </a>
        </div>
    </div>
    <nav class="w3-bar">
        <div class="contenido txtblanco">
            <a href="index.php" class="w3-left">
                <img src="assets/logo-insoft.svg" alt="" style="width: 150px;">
            </a>
            <div class="w3-dropdown-hover ocultar-menu">
                <a href="nosotros.php" class="w3-bar-item w3-hide-small <?php if(isset($sec) && $sec==1){ echo "activo";}?>">NOSOTROS</a>
                <div class="w3-dropdown-content">
                    <a href="" class="w3-bar-item">
                        Instalaciones
                    </a>
                    <a href="" class="w3-bar-item">
                        Misión y visión
                    </a>
                </div>
            </div>
            <div class="w3-dropdown-hover ocultar-menu">
                <a href="solidworks.php" class="w3-bar-item w3-hide-small <?php if(isset($sec) && $sec==2){ echo "activo";}?>">SOLIDWORKS</a>
                <div class="w3-dropdown-content">
                    <a href="" class="w3-bar-item">
                        Soluciones CAD 3D
                    </a>
                    <a href="" class="w3-bar-item">
                        Solidworks Simulacion
                    </a>
                    <a href="" class="w3-bar-item">
                        Solidworks&nbsp;SimulacionFflow
                    </a>
                    <a href="" class="w3-bar-item">
                        Solidworks Plastics
                    </a>
                    <a href="" class="w3-bar-item">
                        Electrico
                    </a>
                    <a href="" class="w3-bar-item">
                        Gestion de datos
                    </a>
                </div>
            </div>
            <div class="w3-dropdown-hover ocultar-menu">
                <a href="camworks.php" class="w3-bar-item w3-hide-small <?php if(isset($sec) && $sec==3){ echo "activo";}?>">CAMWORKS</a>
                <div class="w3-dropdown-content">
                    <a href="" class="w3-bar-item">
                        Solidworks CAM
                    </a>
                    <a href="" class="w3-bar-item">
                        Camworks
                    </a>
                </div>
            </div>
            <div class="w3-dropdown-hover ocultar-menu">
                <a href="capacitacion.php" class="w3-bar-item w3-hide-small <?php if(isset($sec) && $sec==4){ echo "activo";}?>">CAPACITACIÓN</a>
                <div class="w3-dropdown-content">
                    <a href="" class="w3-bar-item">
                        Cursos 
                    </a>
                    <a href="" class="w3-bar-item">
                        Diplomados
                    </a>
                    <a href="" class="w3-bar-item">
                        Certificaciones
                    </a>
                </div>
            </div>
            <div class="w3-dropdown-hover ocultar-menu">
                <a href="3dexperience.php" class="w3-bar-item w3-hide-small <?php if(isset($sec) && $sec==5){ echo "activo";}?>">3D EXPERIENCE</a>
                <div class="w3-dropdown-content">
                    <a href="" class="w3-bar-item">
                        3D Experience solidworks
                    </a>
                    <a href="" class="w3-bar-item">
                        3D Creator
                    </a>
                    <a href="" class="w3-bar-item">
                        3D Sculptor
                    </a>
                    <a href="" class="w3-bar-item">
                        Collaborative&nbsp;Business&nbsp;Innovator
                    </a>
                    <a href="" class="w3-bar-item">
                        Collaborative Industry Innovator
                    </a>
                </div>
            </div>
            <div class="ocultar-menu">
                <a href="contacto.php" class="w3-bar-item w3-hide-small <?php if(isset($sec) && $sec==6){ echo "activo";}?>">CONTACTO</a>
            </div>
            <a href="javascript:void(0)" class="w3-hide-large w3-hide-medio" 
            style="font-size: 2.5em" onclick="mostrarMenu()">
                &#9776;
            </a>
        </div>

        <!-- collapsing menu -->
        <div id="collapsing-menu" class="w3-bar-block w3-hide w3-hide-medio w3-hide-large contenido txtblanco">
            <a href="nosotros.php" class="w3-bar-item <?php if(isset($sec) && $sec==1){ echo "activo";}?>">NOSOTROS</a>
            <a href="solidworks.php" class="w3-bar-item <?php if(isset($sec) && $sec==2){ echo "activo";}?>">SOLIDWORKS</a>
            <a href="camworks.php" class="w3-bar-item <?php if(isset($sec) && $sec==3){ echo "activo";}?>">CAMWORKS</a>
            <a href="capacitacion.php" class="w3-bar-item <?php if(isset($sec) && $sec==4){ echo "activo";}?>">CAPACITACIÓN</a>
            <a href="3dexperience.php" class="w3-bar-item <?php if(isset($sec) && $sec==5){ echo "activo";}?>">3D EXPERIENCE</a>
            <a href="contacto.php" class="w3-bar-item <?php if(isset($sec) && $sec==6){ echo "activo";}?>">CONTACTO</a>    
        </div>
        <script>
            function mostrarMenu() {
                var x = document.getElementById("collapsing-menu");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else { 
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>
    </nav>
</header>

<a href="#" class="escribenos" target="_blank">
    <img class="flotante" src="assets/whatsapp.svg" alt="">
    ¡Escribenos por WhatsApp!
</a>

