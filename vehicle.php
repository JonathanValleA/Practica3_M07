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


    //Mi Parteee

    /*Getter Nom*/
    public function getNom(){
        return $this ->nom;
    }

    // Setter Nom
    public function setNom($nom){
        $this->nom = $nom;
    }
    
    /*Getter Model*/
    public function getModel(){
        return $this -> model;
    }

    //Setter Model
    public function setModel($model){
        $this->model = $model;
    }

    /*Getter Marca*/
    public function getMarca(){
        return $this -> marca;
    }

    //Setter Marca

    public function setMarca($marca){
        $this->marca = $marca;
    }

    /*Getter Cavalls*/
    public function getCavalls(){
        return $this -> cavalls;
    }

    //Setter cavalls
    public function setCavalls($cavalls){
        $this->cavalls = $cavalls;
    }

    /*Getter AñoV*/
    public function getAñoV(){
        return $this -> añoV;   
    }

    //Setter añoV

    public function setAñoV($añoV){
        $this->añoV = $añoV;
    }
    

    //Funcion TO STRING
    public function __toString()
    {
        return  "Nom ". $this.nom . " Model:  " . $this.model . " Marca:  " . $this.marca . " Marca: " . $this.cavalls . " Cavalls: " . $this.añoV ;
    }

    //1era METODO
    function kmRecorregut(){
        $recorregut = rand(0,100);
        return "Los km que ha recorrido el vehiculo son: " . $recorregut;
    }

    //2n METODO
    function vehicleCreat(){
        return $this->model . " " . $this->cavalls;
    }
}
?>
