<?php
class Login extends Connection{
    protected function ServerLogin($correo,$contraseña){
        /* $contraseña= password_hash($contraseña,PASSWORD_DEFAULT);
        $query="INSERT INTO user (correo, contraseña) VALUES ('{$correo}', '{$contraseña}')";
        $registrar=mysqli_query($this->Connect(),$query); */
        $correo=mysqli_real_escape_string($this->Connect(),$correo);
        $contraseña=mysqli_real_escape_string($this->Connect(),$contraseña);
        $query="SELECT * FROM user WHERE correo = '$correo'";
        $loginstmt=mysqli_query($this->Connect(),$query);
        while($row=mysqli_fetch_array($loginstmt)){
            $serverid=$row['user_id'];
            $serverUsuario=$row['usuario'];
            $serverContraseña=$row['contraseña'];
            $serverCorreo=$row['correo'];
            }
            if(password_verify($contraseña,$serverContraseña)){
            session_start();
            $_SESSION['usuario']=$serverUsuario;
            $_SESSION['contraseña']=$serverContraseña;
            $_SESSION['correo']=$serverCorreo;
            $_SESSION['user_id']=$serverid;
            return true;
            }else{
            return false;
            }
    }
    }
