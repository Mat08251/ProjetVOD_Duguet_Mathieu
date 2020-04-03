<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/description-film.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>

    <?php include ('../includes/navbar.php'); ?>

       <div class="titre-du-film col-xs-12 col-md-12 text-center">
           <h2>MIDWAY</h2>
       </div>

       <div class="card mb-12">
        <div class="row no-gutters">
          <div class="col-md-6">
            <img src="../images/image1.jpg" class="card-img" alt="...">
          </div>
          <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title">Informations sur le film</h5>
                <p class="card-text">Réalisé par Roland Emmerich</p>
                <p class="card-text">Avec Ed Skrein, Patrick Wilson, Woody Harrelson</p>
                <p>Durée : 2h19 - Genre : Action, Historique, Guerre</p>
            </div>
          </div>
        </div>
      </div>

      <div class="synop container col-md-11">
           <h3>Synopsis</h3>
       </div>
       <div class="texte-synop col-xs-3 col-md-6">
           <p>
              Après la débâcle de Pearl Harbor qui a laissé la flotte américaine dévastée,
              la marine impériale japonaise prépare une nouvelle attaque qui devrait éliminer
              définitivement les forces aéronavales restantes de son adversaire.
              La campagne du Pacifique va se jouer dans un petit atoll isolé du Pacifique nord : Midway.
           </p>
       </div>

       <div class="bloc-acteurs container-fluid">
           <div class="row">
               <h2 class="titre-acteur col-md-12 text-center">Acteurs</h2>
           </div>

           <div class="row">
               <div class="liste-acteurs col-md-12 col-xs-12">
                    <div class="acteur">
                        <img src="../images/acteur1.jpg" alt="">
                        <div>Patrick Wilson</div>
                    </div>
                    <div class="acteur">
                        <img src="../images/acteur2.jpg" alt="">
                        <div>Woody Harrelson</div>
                    </div>
                    <div class="acteur">
                        <img src="../images/acteur3.jpg" alt="">
                        <div>Ed Skrein</div>
                    </div>
                    <div class="acteur">
                        <img src="../images/acteur4.jpg" alt="">
                        <div>Luke Evans</div>
                    </div>
                    <div class="acteur">
                        <img src="../images/acteur5.jpg" alt="">
                        <div>Luke Kleintank</div>
                    </div>
                    <div class="acteur">
                        <img src="../images/acteur6.jpg" alt="">
                        <div>Dennis Quaid</div>
                    </div>
               </div>
           </div>
       </div>

       <div class="bloc-real container-fluid">
            <div class="row">
                <h2 class="titre-real col-md-12 text-center">Réalisateur</h2>
            </div>

            <div class="row">
            <div class="real-ba">
                <div class="real">
                    <div class="img-real">
                        <img src="../images/real.jpg" alt="">
                        <div>Roland Emmerich</div>
                    </div>
                    <div class="text-real col-xs-6">
                        <p>
                        Roland Emmerich est un réalisateur, producteur et scénariste allemand,
                        né le 10 novembre 1955 à Stuttgart. Ses films ont rapporté plus de
                        3 milliards de dollars de recettes au box-office mondial
                        </p>
                    </div>
                </div>

                <div class="bande-annonce col-xs-3">
                    <iframe width="360" height="300" src="https://www.youtube.com/embed/1c6Q_dBhNbE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                </div>
            </div>
        </div>
        <?php include ('../includes/footer.php'); ?>
    </body>
</html>