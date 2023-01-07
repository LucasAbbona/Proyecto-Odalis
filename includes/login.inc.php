<?php
if(isset($_POST['Login'])){
    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];
}

include "../classes/connection.class.php";
include "../classes/login.class.php";
include "../controller/loginContr.php";

$log=new LoginContrl($correo,$contraseña);
$log->LogUser();