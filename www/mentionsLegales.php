<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width"/>
  <meta name="keywords" content="HTML,CSS,PHP,JS">
  <meta name="author" content="Ghignon Thomas">

  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_package/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_package/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_package/favicon-16x16.png">
  <link rel="manifest" href="img/favicon_package/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <title>Mentions Légales</title>

  <link rel="stylesheet" href="css/libs/cssReset.css">
  <link rel="stylesheet" href="css/style_global.css">

  <link rel="stylesheet" href="css/style_footer.css">
  <link rel="stylesheet" href="css/style_nav.css">

  <link rel="stylesheet" href="css/responsive/responsive_global.css">
  <link rel="stylesheet" href="css/responsive/responsive_footer.css">
  <style>
    header
    {
      background-image: linear-gradient(to right bottom, #ffc900, #ffc400, #ffc000, #ffbb00, #ffb700);
    }
    .main *
    {
      text-align: center;
      margin: 20px 0;
    }
    .main
    {
      margin: 100px 0 100px 0;
    }
    .main a
    {
      letter-spacing: inherit;
    }
    .main h1
    {
      color: #000;
      font-size: 2em;
    }

  </style>
</head>
<body>
  <div class="onMoveNav navHidden">
    <?php include 'include/nav_project.php'; ?>
  </div>
  <header>
     <?php include 'include/nav_project.php'; ?>
     <div class="responsiveNav">
      <a href="#link-agency">agence</a>
      <a href="#link-project">projets</a>
      <a href="#link-members">membres</a>
    </div>
  </header>
    <div class="main wrap">
      <h1>Mentions Légales</h1>
      <h2>Hébergement</h2>
      <p>Université de Savoie, 28 avenue du lac d'Annecy, 73370 Le Bourget-du-Lac, France<br>Site hébergé sur les serveurs de <a target="_blanc" href="https://www.univ-smb.fr/">l'Université Savoie Mont Blanc</a></p>
      <h2>Conception graphique</h2>
      <p>Elise VALLOIRE - Maëva REYNAUD - Clément TEIXEIRA</p>
      <h2>Intégration web & développement</h2>
      <p>Thomas GHIGNON</p>
      <h2>Contenu</h2>
      <p>Agence MOABI</p>
      <h2>Législation</h2>
      <p>Tout le contenu du présent site, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos et icônes ainsi que leur mise en forme sont la propriété exclusive de la société Europe Événements à l’exception des marques, logos ou contenus appartenant à d’autres sociétés partenaires ou auteurs.</p>
      <p>Toute reproduction, distribution, modification, adaptation, retransmission ou publication, intégrale ou partielle, de ces différents éléments est strictement interdite sans l’accord exprès par écrit de Europe Événements. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.3335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des contenus copiés pourraient intenter une action en justice à votre encontre.</p>
      <p>Les fichiers résultants ne sont jamais transmis à des tiers. En particulier, nous ne commercialisons aucun fichier d'adresses ou de courriels.</p>
      <p>Conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés, les internautes disposent d’un droit d’accès, de rectification, de modification et de suppression concernant les données qui les concernent personnellement. Ce droit peut être exercé en adressant un e-mail à emmareymond66@gmail.com ou burgard.thomas.dcr@gmail.com.</p>
    </div>

  <?php include 'include/footer.php'; ?>
  <script src="js/libs/jquery.js"></script>
  <script src="js/onMove_nav.js"></script>
  <script src="js/responsiveNav.js"></script>
</body>
</html>
