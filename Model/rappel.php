<?php
class Rappel{
    private int $id_rappel;
    private DateTime $date_expiration;
    private string $statut;

    public function __construct(int $id_rappel, DateTime $date_expiration, string $statut){
        $this->id_rappel = $id_rappel;
        $this->date_expiration = $date_expiration;
        $this->statut = $statut;
    }

    public function getId_rappel(){ return $this-> id_rappel;}
    public function getDate_expiration(){ return $this->date_expiration;}
    public function getStatut(){ return $this->statut;}
    
    public function setId_rappel(int $id_rappel){ $this->id_rappel = $id_rappel;}
    public function setDate_expiration(DateTime $date_expiration){ $this->date_expiration = $date_expiration;}
    public function setStatut(string $statut){ $this->statut = $statut;}

    public function check(){
        require 'connex_db.php'
    }
}
?>