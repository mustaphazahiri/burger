<?php
include('utilFunction.php');
include('../models/function.php');

function signUp($bdd, $array)
{
    if (autoIsset($array)) {
        if ($array['pwd'] == $array['pwd2']) {
            $user['nom'] = strip_tags($array['nom']);
            $user['prenom'] = strip_tags($array['prenom']);
            $user['date_naissance'] = strip_tags($array['date_naissance']);
            $user['adresse'] = strip_tags($array['adresse']);
            $user['ville'] = strip_tags($array['ville']);
            $user['cp'] = strip_tags($array['cp']);
            $user['num'] = strip_tags($array['num']);
            $user['email'] = strip_tags($array['email']);
            $user['pwd'] = password_hash($array['pwd'], PASSWORD_BCRYPT);

            $return = setNewUser($bdd, $user);

            return $return;
        }
    } else {
        return '<span>Merci de remplir tout les champs</span>';
    }
}
