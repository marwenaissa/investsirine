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

$contact = Contact::lecture($_GET["id"]);

if ($contact != null) {
    $res = $contact->supprimer();

    if ($res === true) {
        echo('<script> alert("La suppression est correcte.")</script>');
        echo('<script>document.location.href="liste_contact.php"</script>');
    } else {
        echo('<script> alert("Erreur : ' . $res . '")</script>');
    }
} else {
    echo('<script> alert("Contact introuvable.")</script>');
    echo('<script>document.location.href="liste_contact.php"</script>');
}
?>


<?php
}
?>
