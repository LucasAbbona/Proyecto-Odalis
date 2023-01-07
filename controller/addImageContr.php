<?php
class GaleryImagesController extends GaleryImages{
    public function __construct($imagen,$categoria)
    {
        $this->imagen=$imagen;
        $this->categoria=$categoria;
    }
    public function ShowFotos(){
        $this->Show($this->categoria);
    }
    public function AddFotos(){
        $this->Add($this->categoria,$this->imagen);
    }
    public function ShowAdminFotos(){
        $this->ShowAdmin($this->categoria);
    }
}