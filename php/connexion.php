<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/connexion.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
       <div class="formu-connexion container col-12">
           <div class="titre-connexion text-center col-12">
               <h2>Se connecter</h2>
           </div>
                <form class="col-xs-6 col-12">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="email" style="background-color: #BAB6B6;">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="mot-de-passe" placeholder="Passworld" style="background-color: #BAB6B6">
                        </div>
                        <div class="bouton">
                            <button type="submit" class="btn btn-danger"><span class="couleur-bouton">SE CONNECTER</span></button>
                            <a href="../php/inscription.php"> <button type="button" class="btn btn-danger"><span class="couleur-bouton">S'inscrire</span></button></a>
                        </div>
                </form>
        </div>
    </body>
</html>