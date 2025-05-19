<?php

include("connexion.php");

class Estimation {
    public $id;
    public $nom;
    public $tel;
    public $type;
    public $localisation;
    public $lue;

    function __construct($id, $nom, $tel, $type, $localisation, $lue = 0) {
        $this->id = $id;
        $this->nom = $nom;
        $this->tel = $tel;
        $this->type = $type;
        $this->localisation = $localisation;
        $this->lue = $lue;
    }

    // Méthode pour ajouter une estimation
    public function ajouter() {
        $cnx = Connexion::getInstance()->getConnexion();
        if ($cnx) {
            $sql = "INSERT INTO estimation (id, nom, tel, type, localisation) VALUES 
                    ('$this->id', '$this->nom', '$this->tel', '$this->type', '$this->localisation')";
            
            $nblignes = $cnx->exec($sql);
            if ($nblignes != 1) {
                return "Insertion impossible";
            } else {
                $cnx = null;
                return true;
            }
        } else {
            return "Connexion impossible";
        }
    }

    // Méthode pour supprimer une estimation
    public function supprimer() {
        $cnx = Connexion::getInstance()->getConnexion();
        if ($cnx) {
            $sql = "DELETE FROM estimation WHERE id = '$this->id'";
            $nblignes = $cnx->exec($sql);
            if ($nblignes != 1) {
                return "Suppression impossible";
            } else {
                $cnx = null;
                return true;
            }
        } else {
            return "Connexion impossible";
        }
    }

    // Méthode pour lire les détails d'une estimation spécifique
    public static function lecture($id) {
        $res = null;
        $cnx = Connexion::getInstance()->getConnexion();
        if ($cnx) {
            $sql = "SELECT * FROM estimation WHERE id = '$id'";
            $resultat = $cnx->query($sql);
            if ($resultat && $resultat->rowCount() == 1) {
                $est = $resultat->fetch(PDO::FETCH_ASSOC);
                $res = new Estimation($est["id"], $est["nom"], $est["tel"], $est["type"], $est["localisation"], $est["lue"]);
                $resultat->closeCursor();
                $cnx = null;
            }
        }
        return $res;
    }

    // Méthode pour lister toutes les estimations
    public static function lister() {
        $tab = null;
        $cnx = Connexion::getInstance()->getConnexion();
        if ($cnx) {
            $sql = "SELECT * FROM estimation ORDER BY nom";
            $resultat = $cnx->query($sql);
            if ($resultat) {
                $tab = $resultat->fetchAll(PDO::FETCH_ASSOC);
                $cnx = null;
                return $tab;
            }
        }
        return $tab;
    }


    // Compte le nombre total d'estimations
    public static function compterTotal() {
        $cnx = Connexion::getInstance()->getConnexion();
        if ($cnx) {
            $sql = "SELECT COUNT(*) as total FROM estimation";
            $resultat = $cnx->query($sql);
            if ($resultat) {
                $row = $resultat->fetch(PDO::FETCH_ASSOC);
                return intval($row['total']);
            }
        }
        return 0;
    }

    // Compte le nombre d'estimations non lues
    public static function compterNonLues() {
        $cnx = Connexion::getInstance()->getConnexion();
        if ($cnx) {
            $sql = "SELECT COUNT(*) as non_lues FROM estimation WHERE lue = 0";
            $resultat = $cnx->query($sql);
            if ($resultat) {
                $row = $resultat->fetch(PDO::FETCH_ASSOC);
                return intval($row['non_lues']);
            }
        }
        return 0;
    }



}


class Contact {
    public $id;
    public $nom;
    public $email; // ajout du champ email
    public $tel;
    public $message; // ajout du champ message
    public $lue;

    function __construct($id, $nom, $email, $tel, $message, $lue = 0) {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->tel = $tel;
        $this->message = $message;
        $this->lue = $lue;
    }

    // Méthode pour ajouter une contact
    public function ajouter() {
        $cnx = Connexion::getInstance()->getConnexion();
        if ($cnx) {
            // On insère les nouveaux champs dans la base de données
            $sql = "INSERT INTO contact (id, nom, email, tel, message, lue) 
                    VALUES ('$this->id', '$this->nom', '$this->email', '$this->tel', '$this->message', '$this->lue')";
            
            $nblignes = $cnx->exec($sql);
            if ($nblignes != 1) {
                return "Insertion impossible";
            } else {
                $cnx = null;
                return true;
            }
        } else {
            return "Connexion impossible";
        }
    }

    // Méthode pour supprimer une contact
    public function supprimer() {
        $cnx = Connexion::getInstance()->getConnexion();
        if ($cnx) {
            $sql = "DELETE FROM contact WHERE id = '$this->id'";
            $nblignes = $cnx->exec($sql);
            if ($nblignes != 1) {
                return "Suppression impossible";
            } else {
                $cnx = null;
                return true;
            }
        } else {
            return "Connexion impossible";
        }
    }

