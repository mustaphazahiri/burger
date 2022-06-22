<?php
session_start();
include('../models/connexionbdd.php');
$connected = false;
if (isset($_SESSION['prenom_client'])) {
    $connected = true;
}
if ($connected == false) { ?>

<?php
}
// var_dump($_SESSION);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/274ac46116.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/style.css">
    <script src="https://kit.fontawesome.com/742768abf7.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../public/img/BURGER_COMPANY_Logo-Favicon.png" type="image/x-icon">
    <title>Burger Compagny</title>
</head>

<body>
    <header>
        <!-- NAVBAR-->
        <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="index.php?page=default" class="navbar-brand">
                    <!-- Logo Image -->
                    <img src="../public/img/BURGER_COMPANY_Logoriginal.svg" width="140" alt="" class=" ">
                    <!-- Logo Text -->
                    <!-- <span class="text-uppercase font-weight-bold">Burger Company</span> -->
                </a>
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarToggleExternalContent5" aria-controls="navbarToggleExternalContent5" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                </div>

                <!-- <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button> -->

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">

                        <?php
                        $connected = false;
                        if (isset($_SESSION['user']['prenom_client'])) {
                            $connected = true;
                        } ?>
                        <?php
                        if ($connected == true) { ?>
                            <li class="nav-item"><a href="#" class="nav-link">Panier</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Commande</a></li>
                            <li class="nav-item"><a href="/burger/controller/deconnexionController.php" class="nav-link">Déconnexion</a></li>
                        <?php } ?>
                        <?php if ($connected == false) { ?>
                            <li class="nav-item"><a href="index.php?page=connexion" class="nav-link">Connexion</a></li>
                        <?php  } ?>


                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {

            case 'page2':
                include('index.php');
                break;
        }
    }
    ?>

    <section class="cover">
        <h1 class="cover-title">Burger Company</h1>
        <button type="button" class="btn btn-danger"><a href="index.php?" class="Button1">Accueil</a></button>
        <p class="cover-description"> Commandez vos plats préférés en quelques clics !</p>
    </section>
    <div class="menupage2">
        <h3>Burgers</h3>
        <h3>Salades</h3>
        <h3>Desserts</h3>
        <h3>Boissons</h3>

    </div>
    <hr>
    <div class="text-div">
        <h3>Burgers</h3>
        <p>Découvrez nos Burgers.</p>
    </div>

    <div class="cube-div">
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
    </div>
    </div>

    <hr>

    <div class="text-div">
        <h3>Salades</h3>
        <p>Découvrez nos Salades.</p>
    </div>
    <div class="cube-div">
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
    </div>
    </div>

    <hr>

    <div class="text-div">
        <h3>Desserts</h3>
        <p>Découvrez nos Desserts.</p>
    </div>
    <div class="cube-div">
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
    </div>
    </div>

    <hr>

    <div class="text-div">
        <h3>Boissons</h3>
        <p>Découvrez nos Boissons.</p>
    </div>
    <div class="cube-div">
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
        <div class="cube-menu">

        </div>
    </div>
    </div>
    <hr>