<?php

    class Vehicle{

        private $nom;
        private $model;
        private $marca;
        private $cavalls;
        private $añoV;
    
    
    function __construct(){

    }
    function __construct1($nom, $model, $marca, $cavalls, $añoV){
        $this->nom = $nom;
        $this->model = $model;
        $this->marca = $marca;
        $this->cavalls = $cavalls;
        $this->añoV = $añoV;
    }

    function __construct2($model, $marca){
        $this->model = $model;
        $this->marca = $marca;
    }
}
?>
