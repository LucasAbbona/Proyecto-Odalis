<?php error_reporting(0);
session_start(); 
ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odalis Alta Costura | Nosotras</title>
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
                <li><a href="./servicios.php">Servicios</a></li>
                <li><a href="./galeria.php">Galeria</a></li>
                <li><a href="#" class="active">Nosotras</a></li>
                <li><a href="./contacto.php">Contacto</a></li>
                <?php 
                if($_SESSION['usuario']=="Odalis"){ echo "<li><a href='../admin/admin.php'><i class='icono bi bi-person-fill'></i></a></li>";
                }else{ echo ""; } ?>
            </ul>
            <button class="responsiveMenu" id="responsiveMenu"><i class="bi bi-list"></i></button>
        </nav>
    </header>
    <h1>Sobre Nosotras</h1>
    <div class="nosotrosCard">
        <div class="nosotrosContent">
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum .It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).There are many variations of passages of Lorem Ipsum available, but the majority have suffered.
                Alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p> 
        </div>
        <div class="nosotrosImg">
            <img src="../images/logoBlack.png" alt="">
        </div>
    </div>
    <section class="followNosotros">
        <h3>Seguinos en nuestras redes</h3>
        <div>
            <a href="https://www.instagram.com/odalis_alta_costura/" target="_blank"><i class="bi bi-instagram" ></i></a>
            <a href="https://m.facebook.com/profile.php?id=100054330498660&_rdr" target="_blank"><i class="bi bi-facebook"></i></a>
        </div>
    </section>
    <footer>
        <div class="FootLogo">
            <img src="../images/logo.png" alt="">
        </div>
        <div class="FootInfo">
            <h3>Seguinos en</h3>
            <div>
            <a href="https://www.instagram.com/odalis_alta_costura/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://m.facebook.com/profile.php?id=100054330498660&_rdr" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="#" class="tel" target="_blank"><i class="bi bi-whatsapp"></i></a>
            </div>
            <p>Copyright © 2022 Odalis Alta Costura</p>
        </div>
        <div class="FootFiller"></div>
    </footer>
    <a href="#top" class="backtotop"><i class="bi bi-arrow-up-circle-fill"></i></a>
    <script src="../menu.js"></script>
</body>
</html>