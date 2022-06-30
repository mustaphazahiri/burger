<?php
include('utilFunction.php');
include('../models/function.php');

function connexionUser($bdd, $mail, $mdp)
{


    $mail = strip_tags($mail);
    $pwd = strip_tags($mdp);


    $bddUser = getConnexionUser($bdd, $mail);

    if ($bddUser != null) {
        if (password_verify($pwd, $bddUser['pwd_client']) && ($bddUser["id_role"] == 1)) {
            $_SESSION['user'] = $bddUser;
            unset($_SESSION['user']['pwd_client']);
            header('Location: ./backoffice/dashboard.php');
        } elseif (password_verify($pwd, $bddUser['pwd_client']) && ($bddUser["id_role"] == 2)) {
            $_SESSION['user'] = $bddUser;
            unset($_SESSION['user']['pwd_client']);
            header('Location: index.php');
        } else {
            return '<p class="alert alert-danger">Identifiants ou mot de passe invalides</p>';
        }
    } else {
        return '<p class="alert alert-danger">Identifiants invalides</p>';
    }
    // var_dump($_SESSION);
}
