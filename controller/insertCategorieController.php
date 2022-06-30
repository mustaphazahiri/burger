<?php
include('utilFunction.php');
include('../models/function.php');

// ajout categorie
// INSERT INTO `categorie` (`id_categorie`, `nom_categorie`, `id_image`) VALUES (NULL, 'boissons', '1');
function insertCategorie($ID, $bdd)
{

    if (isset($_POST['Inserer'])) {
        $existe = false;
        $selectStr = 'SELECT nom_categorie FROM categorie';
        $selectQuery = $bdd->query($selectStr);
        $bddArray = $selectQuery->fetchAll();
        // var_dump($bddArray);
        $inserer = $_POST['inserer'];
        foreach ($bddArray as $value) {
            if ($value['nom_categorie'] == $inserer) {
                $existe = true;
                echo '<p class="alert alert-danger ">cette categorie existe déjà</p>';
            }
        }


        if ($existe == false) {
            $querystr = "INSERT INTO `categorie` (`id_categorie`, `nom_categorie`, `id_image`) VALUES (NULL, \'Boissons\', \'1\')";
            $query = $bdd->prepare($querystr);
            $query->bindValue(':nom', $inserer, PDO::PARAM_STR);
            $query->execute();
            echo '<p class="alert alert-success" >Bravo ! categorie ajoutée avec succés</p>';
        }
    }
}

// function signUp($bdd, $array)
// {
//     if (autoIsset($array)) {
//         if ($array['pwd'] == $array['pwd2']) {
//             $user['nom'] = strip_tags($array['nom']);
//             $user['prenom'] = strip_tags($array['prenom']);
//             $user['date_naissance'] = strip_tags($array['date_naissance']);
//             $user['adresse'] = strip_tags($array['adresse']);
//             $user['ville'] = strip_tags($array['ville']);
//             $user['cp'] = strip_tags($array['cp']);
//             $user['num'] = strip_tags($array['num']);
//             $user['email'] = strip_tags($array['email']);
//             $user['pwd'] = password_hash($array['pwd'], PASSWORD_BCRYPT);

//             $return = setNewUser($bdd, $user);

//             return $return;
//         }
//     } else {
//         return '<span>Merci de remplir tout les champs</span>';
//     }
// }
