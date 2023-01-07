<?php
class LoginContrl extends Login{
    public function __construct($correo,$contraseña){
        $this->correo=$correo;
        $this->contraseña=$contraseña;
    }
    public function LogUser(){
        if($this->ServerLogin($this->correo,$this->contraseña)){
            header("Location: ../indexAdmin.php");
        }else{
            header("Location: ../login.html");
        }
    }
}