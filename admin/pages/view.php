<?php
include "../classes/connection.class.php";
include "../classes/addImage.class.php";
include "../controller/addImageContr.php";

$admin15= new GaleryImagesController('','15');
?>
<h1 class="admin_titulo">Todas las fotos Publicadas</h1>
<h3 class="ViewSubtitles">15</h3>
<div class="ViewContainer">
    <?php $admin15->ShowAdminFotos(); ?>
</div>
<h3 class="ViewSubtitles">Fiesta</h3>
<div class="ViewContainer">
    <?php $adminfiesta=new GaleryImagesController('','Fiesta');
          $adminfiesta->ShowAdminFotos(); ?>
</div>
<h3 class="ViewSubtitles">Novias</h3>
<div class="ViewContainer">
    <?php $adminNovias=new GaleryImagesController('','Novias');
          $adminNovias->ShowAdminFotos(); ?>
</div>
<h3 class="ViewSubtitles">Disfraces</h3>
<div class="ViewContainer">
    <?php $adminDisfraces=new GaleryImagesController('','Disfraces');
          $adminDisfraces->ShowAdminFotos(); ?>
</div>

