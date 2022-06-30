<?php
include('../models/connexionbdd.php');

function insertbdd($nom_client, $prenom_client, $adresse_client, $ville_client, $code_postal_client, $num_client, $email_client, $pwd_client, $date_naissance, $bdd)
{
    if (isset($_POST['nom_client'])) {
        $verifmailselect = 'SELECT email_client FROM client';
        $verifmailselectQuery = $bdd->query($verifmailselect);
        $bddarray = $verifmailselectQuery->fetchAll();
        $email_client = $_POST['email_client'];
        $dejaclient = false;
        foreach ($bddarray as $value) {
            if ($value["email_client"] == $email_client) {
                $dejaclient = true;
                echo  '<p class="alert alert-danger" > un compte existe déjà avec cet email</p>';
                echo '<a class="dropdown-item" href="../traitement/login.php">Déjà client? Connectez-vous ici</a>';
                break;
            }
        }
    }
    if ($dejaclient != true) {
        if ($_POST["pwd"] == $_POST["pwd2"]) {
            $existe = false;
            $selectStr = 'SELECT ville_nom_reel, ville_id FROM villes_france_free';
            $selectQuery = $bdd->query($selectStr);
            $bddArray = $selectQuery->fetchAll();
            $ID_ville = $_POST['ID_ville'];
            foreach ($bddArray as $value) {
                if ($value["ville_nom_reel"] == ucfirst($ID_ville)) {
                    $existe = true;
                    $ID_ville = $value['ville_id'];
                }
            }
            if ($existe == true) {
                echo '<p class="alert alert-success">Votre ville a été trouvée</p>';
            } else {
                echo  '<p class="alert alert-danger" >' . ucfirst($ID_ville) . ", cette ville n'existe pas en France</p>";
            }
        }
        if (isset($_POST['nom_client'])) {
            $nom_client = strip_tags($_POST['nom_client']);
            $prenom_client = strip_tags($_POST['prenom_client']);
            $adresse_client = strip_tags($_POST['adresse_client']);
            $ville_client = strip_tags($_POST['ville_client']);
            $code_postal_client = strip_tags($_POST['code_postal_client']);
            $date_naissance = strip_tags($_POST['date_naissance']);
            $num_client = strip_tags($_POST['num_client']);
            $email_client = strip_tags($_POST['email_client']);
            $pwd_client = password_hash($_POST['pwd'], PASSWORD_BCRYPT);
        }

        $querystr = "INSERT INTO client (id_client, nom_client, prenom_client, adresse_client, ville_client, code_postal_client, num_client, email_client,  pwd_client, date_naissance,ville_id,id_role) VALUES (NULL,:nom,:prenom,:adresse,:ville,:cp,:num,:email,:pwd,:date_naissance,$ID_ville,2)";
        $query = $bdd->prepare($querystr);
        $query->bindValue(':nom', $nom_client, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom_client, PDO::PARAM_STR);
        $query->bindValue(':adresse', $adresse_client, PDO::PARAM_STR);
        $query->bindValue(':ville', $ville_client, PDO::PARAM_STR);
        $query->bindValue(':cp', $code_postal_client, PDO::PARAM_INT);
        $query->bindValue(':num', $num_client, PDO::PARAM_STR);
        $query->bindValue(':email', $email_client, PDO::PARAM_STR);
        $query->bindValue(':pwd', $pwd_client, PDO::PARAM_STR);
        $query->bindValue(':date_naissance', $date_naissance, PDO::PARAM_STR);
        $query->execute();


        header('Location:/public/index.php');
    }
}
function getConnexionUser($bdd, $mail)
{
    $verifmailselect = 'SELECT * FROM client WHERE email_client = :mail';
    $query = $bdd->prepare($verifmailselect);
    $query->bindValue(':mail', $mail, PDO::PARAM_STR);
    $query->execute();
    $bddArray = $query->fetch(PDO::FETCH_ASSOC);

    return $bddArray;
}
function setNewUser($bdd, $array)
{
    $emailStr = 'SELECT * FROM client WHERE email_client = :mail';
    $emailQuery = $bdd->prepare($emailStr);
    $emailQuery->bindValue(':mail', $array['email'], PDO::PARAM_STR);
    $emailQuery->execute();
    if ($emailQuery->rowCount() <= 0) {
        $existe = false;
        $selectStr = 'SELECT ville_nom_reel, ville_id FROM villes_france_free';
        $selectQuery = $bdd->query($selectStr);
        $bddArray = $selectQuery->fetchAll();
        $ID_ville = $array['ville'];
        foreach ($bddArray as $value) {
            if ($value["ville_nom_reel"] == ucfirst($ID_ville)) {
                $existe = true;
                $ID_ville = $value['ville_id'];
                $nomVille = $value['ville_nom_reel'];
            }
        }
        if ($existe == true) {
            $insertStr = 'INSERT INTO client (nom_client, prenom_client, adresse_client, ville_client, code_postal_client, num_client, email_client, pwd_client, date_naissance, ville_id, id_role) VALUES (:nom, :prenom, :adresse, :ville, :cp, :num, :mail, :pwd, :naissance, :ville_id, 2)';
            $insert = $bdd->prepare($insertStr);
            $insert->bindValue(':nom', $array['nom'], PDO::PARAM_STR);
            $insert->bindValue(':prenom', $array['prenom'], PDO::PARAM_STR);
            $insert->bindValue(':adresse', $array['adresse'], PDO::PARAM_STR);
            $insert->bindValue(':ville', $nomVille, PDO::PARAM_STR);
            $insert->bindValue(':cp', $array['cp'], PDO::PARAM_INT);
            $insert->bindValue(':num', $array['num'], PDO::PARAM_STR);
            $insert->bindValue(':mail', $array['email'], PDO::PARAM_STR);
            $insert->bindValue(':pwd', $array['pwd'], PDO::PARAM_STR);
            $insert->bindValue('naissance', $array['date_naissance'], PDO::PARAM_STR);
            $insert->bindValue(':ville_id', $ID_ville, PDO::PARAM_INT);

            if ($insert->execute()) {
                return '<span class="alert alert-success">Inscription reussie</span>';
            } else {
                return '<span class="alert alert-danger">Erreur lors de l\'inscription</span>';
            }
        } else {
            return '<span class="alert alert-danger">La ville saisie n\'est pas connue</span>';
        }
    } else {
        return '<span class="alert alert-danger ">Cette Email existe déjà</span>';
    }
}


