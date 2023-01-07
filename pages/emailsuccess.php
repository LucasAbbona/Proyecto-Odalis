<?php
error_reporting(0);
session_start(); 
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odalis Alta Costura | Contacto</title>
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/pagesStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <header>
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
                <li><a href="./nosotras.php">Nosotras</a></li>
                <li><a href="./contacto.php" >Contacto</a></li>
                <?php 
                if($_SESSION['usuario']=="Odalis"){ echo "<li><a href='../admin/admin.php'><i class='icono bi bi-person-fill'></i></a></li>";
                }else{ echo ""; } ?>
            </ul>
            <button class="responsiveMenu" id="responsiveMenu"><i class="bi bi-list"></i></button>
        </nav>
    </header>
    <div class="emailMessage">
        <h2><i class="bi bi-check-circle-fill"></i> Consulta Enviada Correctamente</h2>
    <p>Se ha enviado el correo satisfactoriamente, proximamente nuestro personal se pondra en contacto con usted por su consulta.</p>
    <img src="../images/logoBlack.png" alt="">
    </div>
    
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
    <script src="../menu.js"></script>
</body>
</html>