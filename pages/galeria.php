<?php error_reporting(0);
session_start(); 
ob_start();
include "../classes/connection.class.php";
include "../classes/addImage.class.php";
include "../controller/addImageContr.php"; 
$Quince=new GaleryImagesController('','15'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odalis Alta Costura | Galeria</title>
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
                <li><a href="#" class="active">Galeria</a></li>
                <li><a href="./nosotras.php">Nosotras</a></li>
                <li><a href="./contacto.php">Contacto</a></li>
                <?php 
                if($_SESSION['usuario']=="Odalis"){ echo "<li><a href='../admin/admin.php'><i class='icono bi bi-person-fill'></i></a></li>";
                }else{ echo ""; } ?>
            </ul>
            <button class="responsiveMenu" id="responsiveMenu"><i class="bi bi-list"></i></button>
        </nav>
    </header>
    <h1>Galeria</h1>
    <div class="GaleriaFiltros">
        <p>Filtros</p>
        <a href="#15">15</a>
        <a href="#novias">Novias</a>
        <a href="#fiesta">Fiesta</a>
        <a href="#disfraces">Disfraces</a>
    </div>
    <section class="GaleriaImg">
        <h2 id="15">Vestidos de 15</h2>
        <div class="ImagesGL">
            <?php $Quince->ShowFotos(); ?>
        </div>
        <h2 id="novias" class="GaleriaTitulos">Vestidos de Novia</h2>
        <div class="ImagesGL">
            <?php $novias=new GaleryImagesController('','Novias');
                  $novias->ShowFotos(); ?>
        </div>
        <h2 id="fiesta" class="GaleriaTitulos">Vestidos de Fiesta</h2>
        <div class="ImagesGL">
        <?php $fiesta=new GaleryImagesController('','Fiesta');
              $fiesta->ShowFotos(); ?>
        </div>
        <h2 id="disfraces" class="GaleriaTitulos">Disfraces</h2>
        <div class="ImagesGL">
        <?php $disfraces=new GaleryImagesController('','Disfraces');
              $disfraces->ShowFotos(); ?>
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