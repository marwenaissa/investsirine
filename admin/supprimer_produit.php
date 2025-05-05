<?php
session_start();
if(! isset($_SESSION["user"]))
//C’est la variable de session créée par le fichier login.php
{
echo '<script>alert("Session expiree")</script>';
}
else
{
?>

<?php
include("classes.php");
$prod= Produit::lecture($_GET["code_produit"]);

if($prod!=null)
    $res=$prod->supprimer();

if($res===true)
{
    echo('<script> alert("la suppression est correcte")</script>');
    echo("<script>document.location.href=\"liste_produit.php\"</script>");}
else
{   
    echo('<script> alert($res)</script>');
}
?>

<?php
}
?>