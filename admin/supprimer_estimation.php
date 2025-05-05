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

$estimation = Estimation::lecture($_GET["id"]);

if ($estimation != null) {
    $res = $estimation->supprimer();

    if ($res === true) {
        echo('<script> alert("La suppression est correcte.")</script>');
        echo('<script>document.location.href="liste_estimation.php"</script>');
    } else {
        echo('<script> alert("Erreur : ' . $res . '")</script>');
    }
} else {
    echo('<script> alert("Estimation introuvable.")</script>');
    echo('<script>document.location.href="liste_estimation.php"</script>');
}
?>


<?php
}
?>
