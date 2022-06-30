<?php

session_start();
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
    <link rel="shortcut icon" href="../img/BURGER_COMPANY_Logo-Favicon.png" type="image/x-icon">
    <title>Burger Compagny</title>
</head>

<body>
    <header>
        <!-- NAVBAR-->
        <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="../index.php" class="navbar-brand">
                    <!-- Logo Image -->
                    <img src="../img/BURGER_COMPANY_Logoriginal.svg" width="140" alt="" class=" ">
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
                        }
                        if ($connected == false) { ?>
                            <li class="nav-item"><a href="dashboard.php?page=connexion" class="nav-link">Connexion</a></li>

                            <?php
                        }
                            ?><?php
                                $admin = false;
                                if (isset($_SESSION['user']['id_role']) && $_SESSION['user']['id_role'] == 1) {
                                    $admin = true;
                                }
                                if ($admin == true) { ?>
                            <!-- Gestion des clients -->

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Gestion des clients
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" target=_blanc href="signup.php">Ajouter des clients</a></li>
                                    <li><a class="dropdown-item" target=_blanc href="modifyclient.php">Modifier des clients</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" target=_blanc href="deleteclient.php">Supprimer des clients</a></li>
                                </ul>
                            </li>

                            <!-- Tableau des ventes -->

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Tableau des ventes
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" target=_blanc href="topventes.php">Top des ventes</a></li>
                                    <li><a class="dropdown-item" target=_blanc href="flopventes.php">Flop des ventes</a></li>

                                </ul>
                            </li>
                            <!-- Gestion des ingredients -->

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Gestion des ingrédients
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" target=_blanc href="insertingredient.php">Ajouter des ingrédients</a></li>
                                    <li><a class="dropdown-item" target=_blanc href="modifyingrediet.php">Modifier des ingrédients</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" target=_blanc href="deleteingredient.php">Supprimer des ingrédients</a></li>
                                </ul>
                            </li>
                            <!-- Gestion des produits -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Gestion des produits
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" target=_blanc href="insertproduit.php">Ajouter des produits</a></li>
                                    <li><a class="dropdown-item" target=_blanc href="modifyproduit.php">Modifier des produits</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" target=_blanc href="deleteproduit.php">Supprimer des produits</a></li>
                                </ul>
                            </li>
                            <!-- Gestion des catégories -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Gestion des catégories
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" target=_blanc href="insertcategorie.php">Ajouter des catégories</a></li>
                                    <li><a class="dropdown-item" target=_blanc href="modifycategorie.php">Modifier des catégories</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" target=_blanc href="deletecategorie.php">Supprimer des catégories</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="/burger/controller/deconnexionController.php" class="nav-link">Déconnexion</a></li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <h2>Bonjour <?php $authenification = false;
                if (isset($_SESSION['user']['prenom_client'])) {
                    $authenification = true;
                    echo $_SESSION['user']['prenom_client'] . "!";
                    // var_dump($_SESSION['user']['prenom_client']);
                } ?></h2>


    <footer>

        <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
            <div class="container">

                <a href="#" class="navbar-brand">

                    &copy; Loic & Mustapha
                    </i>
                </a>
                <a href="#" class="navbar-brand">

                    <i class='fab fa-facebook fa-2x'></i><br />

                </a>

                <a href="#" class="navbar-brand">

                    <i class='fab fa-instagram fa-2x'></i>
                    </i>
                </a>
            </div>
        </nav>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>