 <?php
    include('../controller/signInController.php');

    if (isset($_POST['mail'], $_POST['mdp'])) {
        $error = connexionUser($bdd, $_POST['mail'], $_POST['mdp']);
        echo $error;
    }

    ?>


 <section class="d-flex justify-content-center">
     <div class="card " style="width: 20rem;">

         <!-- Logo Image -->
         <img src="../public/img/BURGER_COMPANY_Logoriginal.svg" width="200" alt="" class="d-inline-block align-middle mr-2">
         <!-- Logo Text -->

         <h2 class="text-uppercase py-4">Connexion</h2>


         <form class="px-2 py-2" method="POST" action="">
             <div class="mb-3">
                 <label for="exampleDropdownFormEmail1" class="form-label">Adresse Email </label>
                 <input type="email" name='mail' class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
             </div>
             <div class="mb-3">
                 <label for="exampleDropdownFormPassword1" class="form-label">Mot de passe</label>
                 <input type="password" name="mdp" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
             </div>
             <div class="mb-3">
                 <div class="form-check">
                     <input type="checkbox" class="form-check-input" id="dropdownCheck">
                     <label class="form-check-label" for="dropdownCheck">
                         Se souvenir de moi
                     </label>
                 </div>
             </div>
             <button type="submit" class="btn btn-primary">Se connecter</button>
         </form>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="index.php?page=signup">Vous étes nouveau? Inscrivez-vous ici</a>
         <a class="dropdown-item" href="#">Mot de passe oublié?</a>
     </div>
 </section>
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>