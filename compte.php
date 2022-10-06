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

}
?>