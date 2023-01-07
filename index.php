<?php 
    session_start(); 
        ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odalis Alta Costura | Inicio</title>
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <header id="top">
        <nav class="navegacion">
            <div class="logo">
                <img src="./images/logo.png" alt="">
            </div>
            <ul class="secciones" id="secciones">
                <li ><a class="active" href="#">Inicio</a></li>
                <li><a href="./pages/servicios.php">Servicios</a></li>
                <li><a href="./pages/galeria.php">Galeria</a></li>
                <li><a href="./pages/nosotras.php">Nosotras</a></li>
                <li><a href="./pages/contacto.php">Contacto</a></li>
            </ul>
            <button class="responsiveMenu" id="responsiveMenu"><i class="bi bi-list"></i></button>
        </nav>
    </header>
    <div class="fotoPrincipal">
    <div></div>
    </div>
    <section class="HomeServicios">
        <h2>Nuestros Servicios</h2>
        <div class="tarjetasService">
            <div class="bg_tajetas1"></div>
            <div class="textContent">
                <h3>Vestidos de 15</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum .</p>
                <a href="./pages/servicios.html#Servicios15">Mas informacion</a>
            </div>
        </div>
        <div class="tarjetasService">
            <div class="bg_tajetas2">
                <!-- <img src="./images/galeria/Screenshot_20200528-145924_Gallery.jpg" height="100%"  alt=""> -->
            </div>
            <div class="textContent">
                <h3>Disfraces</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum .</p>
                <a href="./pages/servicios.html#Serviciosnovias">Mas informacion</a>
            </div>
        </div>
        <div class="tarjetasService">
            <div class="bg_tajetas3"></div>
            <div class="textContent">
                <h3>Vestidos de Fiesta</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum .</p>
                <a href="./pages/servicios.html#Serviciosfiesta">Mas informacion</a>
            </div>
        </div>
    </section>
    <section class="GaleriaAdvertisement">
        <h2>Mira todo nuestros tabajos en la Galeria</h2>
        <div class="GaleryImageContainer">
        <div class="backdropfilter">
                <a href="./pages/galeria.php">Ir a la Galeria</a>
            </div>
        </div>
    </section>
    <footer>
        <div class="FootLogo">
            <img src="./images/logo.png" alt="">
        </div>
        <div class="FootInfo">
            <h3>Seguinos en</h3>
            <div>
            <a href="https://www.instagram.com/odalis_alta_costura/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://m.facebook.com/profile.php?id=100054330498660&_rdr" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" target="_blank" class="tel"><i class="bi bi-whatsapp"></i></a>
            </div>
            <p>Copyright © 2022 Odalis Alta Costura</p>
        </div>
        <div class="FootFiller"></div>
    </footer>
    <a href="#top" class="backtotop"><i class="bi bi-arrow-up-circle-fill"></i></a>
    <script src="./menu.js"></script>
</body>
</html>