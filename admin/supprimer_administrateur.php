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

if (isset($_GET["id_admin"])) {
    // Fetch the administrator by ID (assuming you have a method to get an administrator by ID)
    $admin = administrateur::lecture($_GET["id_admin"]);

    if ($admin != null) {
        // Call the supprimer method to delete the administrator
        $res = $admin->supprimer();

        if ($res === true) {
            echo('<script> alert("La suppression de l\'administrateur est correcte")</script>');
            echo("<script>document.location.href=\"liste_administrateur.php\"</script>");
        } else {
            echo('<script> alert("' . $res . '")</script>');
        }
    } else {
        echo('<script> alert("L\'administrateur n\'existe pas")</script>');
    }
}
?>


<?php
}
?>
