<?php
class compte{
    private $nom;
    private $cognom;
    private $cognom2;
    private $dinersI;


    function __construct1(){

    }
    function __construct($nom, $cognom, $cognom2, $dinersI){
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
    function quitar($dinersfuera){
        $fuera=$this->getDinersI();
        $fuera-=$dinersfuera;
        $this->setDinersI($fuera);
    }
    function agregar($dinersagregado){
        $agregar=$this->getDinersI();
        $agregar+=$dinersagregado;
        $this->setDinersI($agregar);
    }
}
$cuenta = new Compte("Jonathan", "Valle", "Alfaro", 2500);
echo "<p><b>- Cuenta Inicial: </b>" . $cuenta->getDinersI() . "</p>";
$cuenta->quitar(100);
echo "<p><b>- Saldo Retirado: </b>" .$cuenta->getDinersI() . "</p>";
$cuenta->agregar(450);
echo "<p><b>- Saldo Añadido: </b>" . $cuenta->getDinersI() . "</p>";

?>