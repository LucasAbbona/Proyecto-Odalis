<?php
if(isset($_POST['Enviado'])){
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $asunto=$_POST['asunto'];
    $consulta=$_POST['consulta'];
}
$header="From {$nombre}"."\r\n". "CC:{$correo}"."\r\n"."Tel:{$telefono}";
mail("labombalucas@hotmail.com",$asunto,$consulta,$header);
header("Location: ../pages/emailsuccess.html");