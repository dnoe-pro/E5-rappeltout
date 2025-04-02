<?php

class Document
{
    //attributs
    private $num_doc;
    private $date_exp;
    private $ref_materiel;
    //Constructeur  
    public function __construct($date_exp, $ref_materiel, $num_doc = null, )
    {
        if ($num_doc != null) {
            $this->num_doc = $num_doc;
        }
        $this->date_exp = $date_exp;
        $this->ref_materiel = $ref_materiel;

    }
    //accesseurs
    public function getDoc()
    {
        return $this->num_doc;
    }
    public function setDoc($num_doc)
    {
        $this->num_doc = $num_doc;
    }
    public function getDate_exp()
    {
        return $this->date_exp;
    }
    public function setDate_exp($date_exp)
    {
        $this->date_exp = $date_exp;
    }
    public function getRef_materiel()
    {
        return $this->ref_materiel;
    }
    public function setRef_materiel($ref_materiel)
    {
        $this->ref_materiel = $ref_materiel;
    }

    public function CreateDocument()
    {
        include 'connex_db.php';
        $req = 'INSERT INTO document(date_exp, ref_materiel) VALUES(:date_exp, :ref_materiel);';
        $stmt = $connexion->prepare($req);
        $stmt->bindParam(':date_exp', $this->date_exp, PDO::PARAM_STR);
        $stmt->bindParam(':ref_materiel', $this->ref_materiel, PDO::PARAM_STR);
        $stmt->execute();
    }
    public function UpdateDocument()
    {
        include 'connex_db.php';
        $req = "UPDATE document SET date_exp = :date_exp  WHERE ref_materiel = :valeur;";
        $stmt = $connexion->prepare($req);
        //$stmt->bindParam(':num_doc', $this->num_doc);
        $stmt->bindParam(':date_exp', $this->date_exp);
        $stmt->bindParam(':valeur', $this->ref_materiel);
        $stmt->execute();
    }
    public function DeleteDocument()
    {
        include 'connex_db.php';
        $req = "DELETE FROM document WHERE num_doc = :valeur;";
        $stmt = $connexion->prepare($req);
        $stmt->bindParam(':valeur', $this->num_doc);
        $stmt->execute();
    }

}
?>