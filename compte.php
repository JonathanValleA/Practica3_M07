<?php
class compte{
    private $nom;
    private $cognom;
    private $cognom2;
    private $dinersI;


    function constructor(){

    }
    function constructor2($nom, $cognom, $cognom2, $dinersI){
        $this->nom = $nom;
        $this->cognom = $cognom;
        $this->cognom2 = $cognom2;
        $this->dinersI = $dinersI;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getCognom(){
        return $this->cognom;
    }

    public function setCognom($cognom){
        $this->cognom = $cognom;
    }

    public function getCognom2(){
        return $this->cognom2;
    }

    public function setCognom2($cognom2){
        $this->cognom2 = $cognom2;
    }

    public function getDinersI(){
        return $this->dinersI;
    }

    public function setDinersI($dinersI){
        $this->dinersI = $dinersI;
    }
}
?>