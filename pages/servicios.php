<?php error_reporting(0);
session_start(); 
ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odalis Alta Costura | Servicios</title>
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/pagesStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <header id="top">
    <nav class="navegacion">
            <div class="logo">
                <img src="../images/logo.png" alt="">
            </div>
            <ul class="secciones" id="secciones">
                <?php if(isset($_SESSION['usuario'])){
                    echo "<li ><a href='../indexAdmin.php'>Inicio</a></li>";
                }else{
                    echo "
                    <li ><a href='../index.php'>Inicio</a></li>";
                } ?>
                <li><a href="#" class="active">Servicios</a></li>
                <li><a href="./galeria.php">Galeria</a></li>
                <li><a href="./nosotras.php">Nosotras</a></li>
                <li><a href="./contacto.php">Contacto</a></li>
                <?php 
                if($_SESSION['usuario']=="Odalis"){ echo "<li><a href='../admin/admin.php'><i class='icono bi bi-person-fill'></i></a></li>";
                }else{ echo ""; } ?>
            </ul>
            <button class="responsiveMenu" id="responsiveMenu"><i class="bi bi-list"></i></button>
        </nav>
    </header>
    <h1>Nuestros Servicios</h1>
    <h3 class="ServiceTitle">Vestidos de 15</h3>
    <div class="serviciosCard">
        <div class="servicios_img">
            <img src="../images/galeria/WhatsApp Image 2023-01-03 at 23.40.57.jpeg" alt="">
        </div>
        <div class="servicios_content" id="Servicios15">
            <h3>Vestidos de 15</h3>
            <p>  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum .It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
            <p>Alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
        </div>
    </div>
    <h3 class="ServiceTitle">Vestidos de Novia</h3>
    <div class="serviciosCard">
        <div class="servicios_content" id="Serviciosnovias">
            <h3>Vestidos de Novia</h3>
            <p>  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum .It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
            <p>Alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
        </div>
        <div class="servicios_img imagen1">
            <img src="../images/galeria/WhatsApp Image 2023-01-03 at 23.44.49.jpeg" alt="">
        </div>
    </div>
    <h3 class="ServiceTitle">Vestidos de Fiesta</h3>
    <div class="serviciosCard">
        <div class="servicios_img">
            <img src="../images/galeria/20211109_164620.jpg" alt="">
        </div>
        <div class="servicios_content" id="Serviciosfiesta">
            <h3>Vestidos de Fiesta</h3>
            <p>  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum .It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
            <p>Alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
        </div>
    </div>
    <h3 class="ServiceTitle">Disfraces</h3>
    <div class="serviciosCard" id="Serviciosdisfraces">
        <div class="servicios_content">
            <h3>Disfraces</h3>
            <p>  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum .It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
            <p>Alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
        </div>
        <div class="servicios_img imagen2">
            <img src="../images/galeria/IMG-20191029-WA0045.jpg" alt="">
        </div>
    </div>

    <footer>
        <div class="FootLogo">
            <img src="../images/logo.png" alt="">
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
    <script src="../menu.js"></script>
</body>
</html>