<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/formulaire.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php include ('../includes/navbar.php'); ?> 

       <div class="row">
           <div class="col-12 text-center">
               <div class="titre-formu-contact">
                  <h1>Formulaire de contact</h1>
               </div>
           </div>
       </div>

       <form action="traitement.php" method="post">
            <div class="formu-contact container">
                <div class="row">
                    <div class="col-3 text-center">
                        <div class="form-group3">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" id="prenom" placeholder="prenom" style="background-color: ;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 text-center">
                        <div class="form-group3">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" name="nom" id="nom" placeholder="nom" style="background-color: ;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 text-center">
                        <div class="form-group3">
                            <label for="email">Votre E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email" style="background-color: ;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 text-center">
                        <div class="form-group3">
                            <label for="sujet">Sujet du message</label>
                            <input type="text" class="form-control" name="sujet" id="sujet" placeholder="sujet" style="background-color: ;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 text-center">
                        <div class="form-group3">
                            <label for="message">Votre message</label>
                            <textarea class="zone-texte form-control" name="message" id="message" placeholder="message" rows="3" style="background-color: ;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="bouton3">
                            <a href="../php/index.php"> <button type="button" class="btn btn-" style="background-color: #BB1533; "><span class="couleur-bouton3">ENVOYER</span></button></a>
                        </div>
                    </div>
                </div>
            </div>
       </form>
       <?php include ('../includes/footer.php'); ?>
       <script src="https://unpkg.com/scrollreveal"></script>
    </body>
</html>