function affichageclient($bdd)
{
    $verifselect = 'SELECT * FROM client';
    $verifselectQuery = $bdd->query($verifselect);
    $bddArray = $verifselectQuery->fetchAll();
    return $bddArray;
}
function affichageingredient($bdd)
{
    $verifselectingredient = 'SELECT * FROM ingredient';
    $verifselectQueryingredient = $bdd->query($verifselectingredient);
    $bddArray = $verifselectQueryingredient->fetchAll();
    return $bddArray;
}
function supprimeringredient($ID, $bdd)
{
    if (isset($_POST['ID'])) {
        $ID = $_GET['ID'];
    }
    $querydelete = "DELETE FROM ingredient WHERE id_ingredient = :ID";

    $query = $bdd->prepare($querydelete);
    $query->bindValue(':ID', $ID, PDO::PARAM_INT);
    $query->execute();
}

function modifydataclient($ID, $bdd)
{
    if (isset($_POST['ID'])) {
        $ID = $_GET['ID'];
    }
    $queryupdate = "UPDATE client SET 'nom_client'=:nom, 'prenom_client'=:prenom, 'adresse_client'=:adresse, 'ville_client'=:ville, 'code_postal_client'=:cp, 'num_client'=:num, 'email_client'=:email, 'date_naissance'=:date_naissance    WHERE 'client'.'ID' = :ID";

    $query = $bdd->prepare($queryupdate);
    $query->bindValue(':ID', $ID, PDO::PARAM_INT);
    $query->execute();
}

/*
function ajoutImage($ID, $bdd)
{
    if (isset($_POST['nom_produit'])) {
        $fileImage = $_FILES['imageProduit'];
        $repertoire = "/public/img/";
        try {
            $nomImage = ajoutImage($fileImage, $repertoire, $_POST['nom_produit']);
            $success = ajoutProduit($_POST['nom_produit'], $_POST['idType'], $nomImage);
            // INSERT INTO `produit` (`id_produit`, `nom_produit`, `image_produit`, `prix_produit`, `id_image`, `id_categorie`) VALUES (NULL, 'coca_light', 'image_coca', '2', '1', '1');
            if ($success) { ?>
                <div class="alert alert-success" role="alert">
                    L'ajout s'est bien déroulé !
                </div>
            <?php } else { ?>
                <div class="alert alert-danger" role="alert">
                    L'ajout n'a pas fonctionné !
                </div>
<?php
            }
        } catch (Exception $e) {
            // echo $e->getMessage();
        }
    }
}*/