    // Méthode pour lire les détails d'un contact spécifique
    public static function lecture($id) {
        $res = null;
        $cnx = Connexion::getInstance()->getConnexion();
        if ($cnx) {
            $sql = "SELECT * FROM contact WHERE id = '$id'";
            $resultat = $cnx->query($sql);
            if ($resultat && $resultat->rowCount() == 1) {
                $est = $resultat->fetch(PDO::FETCH_ASSOC);
                // Création d'un objet contact avec les nouveaux champs
                $res = new contact($est["id"], $est["nom"], $est["email"], $est["tel"], $est["message"], $est["lue"]);
                $resultat->closeCursor();
                $cnx = null;
            }
        }
        return $res;
    }

    // Méthode pour lister toutes les contacts
    public static function lister() {
        $tab = null;
        $cnx = Connexion::getInstance()->getConnexion();
        if ($cnx) {
            $sql = "SELECT * FROM contact ORDER BY nom";
            $resultat = $cnx->query($sql);
            if ($resultat) {
                $tab = $resultat->fetchAll(PDO::FETCH_ASSOC);
                $cnx = null;
                return $tab;
            }
        }
        return $tab;
    }

    // Méthode pour concaténer les champs d'une contact
    public static function concatener($contact) {
        return $contact->id . ' ' . $contact->nom . ' ' . $contact->email . ' ' . $contact->tel . ' ' . $contact->message . ' ' . $contact->lue;
    }
}


class famille
{
    public $idfam;
    public $designationf;
    
    function __construct($id,$des)
    {
        $this->idfam=$id;
        $this->designationf=$des;
    }
    
    function ajouter()
    { 
        $cnx=Connexion::getInstance()->getConnexion();
        if($cnx)
        { 
            $sql="INSERT INTO famille VALUES
            ('$this->idfam','$this->designationf')";
            $nblignes=$cnx->exec($sql);
            if($nblignes!=1)
            {
                return "Insertion impossible";
            }
            else
            { 
                $cnx=null;
                return true; 
            }
        }
        else
        { 
            return "Connexion impossible";
        }
    }
   
    function supprimer()
    {   
        $cnx= Connexion::getInstance()->getConnexion();
        if($cnx){
            $sql="DELETE FROM famille WHERE
            idfam='$this->idfam'";
            $nblignes=$cnx->exec($sql);
            if($nblignes!=1)
            { 
                return "Suppression impossible";
            }
            else
            { 
                $cnx=null;
                return true;
            }
        }
        else
        { 
            return "Connexion impossible"; 
        }
    }
   
    function modifier()
    {
        $cnx= Connexion::getInstance()->getConnexion();
        if($cnx)
        {
            $sql="UPDATE famille SET idfam='$this->idfam', designationf ='$this->designationf'WHERE idfam='$this->idfam'";
            $nblignes=$cnx->exec($sql);
            if($nblignes!=1)
            {
                return "Modification impossible";
            }
            else
            { 
                $cnx=null;
                return true;
            }
        }
        else
        {
            return "Connexion impossible"; 
        }
    }
    
    static function lecture($id)
    { 
        $res=null;
        $cnx= Connexion::getInstance()->getConnexion();
        if($cnx)
        { 
            $sql="SELECT * FROM famille WHERE idfam=$id";
            $resultat=$cnx->query($sql);
            if($resultat && $resultat->rowCount()==1)
            { 
                $fam=$resultat->fetch(PDO::FETCH_ASSOC);
                $res=new famille($fam["idfam"],$fam["designationf"]);
                $resultat->closeCursor();
                $cnx=null; 
            }
        }
        return $res;
    }
    static function lister()
    { 
        $tab=null;
        $cnx= Connexion::getInstance()->getConnexion();
        if($cnx)
        { 
            $sql="SELECT * FROM famille ORDER BY designationf";
            $resultat=$cnx->query($sql);
            if($resultat)
            {
                $tab=$resultat->fetchAll(PDO::FETCH_ASSOC);
                $cnx=null;
                return $tab; 
            }
        }
        return $tab;
    }
}


//Définition de la classe Produit
class produit
{
    public $idprod;
    public $designation_prod;
    public $quantite_stock;
    public $prix_unitaire;
    public $idfam;

    function __construct($des,$q,$p,$idf)
    { 
        $this->idprod=null;
        $this->designation_prod=$des;
        $this->quantite_stock=$q;
        $this->prix_unitaire=$p;
        $this->idfam=$idf;
    }

    function ajouter()
    { 
        $cnx= Connexion::getInstance()->getConnexion();
        if($cnx)
        {
            //l’identifiant est de type auto-increment
            $sql="INSERT INTO produit
            (designation_prod,quantite_stock,prix_unitaire,idfam)
            VALUES('$this->designation_prod',
            '$this->quantite_stock','$this->prix_unitaire',
            '$this->idfam' )";
            $nblignes=$cnx->exec($sql);
            if($nblignes!=1)
            {
            return "Insertion impossible";
            }
            else
            {   $cnx=null;
                return true; 
            }
        }
        else
        { return "Connexion impossible";
        }
    }

