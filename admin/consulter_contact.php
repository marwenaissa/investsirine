<?php
session_start();
if (!isset($_SESSION["user"])) {
    echo '<script>alert("Session expirée")</script>';
    exit;
}

include("classes.php");

// Vérification de l'existence et de la validité de l'ID
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo '<script>alert("ID non fourni")</script>';
    exit;
}

$id = $_GET['id'];

// Lecture des détails de les contact
$contact = Contact::lecture($id);

if (!$contact) {
    echo '<script>alert("Contact non trouvée")</script>';
    exit;
}

// Marquer les contact comme lue
$cnx = Connexion::getInstance()->getConnexion();
$sql = "UPDATE contact SET lue = 1 WHERE id = ?";
$stmt = $cnx->prepare($sql);
$stmt->execute([$id]);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation Contact</title>
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Left Panel -->
    <?php include('aside.php'); ?>


    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                            </a>
                            <div class="user-menu dropdown-menu" style="background: #dee2e6 !important;">
                                <form method="POST" action="logout.php" class="d-flex">
                                    <button type="submit" class="nav-link logout-btn"><i class="fa fa-power-off"></i>
                                        Déconnexion</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Contact</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Contact²</a></li>
                            <li class="active">Consulter Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Consultation contact -->
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-3">
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"
                                style="background-color: #007bff; color: white; text-align: center;">
                                <strong>Consultation Contact</strong>
                            </div>
                            <div class="card-body">
                                <!-- Display Contact Details -->
                                <h5><strong>ID: </strong><?php echo $contact->id; ?></h5>
                                <p><strong>Nom:</strong> <?php echo $contact->nom; ?></p>
                                <p><strong>Téléphone:</strong> <?php echo $contact->tel; ?></p>
                                <p><strong>Email:</strong> <?php echo $contact->email; ?></p>
                                <p><strong>message:</strong> <?php echo $contact->message; ?></p>

                                <!-- Back Button -->
                                <div class="text-center">
                                    <a href="liste_contact.php" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i> Retour à la liste
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
