
<?php

require_once("connexion.php");

$res=null;
$cnx= Connexion::getInstance()->getConnexion();

if($cnx)
{ 
    $sql="SELECT COUNT(*) FROM estimation where lue = 0";
     $resultat=$cnx->query($sql);
    echo $resultat->fetchColumn();
}

?>
