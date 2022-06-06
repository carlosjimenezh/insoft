<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="w3pro.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        $sec = 1; 
        include('header.php'); 
    ?>

    <section id="nosotros">
        <div class="banner-principal" style="height: 600px; background-image:url(assets/area-ventas.jpg)">
            <div class="contenido" style="margin-top: 0;height:100%; position:relative"> 
                <div class="w3-display-middle w3-center">
                    <span>NOSOTROS</span> <br>
                    <img src="assets/logo-solidworks.svg" class="logo" alt="">
                </div>
            </div>
        </div>
        <div class="w3-row contenido"> 
            <div class="w3-half w3-center mitadizq">
                <div style="max-width: 400px; margin:auto">
                    <h2><strong>MISIÓN</strong></h2>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione accusamus in laborum voluptatum quidem, neque quod numquam voluptates atque similique ducimus totam explicabo quas commodi? Vero accusamus distinctio aut voluptatum.
                </div>
            </div>
            <div class="w3-half w3-center mitadder">
                <div style="max-width: 400px; margin:auto">
                    <h2><strong>VISIÓN</strong></h2>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique consectetur placeat vel esse ducimus rerum sit eos officiis assumenda nobis nostrum molestias ab pariatur nihil perspiciatis, nemo sed aperiam tempore!
                </div>
            </div>
        </div>
    </section>
    

    <?php include('footer.html'); ?>
</body>
</html>