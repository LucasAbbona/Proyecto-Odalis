<?php
if(isset($_POST['subirFoto'])){
    $foto=$_FILES['foto']['name'];
    $tmpfoto=$_FILES['foto']['tmp_name'];
    $categoria=$_POST['categoria'];
    move_uploaded_file($tmpfoto, "../images/galeria/$foto");
}
include "../classes/connection.class.php";
include "../classes/addImage.class.php";
include "../controller/addImageContr.php";
$add=new GaleryImagesController($foto,$categoria);
$add->AddFotos();
header("Location: ../admin/admin.php?source=all");