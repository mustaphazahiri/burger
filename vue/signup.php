<?php
include('../controller/signUpController.php');

$return = signUp($bdd, $_POST);
echo $return;

?>




<section class="d-flex justify-content-center">
    <div class="card" style="width: 20rem;">
        <!-- Logo Image -->
        <div class="d-flex justify-content-center">
            <img src="../public/img/BURGER_COMPANY_Logoriginal.svg" width="200" alt="" class="d-inline-block align-middle mr-2">
        </div>
        <!-- Logo Text -->
        <div class="d-flex justify-content-center">
            <h2 class="text-uppercase py-4">Inscription</h2>
        </div>

        <form method="POST" action="" class="px-2 py-2">
            <div class="mb-3">
                <label for="exampleDropdownFormEmail1" class="form-label">Nom </label>
                <input type="text" name="nom" class="form-control" id="exampleDropdownFormEmail1" placeholder="Nom" required>
            </div>
            <div class="mb-3">
                <label for="exampleDropdownFormEmail1" class="form-label">Prénom </label>
                <input type="text" name="prenom" class="form-control" id="exampleDropdownFormEmail1" placeholder="prénom" required>
            </div>
            <div class="mb-3">
                <label for="exampleDropdownFormEmail1" class="form-label">Date de naissance </label>
                <input type="date" name="date_naissance" class="form-control" id="exampleDropdownFormEmail1" placeholder="date naissance" required>
            </div>
            <div class="mb-3">
                <label for="exampleDropdownFormEmail1" class="form-label">Adresse </label>
                <input type="text" name="adresse" class="form-control" id="exampleDropdownFormEmail1" placeholder="adresse" required>
            </div>
            <div class="mb-3">
                <label for="exampleDropdownFormEmail1" class="form-label">Ville </label>
                <input type="text" name="ville" class="form-control" id="exampleDropdownFormEmail1" placeholder="ville" required>
            </div>
            <div class="mb-3">
                <label for="exampleDropdownFormEmail1" class="form-label">Code postal </label>
                <input type="text" name="cp" class="form-control" id="exampleDropdownFormEmail1" placeholder="code postal" required>
            </div>
            <div class="mb-3">
                <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Téléphone </label>
                    <input type="tel" name="num" class="form-control" id="exampleDropdownFormEmail1" placeholder="télephone" required>
                </div>
                <label for="exampleDropdownFormEmail1" class="form-label">Adresse Email </label>
                <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" required>
            </div>
            <div class="mb-3">
                <label for="exampleDropdownFormPassword1" class="form-label">Mot de passe</label>
                <input type="password" name="pwd" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" required>
            </div>
            <div class="mb-3">
                <label for="exampleDropdownFormPassword1" class="form-label">Confirmer mot de passe</label>
                <input type="password" name="pwd2" class="form-control" id="exampleDropdownFormPassword1" placeholder="Confirmer Password" required>
            </div>

            <div class="mb-3">
                <div class="form-check">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>

                </div>
            </div>

        </form>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="index.php?page=connexion">Déjà client? Connectez-vous ici</a>
    </div>
</section>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>