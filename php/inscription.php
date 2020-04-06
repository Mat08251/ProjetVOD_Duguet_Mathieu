<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/inscription.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
       <div class="formu-inscription container">
       <form class="col-xs-6 col-12">
                    <div class="col-md-6">
                        <label for="pays">PAYS DE RÉSIDENCE :</label>
                        <select class="custom-select" name="pays" style="background-color: #111111; color: #BAB6B6">
                            <option value="choix1">France</option>
                            <option value="choix1">Allemagne</option>
                            <option value="choix1">Angleterre</option>
                            <option value="choix1">Espagne</option>
                            <option value="choix1">Italie</option>
                        </select>
                    </div>
                    <div class="form-group2">
                         <label for="pays">Nom d'utilisateur</label>
                         <input type="text" class="form-control" id="email" placeholder="Nom d'utilisateur" style="background-color: #111111;">
                    </div>
               
                    <div class="form-group2">
                        <label for="emil">E-MAIL :</label>
                        <input type="email" class="form-control" id="email" placeholder="E-mail" style="background-color: #111111;">
                        <label for="email">CONFIRMATION :</label>
                        <input type="email" class="form-control" id="email" placeholder="Confirmez l'adresse e-mail" style="background-color: #111111;">
                    </div>

                    <div class="form-group2">
                        <label for="mot-de-passe">MOT DE PASSE :</label>
                        <input type="password" class="form-control" id="mot-de-passe" placeholder="Mot de passe" style="background-color: #111111">
                        <label for="mot-de-passe">CONFIRMATION :</label>
                        <input type="password" class="form-control" id="mot-de-passe" placeholder="Confirmez le mot de passe" style="background-color: #111111;">
                    </div>

                    <div class="col-md-6">
                        <label for="question">QUESTION DE SÉCURITÉ :</label>
                        <select class="custom-select" name="question" style="background-color: #111111; color: #BAB6B6">
                            <option value="choix1">Quel est le nom de famille de votre auteur préféré?</option>
                            <option value="choix1">Quel est le nom de votre animal de compagnie?</option>
                            <option value="choix1">Quel est le nom de votre jeux favoris?</option>
                            <option value="choix1">Quel est votre plat préféré?</option>
                        </select>
                        <input type="text" class="reponse form-control" id="réponse" placeholder="Réponse" style="background-color: #111111;">
                    </div>





                        <div class="bouton2">
                            <button type="submit" class="btn" style="background-color: #234253; "><span class="couleur-bouton2">CRÉER UN COMPTE</span></button>
                            <a href="../php/index.php"> <button type="button" class="btn btn-"><span class="couleur-bouton2">ANNULER</span></button></a>
                        </div>
                </form>
       </div>
       <script src="https://unpkg.com/scrollreveal"></script>
       
    </body>
</html>