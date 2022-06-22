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
    <h2>Bonjour <?php $authenification = false;
                if (isset($_SESSION['user']['prenom_client'])) {
                    $authenification = true;
                    echo $_SESSION['user']['prenom_client'] . "!";
                    // var_dump($_SESSION['user']['prenom_client']);
                } ?></h2>


    <?php
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {

            case 'page2':
                include('page2.php');
                break;
            case 'connexion':
                include('../vue/login.php');
                break;

            case 'signup':
                include('../vue/signup.php');
                break;

            default:
                include('../vue/accueil.php');
        }
    } else {
        include('../vue/accueil.php');
    }

    ?>


    <section class="section4">
        <div class="container">
            <div class="gauche">
                <h2>Notre Restaurant</h2>
                <p>Retrouvez-nous proche de chez vous</p>
                <h4>Burger Company</h4>
                <hr class="hrcontact">
                <p>25 Av. de Saintignon, 54400 Longwy</p>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5856.693460030353!2d5.769374379029065!3d49.52055102686542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47eac83037aa5dc9%3A0x61180d9167b45ca5!2sCCI%20FORMATION%20EESC%20-%20LONGWY!5e0!3m2!1sfr!2sfr!4v1654073624529!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>


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