<?php
class Type_materiel
{
    private int $id_materiel;
    private string $text;
    
    public function __construct(int $id_materiel, string $text){
        $this->id_materiel = $id_materiel;
        $this->text = $text;
    }
    public function getIdMateriel() {return $this-> id_materiel;}
    public function getText(){return $this->text;}
    public function setMateriel(int $materiel) {$this->materiel = $materiel;} 
    public function settext(string $text) {$this->text = $text;}
}
?>