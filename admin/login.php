<?php

include ("connexion.php");
if (isset($_POST['login']) && isset($_POST['mp']))
{ 
    $login =$_POST['login'];
    $pwd =$_POST['mp'];
    $cnx= Connexion::getInstance()->getConnexion();
    $req="SELECT * FROM administrateur WHERE login='$login' and mot_de_passe='$pwd'";
    $res=$cnx->query($req);

    if($res && $res->rowCount()==1) //authentification réussie
    { 
        
        Session_start( );
        $_SESSION['ok']="ok";
        $enreg=$res->fetch(PDO::FETCH_ASSOC);
        //ajouter une variable de session qui contient le login de l'utilisateur connecté
        $_SESSION["user"]=$enreg["login"];
        $_SESSION["password"]=$enreg["mot_de_passe"];
        echo"<script>document.location.href=\"accueil.php\"
        </script>";
    }
    else
    { 
        die();
        echo "Echec d'authentification! Réesssayer";
        echo"<script>document.location.href=\"index.php\"</script>";
    }
}
?>