    function supprimer()
    {
        $cnx= Connexion::getInstance()->getConnexion();
        if($cnx)
        {
            $sql="DELETE FROM produit WHERE idprod=$this->idprod";
            $nblignes=$cnx->exec($sql);
            if($nblignes!=1)
            { 
                return "Suppression impossible";
            }
            else
            { 
                $cnx=null;
                return true;
            }
        }
        else
        { return "Connexion impossible"; 
        }
    }

    function modifier()
    {
        $cnx= Connexion::getInstance()->getConnexion();
        if($cnx)
        {
            $sql="UPDATE produit SET  designation_prod='$this->designation_prod', quantite_stock =$this->quantite_stock, prix_unitaire=$this->prix_unitaire, idfam ='$this->idfam' WHERE idprod=$this->idprod";
            
            $nblignes=$cnx->exec($sql);
            if($nblignes!=1)
            { 
                return "Modification impossible"; 
            }
            else 
            { 
                $cnx=null;
                return true; 
            } 
        }
        else
        {
            return "Connexion impossible"; 
        }
    }

    static function lecture($id)
    { 
        $res=null;
        $cnx= Connexion::getInstance()->getConnexion();
        if($cnx)
        { 
            $sql="SELECT * FROM produit WHERE idprod=$id";
            $resultat=$cnx->query($sql);

            if($resultat && $resultat->rowCount()==1)
            { 
                $prod=$resultat->fetch(PDO::FETCH_ASSOC);
                $res=new produit($prod["designation_prod"],$prod["quantite_stock"], $prod["prix_unitaire"],$prod["idfam"] );
                $res->idprod=$prod["idprod"];
                $resultat->closeCursor();
                $cnx=null;
            }
        }
        return $res;
    }

    static function lister()
    { 
        $tab=null;
        $cnx= Connexion::getInstance()->getConnexion();
        if($cnx)
        { 
            $sql="SELECT * FROM produit ORDER BY designation_prod";
            $resultat=$cnx->query($sql);
            if($resultat)
            {
                $tab=$resultat->fetchAll(PDO::FETCH_ASSOC);
                $cnx=null;
                return $tab; 
            }
        }
        return $tab;
    }
}


//Définition de la classe Administrateur
class administrateur
{ 
    public $id_admin;
    public $login;
    public $mot_de_passe;
    
    function __construct($login,$mp)
    { 
        $this->id_admin=null;
        $this->login=$login;
        $this->mot_de_passe=$mp;
    }
    function ajouter()
    { 
        $cnx= Connexion::getInstance()->getConnexion();
        if($cnx)
        {
            $sql="INSERT INTO administrateur (login,mot_de_passe) VALUES('$this->login', '$this->mot_de_passe')";
            $nblignes=$cnx->exec($sql);
            if($nblignes!=1)
            {
            return "Insertion impossible";
            }
            else
            { 
                $cnx=null;
                return true; 
            }
        }
        else
        { 
            return "Connexion impossible";
        }
    }

    function supprimer()
    {
        $cnx= Connexion::getInstance()->getConnexion();
        if($cnx)
        {
            $sql="DELETE FROM administrateur WHERE id_admin=$this->id_admin";
            $nblignes=$cnx->exec($sql);
            if($nblignes!=1)
            { 
                return "Suppression impossible";
            }
            else
            { 
                $cnx=null;
                return true;
            }
        }
        else
        { 
            return "Connexion impossible"; 
        }
    }

    function modifier()
    {   
        $cnx= Connexion::getInstance()->getConnexion();
        if($cnx)
        {   
            $sql = "UPDATE administrateur SET Id_admin='$this->id_admin', login='$this->login', mot_de_passe='$this->mot_de_passe' WHERE id_admin='$this->id_admin'";

            $nblignes=$cnx->exec($sql);
            if($nblignes!=1)
            { 
                return "Modification impossible";
            }
            else 
            { 
                $cnx=null;
                return true; 
            } 
        }
        else
        {
            return "Connexion impossible"; 
        }
    }
    
    static function lecture($id)
    { 
        $res=null;
        $cnx= Connexion::getInstance()->getConnexion();
        if($cnx)
        { 
            $sql="SELECT * FROM administrateur WHERE id_admin=$id";
        
            $resultat=$cnx->query($sql);
            if($resultat && $resultat->rowCount()==1)
            { 
                $adm=$resultat->fetch(PDO::FETCH_ASSOC);
                $res=new administrateur($adm["login"],$adm["mot_de_passe"]);
                $res->id_admin =$adm["id_admin"];

                $resultat->closeCursor();
                $cnx=null; 
            }
        }
        return $res;
    }

    static function lister()
    { 
        $tab=null;
        $cnx= Connexion::getInstance()->getConnexion();
        if($cnx)
        { 
            $sql="SELECT * FROM administrateur ORDER BY
            login";
            $resultat=$cnx->query($sql);
            if($resultat)
            {
                $tab=$resultat->fetchAll(PDO::FETCH_ASSOC);
                $cnx=null;
                return $tab; 
            }
        }
        return $tab;
    }
}
?>