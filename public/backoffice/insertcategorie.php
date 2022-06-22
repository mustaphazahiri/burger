<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/style.css">
    <title>Ajouter des catégories</title>
</head>

<body>
    <section class="d-flex justify-content-center">
        <div class="card " style="width: 20rem;">
            <!-- Logo Image -->
            <img src="../public/img/BURGER_COMPANY_Logoriginal.svg" width="200" alt="" class="d-inline-block align-middle mr-2">
            <!-- Logo Text -->
            <h2 class="text-uppercase py-4">Ajouter des catégories</h2>
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nom : </label>
                    <input type="text" class="form-control" name="nom_categorie" placeholder="Nom de la catégorie" required />
                </div>
                <input type="submit" class="btn btn-primary" value="Valider" />
            </form>
        </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>