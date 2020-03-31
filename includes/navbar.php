<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #111421;">
  <a class="navbar-brand" href="#">Metropolis</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="movie nav-item">
        <a class="nav-link" href="#"><span class="icon"><i class="fas fa-film"></span></i>Films</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="connexion.php"><span class="icon"><i class="fas fa-user"></span></i>Se connecter/s'inscrire</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline my-2 my-sm-0"style="background-color: #BAB6B6;" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>
</nav>
</body>
</html>

