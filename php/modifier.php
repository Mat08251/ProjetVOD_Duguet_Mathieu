<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/modifier.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Modification admin</title>
</head>
<body>
    <?php include ('../includes/navbar-admin.php'); ?>

    <div class="row">
        <div class="titre-modif col-md-10">
            <p>Modification du film</p>
        </div>
    </div>

    <div class="container">
        <div class="">
            <h5 class="rubrique bg-secondary">Général</h5>
        </div>
        <form>
        <div class="form-group row">
            <label for="titre" class="col-sm-2 col-form-label">Titre :</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control" id="titre">
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Date :</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="date">
            </div>
        </div>
        <div class="form-group row">
            <label for="duré" class="col-sm-2 col-form-label">Durée :</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="duré">
            </div>
        </div>
        <div class="form-group row">
            <label for="real" class="col-sm-2 col-form-label">Réalisateur :</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="real" >
            </div>
        </div>
        </form>
    </div>

    <div class="container">
        <div class="">
            <h5 class="rubrique bg-secondary">Synopsis du film</h5>
        </div>
        <form>
            <div class="form-group row">
                <label for="synop" class="col-sm-2 col-form-label">contenu :</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="synop" rows="3"></textarea>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <a href="../php/modifier.php"><button type="button" class="btn btn-danger">Supprimer</button></a>
        <a href="../php/modifier.php"><button type="button" class="btn btn-primary">Enregistrer et ajouter un nouveaux film</button></a>
        <a href="../php/modifier.php"><button type="button" class="btn btn-primary">Enregistrer et continuer les modifications</button></a>
        <a href="../php/modifier.php"><button type="button" class="btn btn-primary">Enregistrer</button></a>
    </div>
</body>
</html>