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

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getCognom()
    {
        return $this->cognom;
    }

    /**
     * @param mixed $cognom
     */
    public function setCognom($cognom): void
    {
        $this->cognom = $cognom;
    }

    /**
     * @return mixed
     */
    public function getCognom2()
    {
        return $this->cognom2;
    }

    /**
     * @param mixed $cognom2
     */
    public function setCognom2($cognom2): void
    {
        $this->cognom2 = $cognom2;
    }

    /**
     * @return mixed
     */
    public function getDinersI()
    {
        return $this->dinersI;
    }

    /**
     * @param mixed $dinersI
     */
    public function setDinersI($dinersI): void
    {
        $this->dinersI = $dinersI;
    }

}
?>