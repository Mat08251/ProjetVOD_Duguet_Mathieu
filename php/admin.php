<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Espace admin</title>
</head>
<body>
    
    <?php include ('../includes/navbar-admin.php'); ?>

    <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Films</th>
                <th scope="col">Date</th>
                <th scope="col">Durée</th>
                <th scope="col">Réalisateur</th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-secondary">
                <th scope="row">1</th>
                <td>Midway</td>
                <td>7 novembre 2019</td>
                <td>2h 18m</td>
                <td>Roland Emmerich</td>
                <td><a href="../php/modifier.php"><button type="button" class="btn btn-success">modifier</button></a></td>
                <td><button type="button" class="btn btn-danger">supprimer</button></td>
                </tr>
                <tr class="table-secondary">
                <th scope="row">2</th>
                <td>Sonic</td>
                <td>9 février 2020</td>
                <td>1h 40m</td>
                <td>Jeff Fowler</td>
                <td><a href="../php/modifier.php"><button type="button" class="btn btn-success">modifier</button></a></td>
                <td><button type="button" class="btn btn-danger">supprimer</button></td>
                </tr>
                <tr class="table-secondary">
                <th scope="row">3</th>
                <td>Joker</td>
                <td>9 octobre 2019</td>
                <td>2h 2m</td>
                <td>Todd Phillips</td>
                <td><a href="../php/modifier.php"><button type="button" class="btn btn-success">modifier</button></a></td>
                <td><button type="button" class="btn btn-danger">supprimer</button></td>
                </tr>
                <tr class="table-secondary">
                <th scope="row">4</th>
                <td>L'appel de la Foret</td>
                <td>19 février 2020</td>
                <td>1h 40m</td>
                <td>Chris Sanders</td>
                <td><a href="../php/modifier.php"><button type="button" class="btn btn-success">modifier</button></a></td>
                <td><button type="button" class="btn btn-danger">supprimer</button></td>
                </tr>
                <tr class="table-secondary">
                <th scope="row">5</th>
                <td>Jumanji</td>
                <td>4 décembre 2019</td>
                <td>2h 03m</td>
                <td>Jake Kasdan</td>
                <td><a href="../php/modifier.php"><button type="button" class="btn btn-success">modifier</button></a></td>
                <td><button type="button" class="btn btn-danger">supprimer</button></td>
                </tr>
                <tr class="table-secondary">
                <th scope="row">6</th>
                <td>Star Wars</td>
                <td>18 décembre 2019</td>
                <td>2h 22m</td>
                <td>J. J. Abrams</td>
                <td><a href="../php/modifier.php"><button type="button" class="btn btn-success">modifier</button></a></td>
                <td><button type="button" class="btn btn-danger">supprimer</button></td>
                </tr>
                <tr class="table-secondary">
                <th scope="row">7</th>
                <td>Retour à Zombiland</td>
                <td>9 octobre 2019</td>
                <td>1h 39m</td>
                <td>Ruben Fleischer</td>
                <td><a href="../php/modifier.php"><button type="button" class="btn btn-success">modifier</button></a></td>
                <td><button type="button" class="btn btn-danger">supprimer</button></td>
                </tr>
                <tr class="table-secondary">
                <th scope="row">8</th>
                <td>CRAWL</td>
                <td>10 juillet 2019</td>
                <td>1h 27m</td>
                <td>Alexandre Aja</td>
                <td><a href="../php/modifier.php"><button type="button" class="btn btn-success">modifier</button></a></td>
                <td><button type="button" class="btn btn-danger">supprimer</button></td>
                </tr>
                <tr class="table-secondary">
                <th scope="row">9</th>
                <td>ça chapitre 2</td>
                <td>26 août 2019</td>
                <td>2h 50m</td>
                <td>Andrés Muschietti</td>
                <td><a href="../php/modifier.php"><button type="button" class="btn btn-success">modifier</button></a></td>
                <td><button type="button" class="btn btn-danger">supprimer</button></td>
                </tr>
                <tr class="table-secondary">
                <th scope="row">10</th>
                <td>Astérix</td>
                <td>5 décembre 2018</td>
                <td>1h 26m</td>
                <td>Alexandre Astier, Louis Clichy</td>
                <td><a href="../php/modifier.php"><button type="button" class="btn btn-success">modifier</button></a></td>
                <td><button type="button" class="btn btn-danger">supprimer</button></td>
                </tr>
                <tr class="table-secondary">
                <th scope="row">11</th>
                <td>The RENEGADE</td>
                <td>5 septembre 2018</td>
                <td>1h 40m</td>
                <td>Lance Daly</td>
                <td><a href="../php/modifier.php"><button type="button" class="btn btn-success">modifier</button></a></td>
                <td><button type="button" class="btn btn-danger">supprimer</button></td>
                </tr>
            </tbody>
    </table>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ajouter à la liste :</h5>
            <p class="card-text">Acces à la page d'ajout pour la Bdd</p>
            <button type="button" class="btn btn-info">+ Ajouter</button>
        </div>
    </div>
            
        
</body>
</html>