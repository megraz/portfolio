<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
    <link rel="icon" type="image/png" href="favicon_godzilla2.png" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Marlène Egraz</title>

</head>

<body>
<header class="nav-down">
<ul class="nav nav-pills nav-justified">
  <li class="nav-item">
    <a class="btn btn-outline-success" id="accueil" href="#" style="border-radius:10px">Accueil</a>
  </li>
  <li class="nav-item">
    <a class="btn btn-outline-success" href="#projets" style="border-radius:10px">Mes projets</a>
  </li>
  <li class="nav-item">
    <a class="btn btn-outline-success" href="#apropos" style="border-radius:10px">A propos de moi</a>
  </li>
  <li class="nav-item">
    <a class="btn btn-outline-success" href="#contact" style="border-radius:10px">Contact</a>
  </li>
</ul>
</header>
<div class="fondlyon">
  <img class="vuelyon" src="vue_lyonwm2.jpg" alt="image fond vue de lyon">
  <h1 class="stylename" id="tada">Marlène Egraz</h1>
</div>
<div class="monster">
  <img class="godzilla" src="godzilla_illustr1c.png" alt="illustration godzilla">
</div>
<div id="apropos">
  <h1 class="presentation">Présentation</h1>
  <p>Aujourd'hui en reconversion professionnelle, je suis actuellement une formation de développeuse web à Simplon. J'ai trouvé la parfaite alchimie entre les différentes disciplines de mon parcours.
Graphiste de formation, j'ai un intérêt particulier pour le front-end.</p>
</div>

<main>
<div id="projets">
  <h1 class="mesprojets">Mes projets</h1>
</div>
<section class="captureprojets">
  <div class="text-center">
  <?php
  $dossier = "./";
    $files = scandir($dossier);
     $files = array_diff($files, ['.', '..','images']);
    foreach($files as $file) {
      $commentline = $file . '/README.md';
      if (is_file($commentline)) {
          $comment = file_get_contents($commentline);
      }
        if(is_dir($file)){
        $screen = $file . '/screenshot.png';
        if (is_file($screen)) {
          echo '<a href="'.$file.'" style="text-decoration:none">
         <div class="image"><img src="' . $screen . '"></div>
         <div class="comment">' . $comment . '</div>
         </a>';
        }
      }
   }
    ?>
    <!-- <section id="soto">
    <a href="jeff-soto">
    <img src="screenshot_soto.png" class="rounded mx-auto d-block" alt="screencap">
    </a>
    <p>Consigne: Reproduire un site de notre choix en html et css</p>
    </section>
    <section id="game">
    <a href="projet-jeu-js">
    <img src="screenshot_game.png" class="rounded mx-auto d-block" alt="screencap">
    </a>
    <p>Création d'un jeu un contre un en javascript</p>
    </section>
    <section id="services">
    <a href="projets-servicesbis">
    <img src="screenshot_site-services.png" class="rounded mx-auto d-block" alt="screencap">
    </a>
    <p>Réalisation d'un site "Meetup" utilisant HTML/CSS, PHP et Bootstrap </p>
    </section> -->
  </div>
</section>
</main>

<div id="contact">
<div class="footer">
  <div class="container">
    <a href='https://twitter.com/marlene_erz'><i class="fa fa-twitter fa-3x fa-fw"></i></a>
    <a href='https://github.com/megraz'><i class="fa fa-github fa-3x fa-fw"></i></a>
    <a href='https://www.linkedin.com/in/marl%C3%A8ne-egraz-85728b149/'><i class="fa fa-linkedin fa-3x fa-fw"></i></a>
    <a href='mailto:marlene.egraz@gmail.com'><i class="fa fa-envelope-square fa-3x fa-fw"></i></a>
    <p>&copy; Marlène Egraz - 2017 🖖</p>
  </span>
</div>
</div>
  </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="main.js"></script>
</body>

</html>