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
    <title>Ajouter des categories</title>
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
                            <li class="navbar-brand"><a aria-current="page" target=_blanc href="gestionclients.php">Gestion des clients</a></li>
                            <li class="navbar-brand"><a aria-current="page" target=_blanc href="totalventes.php">Tableau des ventes</a></li>
                            <li class="navbar-brand"><a aria-current="page" target=_blanc href="insertingredient.php">Ajouter des ingredients</a></li>
                            <li class="navbar-brand"><a aria-current="page" target=_blanc href="insertproduit.php">Ajouter des produits</a></li>
                            <li class="navbar-brand"><a aria-current="page" target=_blanc href="insertcategorie.php">Ajouter des catégories</a></li>
                            <li class="nav-item"><a href="/burger/controller/deconnexionController.php" class="nav-link">Déconnexion</a></li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <body>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nom : </label>
                <input type="text" class="form-control" name="nom_produit" placeholder="Nom du produit" required />
            </div>
            <div class="form-group">
                <a href="/models/function.php"></a>
                <label>Prix du produit : </label>
                <input type="text" class="form-control" name="prix_produit" placeholder="prix du produit" required />
            </div>
            <div class="form-group">
                <label>Image du produit : </label>
                <input type="file" class="form-control-file" name="image">
            </div>
            <input type="submit" class="btn btn-primary" value="Valider" />
        </form>
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