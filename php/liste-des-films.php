<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/liste-des-films.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link
        href="https://fonts.googleapis.com/css?family=Baloo+Tammudu+2:400,500,600,700,800|Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
       <?php include ('../includes/navbar.php'); ?>

       <h2 class="axeltitreh2">Nos films</h2>

<div class="axelcontainer">

    <!--FILTRES-->

    <div class="axelgauche">
        <h5 class="axelH5">Filtres</h5>
        <h5 class="axelgenre">Genre</h5>
        <div class="axelcase">
            <input type="checkbox" id="coding" name="" value="">
            <label for="coding">SF</label>
        </div>
        <div class="axelcase">
            <input type="checkbox" id="" name="" value="">
            <label for="">Aventure</label>
        </div>
        <div class="axelcase">
            <input type="checkbox" id="" name="" value="">
            <label for="">Action</label>
        </div>
        <div class="axelcase">
            <input type="checkbox" id="" name="" value="">
            <label for="">Animation</label>
        </div>
        <div class="axelcase">
            <input type="checkbox" id="" name="" value="">
            <label for="">Comedie</label>
        </div>
        <div class="axelcase">
            <input type="checkbox" id="" name="" value="">
            <label for="">Doc Fiction</label>
        </div>
        <div class="axelcase">
            <input type="checkbox" id="" name="" value="">
            <label for="">Drame</label>
        </div>
        <div class="axelcase">
            <input type="checkbox" id="" name="" value="">
            <label for="">Horreur</label>
        </div>
        <div class="axelcase">
            <input type="checkbox" id="" name="" value="">
            <label for="">Policier</label>
        </div>
        <div class="axelcase">
            <input type="checkbox" id="" name="" value="">
            <label for="">Romance</label>
        </div>
        <div class="axelcase">
            <input type="checkbox" id="" name="" value="">
            <label for="">Thriller</label>
        </div>
        <h5 class="axelgenre">Durée</h5>
        <div class="axelcase">
            <input type="checkbox" id="" name="" value="">
            <label for="">moins d'1h30</label>
        </div>
        <div class="axelcase">
            <input type="checkbox" id="" name="" value="">
            <label for="">plus d'1h30</label>
        </div>
        <div class="axelcase">
            <input type="checkbox" id="" name="" value="">
            <label for="">Plus d'2h</label>
        </div>
    </div>
        
    <div class="axeldroite">
            <a href="parasite.php" class="versfilm">
            <div class="cardaxel">
                <img src="../images/film.jpg" alt="">
                <div class="titrefilm">MIDWAY</div>
                <div class="infoaxel">
                    <div class="textaxel">
                       <p>4.5/5</p> 
                       <p>2h12</p> 
                       <p>Thriller</p>    
                    </div>
                </div>
            </div>
            </a>
            <a href="" class="versfilm">
            <div class="cardaxel">
                <img src="../images/image2.jpg" alt="">
                <div class="titrefilm">SOnic</div>
                <div class="infoaxel">
                    <div class="textaxel">
                        <p>3.3/5</p> 
                        <p>3h29</p> 
                        <p>Thriller, Biopic</p>   
                    </div>
                </div>
            </div>
            </a>
            <a href="" class="versfilm">
            <div class="cardaxel">
                <img src="../images/image7.jpg" alt="">
                <div class="titrefilm">Joker</div>
                <div class="infoaxel">
                    <div class="textaxel">
                        <p>3.3/5</p> 
                        <p>1h45</p> 
                        <p>Drame</p>   
                    </div>
                </div>
            </div>
            </a>
            <a href="" class="versfilm">
            <div class="cardaxel">
                <img src="../images/image6.jpg" alt="">
                <div class="titrefilm">L'appel de la FORET</div>
                <div class="infoaxel">
                    <div class="textaxel">
                        <p>3.9/5</p> 
                        <p>2h08</p> 
                        <p>Biopic,Drame</p>   
                    </div>
                </div>
            </div>
            </a>
            <a href="" class="versfilm">
                <div class="cardaxel">
                <img src="../images/jumanji.jpg" alt="">
                <div class="titrefilm">Jumanji</div>
                <div class="infoaxel">
                    <div class="textaxel">
                        <p>3.7/5</p> 
                       <p>1h42</p> 
                       <p>Animation, Fantastique</p>   
                    </div>
                </div>
            </div>
        </a>
        <a href="" class="versfilm">
            <div class="cardaxel">
                <img src="../images/starwars.jpg" alt="">
                <div class="titrefilm">STAR WARS</div>
                <div class="infoaxel">
                    <div class="textaxel">
                        <p>4/5</p> 
                       <p>2h09</p> 
                       <p>Drame</p>   
                    </div>
                </div>
            </div>
            </a>
            <a href="" class="versfilm">
            <div class="cardaxel">
                <img src="../images/zombiland.jpg" alt="">
                <div class="titrefilm">Retour à Zombiland</div>
                <div class="infoaxel">
                    <div class="textaxel">
                        <p>2.9/5</p> 
                        <p>1h49</p> 
                        <p>Historique, Biopic, Guerre</p>   
                    </div>
                </div>
            </div>
            </a>
            <a href="" class="versfilm">
            <div class="cardaxel">
                <img src="../images/crawl.jpg" alt="">
                <div class="titrefilm">CRAWL</div>
                <div class="infoaxel">
                    <div class="textaxel">
                        <p>3.2/5</p> 
                       <p>1h40</p> 
                       <p>Aventure, Drame, Famille</p>   
                    </div>
                </div>
            </div>
            </a>
            <a href="" class="versfilm">
                <div class="cardaxel">
                    <img src="../images/Affiche_Ça_Chapitre_2.jpg" alt="">
                    <div class="titrefilm">ça chapitre 2</div>
                    <div class="infoaxel">
                        <div class="textaxel">
                            <p>3.3/5</p> 
                           <p>1h36</p> 
                           <p>Comédie, Romance</p>   
                        </div>
                    </div>
                </div>
                </a>
                <a href="" class="versfilm">
                    <div class="cardaxel">
                        <img src="../images/Affiche-Film-Asterix.jpg" alt="">
                        <div class="titrefilm">ASTÉRIX</div>
                        <div class="infoaxel">
                            <div class="textaxel">
                                <p>3.7/5</p> 
                               <p>2h27</p> 
                               <p>Horreur</p>   
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="" class="versfilm">
                        <div class="cardaxel">
                            <img src="../images/affiche-the-renegade-640x896.jpg" alt="">
                            <div class="titrefilm">The RENEGADE</div>
                            <div class="infoaxel">
                                <div class="textaxel">
                                    <p>2.8/5</p> 
                                   <p>2h16</p> 
                                   <p>Action</p>   
                                </div>
                            </div>
                        </div>
                        </a>
        </div>
    </div>

       <?php include ('../includes/footer.php'); ?>
    </body>
</html>
