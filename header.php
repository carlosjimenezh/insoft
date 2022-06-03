<header class="w3-top">
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
                    <a href="cursos.php" class="w3-bar-item">
                        Cursos 
                    </a>
                    <a href="especialidades.php" class="w3-bar-item">
                        Diplomados
                    </a>
                    <a href="certificados.php" class="w3-bar-item">
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
            <div class="w3-dropdown-hover ocultar-menu">
                <a href="contacto.php" class="w3-bar-item w3-hide-small <?php if(isset($sec) && $sec==6){ echo "activo";}?>">CONTACTO</a>
            </div>
            <a href="javascript:void(0)" class="w3-hide-large w3-hide-medio" 
            style="font-size: 2.5em" onclick="mostrarMenu()">
                &#9776;
            </a>
        </div>

        <!-- collapsing menu -->
        <div id="collapsing-menu" class="w3-bar-block w3-hide w3-hide-medio w3-hide-large contenido txtblanco">
            <div class="w3-bar-item <?php if(isset($sec) && $sec==1){ echo "activo";}?>">
                <a href="nosotros.php">NOSOTROS</a>
            </div>
            <div class="w3-bar-item <?php if(isset($sec) && $sec==2){ echo "activo";}?>">
                <a href="solidworks.php">SOLIDWORKS</a>
                <a class="flecha" onclick="show('menu-solidworks')"></a>
            </div>
            <div class="hide" id="menu-solidworks">
                <a href="">Soluciones CAD 3D</a>
                <a href="">Solidworks Simulacion</a>
                <a href="">Solidworks SimulacionFflow</a>
                <a href="">Solidworks Plastics</a>
                <a href="">Electrico</a>
                <a href="">Gestion de datos</a>
            </div>
            <div class="w3-bar-item <?php if(isset($sec) && $sec==3){ echo "activo";}?>">
                <a href="camworks.php">CAMWORKS</a>
                <a class="flecha" onclick="show('menu-camworks')"></a>
            </div>
            <div class="hide" id="menu-camworks">
                <a href="">Solidworks CAM</a>
                <a href="">Camworks</a>
            </div>
            <div class="w3-bar-item <?php if(isset($sec) && $sec==4){ echo "activo";}?>">
                <a href="capacitacion.php">CAPACITACIÓN</a>
                <a class="flecha" onclick="show('menu-capacitacion')"></a>
            </div>
            <div class="hide" id="menu-capacitacion">
                <a href="cursos.php" class="<?php if(isset($seccion) && $seccion=='CURSOS'){ echo "activo-small";}?>">Cursos</a>
                <a href="especialidades.php" class="<?php if(isset($seccion) && $seccion=='ESPECIALIDADES'){ echo "activo-small";}?>">Diplomados</a>
                <a href="certificados.php" class="<?php if(isset($seccion) && $seccion=='CERTIFICADOS'){ echo "activo-small";}?>">Certificaciones</a>
            </div>
            <div class="w3-bar-item <?php if(isset($sec) && $sec==5){ echo "activo";}?>">
                <a href="3dexperience.php">3D EXPERIENCE</a>
                <a class="flecha" onclick="show('menu-3dexperience')"></a>
            </div>
            <div class="hide" id="menu-3dexperience">
                <a href="">3D Experience Solidworks</a>
                <a href="">3D Creator</a>
                <a href="">3D Sculptor</a>
                <a href="">Collaborative Business Innovator</a>
                <a href="">Collaborative Industry Innovator</a>
            </div>
            <div class="w3-bar-item <?php if(isset($sec) && $sec==6){ echo "activo";}?>">
                <a href="contacto.php">CONTACTO</a>    
            </div>
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

            function show (menu) {
                x = document.getElementById(menu);
                if (x.className.indexOf('show') == -1) {
                    x.className += ' show';
                } else {
                    x.className = x.className.replace(' show', '');
                }
            }
        </script>
    </nav>
</header>

<a href="#" class="escribenos" target="_blank">
    <img class="flotante" src="assets/whatsapp.svg" alt="">
    ¡Escribenos por WhatsApp!
</a>

