<?php
//require('Controller/connex_db.php');

class Materiel
{
    //Attributs
    private $ref_materiel;
    private $nom_materiel;

    //Constructeur
    public function __construct($reference_materiel, $nom_mat)
    {
        $this->ref_materiel = $reference_materiel;
        $this->nom_materiel = $nom_mat;
    }

    public function getref_materiel()
    {
        return $this->ref_materiel;
    }
    public function setref_materiel($reference_materiel)
    {
        $this->ref_materiel = $reference_materiel;
    }
    public function getNomMat()
    {
        return $this->nom_materiel;
    }
    public function setNomMat($nom_mat)
    {
        $this->nom_materiel = $nom_mat;
    }

    public function CreateMateriel()
    {
        include 'connex_db.php';
        $stmt = $connexion->prepare('INSERT INTO materiel  VALUE (:ref_materiel, :nom_materiel);');
        $stmt->bindParam(':ref_materiel', $this->ref_materiel, PDO::PARAM_STR);
        $stmt->bindParam(':nom_materiel', $this->nom_materiel, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function RetrieveMateriel($valeur)
    {
        include 'connex_db.php';
        $stmt = $connexion->prepare("SELECT * FROM materiel WHERE ref_materiel = :valeur;");
        $stmt->bindParam(':valeur', $valeur);
        $stmt->execute();
        $resultatmat = $stmt->fetch();
        if (!$resultatmat) {
            return "error";
        } else {
            $this->ref_materiel = $resultatmat['ref_materiel'];
            $this->nom_materiel = $resultatmat['nom_materiel'];
        }
    }
    public function UpdateMateriel()
    {
        include 'connex_db.php';
        $req = "UPDATE materiel SET nom_materiel = :nom_materiel  WHERE ref_materiel = :valeur;";
        $stmt = $connexion->prepare($req);
        $stmt->bindParam(':valeur', $this->ref_materiel);
        $stmt->bindParam(':nom_materiel', $this->nom_materiel);
        $stmt->execute();
    }
    public function DeleteMateriel() {
        $req = "DELETE FROM materiel WHERE VALUE (:ref_materiel, :nom_materiel);";
        $stmt = $connexion->prepare($req);
        $stmt->bindParam(':ref_materiel', $this->$reference_materiel);
        $stmt->bindParam(':nom_materiel', $this->$nom_mat);
        $stmt->execute();
    } 
    public function Findall()
    {
        include 'connex_db.php';
        $stmt = $connexion->prepare("SELECT ref_materiel FROM materiel;");
        $stmt->bindParam(':ref_materiel', $this->ref_materiel);
        $stmt->execute();
    }

    public function FindAllMatWithoutDoc()
    {
        include 'connex_db.php';
        $listMateriels = [];
        $sql = 'SELECT materiel.ref_materiel, nom_materiel from materiel 
                left join document 
                on document.ref_materiel=materiel.ref_materiel 
                where num_doc is null';
        $rep = $connexion->query($sql);
        $materiels = $rep->fetchAll(PDO::FETCH_ASSOC);
        foreach ($materiels as $mat) {
            $materiel = new Materiel($mat['ref_materiel'], $mat['nom_materiel']);

            $listMateriels[] = $materiel;
        }
        return $listMateriels;
    }

}
?>