
    
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

if (isset($_POST['Modifier']))
{
    include("classes.php");

    $pl= new produit($_POST["designation_prod"],$_POST["quantite_stock"],$_POST["prix_unitaire"],$_POST["idfam"]);
    $pl->idprod=$_POST["code_produit"];

    $res=$pl->modifier();
    if($res===true)
    { 
        echo('<script> alert("La modification est correcte")</script>');
        echo("<script>document.location.href=\"liste_produit.php\"</script>");
    }
    else
    { 
        echo($res);
    }
}
?>
<?php


include("classes.php");
$prod= produit::lecture($_GET["code_produit"]);
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


    <style>
        /* Style pour les liens .nav-link */
        .nav-link {
            text-decoration: none;
            color: inherit;  /* Conserver la couleur du texte parent */
            padding: 5px 10px;
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        .nav-link:hover {
            color: #007bff; /* Changer la couleur au survol, par exemple */
            text-decoration: underline;
        }

        .logout-btn {
            border: none;
            background: none;
            padding: 5px 10px;
            font-size: 16px;
            display: flex;
            align-items: center;
            cursor: pointer; /* Pour donner l'indication de clic */
        }

        /* Ajouter un effet de survol au bouton */
        .logout-btn:hover {
            color: #007bff;
            text-decoration: underline;
        }
        
        
    </style>

</head>

<body>
    <?php
    ?>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="accueil.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Administrateur</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="ajouter_administrateur.php">Ajouter Administrateur</a></li>
                            <li><i class="fa fa-table"></i><a href="liste_administrateur.php">Liste Administrateur</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Produit</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="ajouter_produit.php">Ajouter Produit</a></li>
                            <li><i class="fa fa-table"></i><a href="liste_produit.php">Liste Produit</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Famille</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="ajouter_famille.php">Ajouter Famille</a></li>
                            <li><i class="fa fa-table"></i><a href="liste_famille.php">Liste Famille</a></li>
                        </ul>
                    </li>
                    
                    

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu" style=" background: #dee2e6 !important;">
                            <form method="POST" action="logout.php" class="d-flex">
                                <button type="submit" class="nav-link logout-btn"><i class="fa fa-power-off"></i> Déconnexion</button>
                            </form>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Produit</a></li>
                            <li class="active">Gestion produit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-lg-2">
                    </div>

                    <div class="col-lg-8">
                        <div class="card">
                           

                            <div class="card-header" style="text-align: center !important;background-color:#007bff">
                                <strong class="card-title" style="">Modifier produit</strong>
                            </div>
                           

                            <div class="card-body">
                            <form name = "form1" method = "post" action="modifier_produit.php" >

                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col">Code produit</th>
                                            <td><input class="form-control"  type = "text" name = "code_produit" value = <?php echo $prod->idprod; ?> style="color: #808080;" readonly></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Designation</th>
                                            <td><input class="form-control"  type = "text" name = "designation_prod" value = <?php echo $prod->designation_prod; ?>></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Quantité en stock</th>
                                            <td><input class="form-control"  type = "text" name = "quantite_stock" value = <?php echo ($prod->quantite_stock); ?>></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Prix unitaire</th>
                                            <td><input class="form-control"  type = "text" name = "prix_unitaire" value = <?php echo ($prod->quantite_stock); ?>></td>
                                        </tr>

                                        <?php
                                        $familles = Famille::lister(); // Appel de la méthode lister
                                        ?>
                                        
                                        <tr>

                                            <th scope="col">Famille</th>
                                            <td>    
                                                <select class="form-control" name="idfam">
                                                <option value="">Selectionner une famille</option>

                                                    <?php foreach ($familles as $famille): ?>
                                                        <?php if ($prod->idfam == $famille['idfam']): ?>
                                                            <option value="<?= $famille['idfam'] ?>" selected><?= $famille['designationf'] ?></option>
                                                        <?php else: ?>
                                                            <option value="<?= $famille['idfam'] ?>"><?= $famille['designationf'] ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>                                       
                                        </tr>


                                        <tr>
                                            <th scope="col">Action</th>
                                            <td colspan="2" align = "center">
                                                <button name ="Modifier" type = "submit" style="margin-right:20px" class="btn btn-primary btn-sm"><i class="fa fa-star"></i>&nbsp; Ajouter</button>
                                                <button name ="annule" type = "reset" style="margin-right:20px" class="btn btn-secondary btn-sm"><i class="fa fa-lightbulb-o"></i>&nbsp; Annuler</button>
                                            </td>                                           
                                        </tr>
                                    </tbody>
                                </table>
                                </form>

                            </div>

                           
                            
                        </div>
                    </div>

                    <div class="col-lg-2">
                    </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>

<?php
}
?>
