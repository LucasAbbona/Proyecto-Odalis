<?php

?>
<h1 class="admin_titulo">Agregar foto a la galeria</h1>
<form class="formularioGaleria" action="../includes/add.inc.php" method="post" enctype="multipart/form-data">
    <label for="">Elegir Categoria</label>
    <select name="categoria">
        <option value="15">15</option>
        <option value="Novias">Novias</option>
        <option value="Fiesta">Fiesta</option>
        <option value="Disfraces">Disfraces</option>
    </select>
    <label for="">Selecionar imagen</label>
    <input type="file" name="foto">
    <input type="submit" name="subirFoto" class="SubirBtn" value="Subir Foto">
</form>