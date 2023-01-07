<?php
class GaleryImages extends Connection{
    protected function Add($categoria,$imagen){
        $query="INSERT INTO galeria (foto_image, foto_categoria, fecha) VALUES ('$imagen', '$categoria', now())";
        $publicar=mysqli_query($this->Connect(),$query);
    }
    protected function Show($categoria){
        $query="SELECT * FROM galeria WHERE foto_categoria = '$categoria'";
        $mostrar=mysqli_query($this->Connect(),$query);
        while($row=mysqli_fetch_array($mostrar)){
            $GaleriaFoto=$row['foto_image'];
            $FotoCategoria=$row['foto_categoria'];
            echo "<div><img src='../images/galeria/".$GaleriaFoto."' alt'foto de ".$FotoCategoria."'></div>";
        }
    }
    protected function DeleteImg(){
        if(isset($_GET['eliminar'])){
            $id=$_GET['eliminar'];
            $query="DELETE FROM galeria WHERE foto_id = '$id'";
            $eliminar=mysqli_query($this->Connect(),$query);
            header("Location: admin.php?source=all");
            return $eliminar;
        }
    }
    protected function ShowAdmin($categoria){
        $query="SELECT * FROM galeria WHERE foto_categoria = '$categoria'";
        $mostrar=mysqli_query($this->Connect(),$query);
        if(mysqli_num_rows($mostrar)!=0){
        while($row=mysqli_fetch_array($mostrar)){
            $id=$row['foto_id'];
            $foto=$row['foto_image'];
            $fecha=$row['fecha'];
            echo 
            "<div class='ViewFotos'>
            <img src='../images/galeria/$foto' />
            <div>
            <h3>Publicado: $fecha</h3>
            <a href='admin.php?source=all&eliminar=$id' name='eliminar'>Eliminar</a>
            </div>
            </div>";
        }}else{
            echo "<div class='ViewFotos'>
            <h1 class='noContenido'>No hay imagenes subidas en esta seccion</h1>
            </div>";
        }
        $this->DeleteImg();
    }
    
}