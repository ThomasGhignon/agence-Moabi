<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width"/>
  <meta name="keywords" content="HTML,CSS,JavaScript">
  <meta name="author" content="Ghignon Thomas">

  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_package/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_package/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_package/favicon-16x16.png">
  <link rel="manifest" href="img/favicon_package/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <title>Accueil</title>

  <link rel="stylesheet" href="css/libs/cssReset.css">
  <link rel="stylesheet" href="css/libs/flickity.css">

  <link rel="stylesheet" href="css/style_global.css">
  <link rel="stylesheet" href="css/style_index.css">

  <link rel="stylesheet" href="css/style_footer.css">
  <link rel="stylesheet" href="css/style_nav.css">

  <link rel="stylesheet" href="css/responsive/responsive_global.css">
  <link rel="stylesheet" href="css/responsive/responsive_index.css">
</head>
<body>
  <div class="onMoveNav navHidden">
    <div class="responsiveNav">

    </div>
    <div class="wrap">
      <?php include 'include/nav_index.php'; ?>
    </div>
  </div>
  <header id="link-header">
    <div class="wrap">
    <?php include 'include/nav_index.php'; ?>
      <div class="headerContent">
        <div>
          <span>Agence</span>
          <h1>moabi</h1>
          <a href="#link-footer">
            <span>nous contactez</span>
          </a>
        </div>
        <div>
          <img src="img/header/maket-mokup.png" alt="projets">
        </div>
      </div>
    </div>
  </header>
  <div class="wrap">
    <div class="main_container">
      <div class="line outside-line">
        <div class="lineContent"></div>
        <div class="line inside1-line">
          <div class="lineContent"></div>
          <div class="line inside2-line">
            <div class="lineContent"></div>
            <div class="lineContent js-offsetLine1"></div>
            <div class="lineContent js-offsetLine2"></div>
          </div>
          <div class="lineContent"></div>
        </div>
        <div class="lineContent"></div>
      </div>
      <section class="agency" id="link-agency">
        <div class="agencyValue_container">
          <div class="background_whiteLogo">
            <img src="img/logo/white-moabi-onlyFigure.svg" alt="Logo Moabi">
          </div>
          <div class="agencyValue_content">
            <img src="img/logo/orange-moabi.svg" alt="Logo Moabi">
            <h2>notre agence</h2>
            <p>Le brin de curiosité mêlé à un soupçon d’audace qui vous donnera la recette pour aller au bout de vos projets.
            Venez goûter le fruit de notre passion!</p>
            <p>Moabi est une agence de 15 étudiants de deuxième années en DUT MMI.  Passionné et complémentaire, ils sont en charge de réaliser différents projets alliant de multiples compétences tout au long de l’année.</p>
            <a href="#">
              <span>rapport d'agence</span>
            </a>
          </div>
        </div>
        <div class="agencySkills_container">
          <h2>nos domaines</h2>
          <div class="agencySkills_content">
            <div>
              <img src="img/icon/icon-bubble.png" alt="css/Bulle de dialogue">
              <p>Qu'elle soit digital ou non, nous l’assurons pour propulser vos projets.</p>
            </div>
            <div>
              <img src="img/icon/icon-computer.png" alt="Ordinateur">
              <p>Les lignes de code dansent grâce à nous pour s’aligner comme dans vos pensées.</p>
            </div>
            <div>
              <img src="img/icon/icon-pen.png" alt="Stylo">
              <p>L’univers graphique est vaste, nous sommes là pour vous guider.</p>
            </div>
            <div>
              <img src="img/icon/icon-camera.png" alt="Camera">
              <p>Nous jouons avec l’image et le son pour sublimer vos projets.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="project" id="link-project">
        <h2>nos projets</h2>
        <div class="project-right_content">
          <span class="project_title">
            <h3>Naturopathe</h3>
          </span>
          <div class="project_img_1 project_img js-project_img"></div>
          <div class="projet-desc_container">
            <div class="js-desc_content">
              <p>Conception et réalisation d’un univers graphique et d’un site web pour le compte d’une naturopathe indépendante.</p>
              <a href="http://localhost/agence-Moabi/www/projet.php?nbProject=0">Voir le projet ></a>
            </div>
          </div>
        </div>
        <div class="project-left_content">
          <span class="project_title">
            <h3>Myrelingues</h3>
          </span>
          <div class="projet-desc_container">
            <div class="js-desc_content">
              <p>Réalisation de motions design pour prévenir les méthodes de blanchiment de la peau en Afrique.</p>
              <a href="#">Voir le projet ></a>
            </div>
          </div>
          <div class="project_img_2 project_img js-project_img"></div>
        </div>
        <div class="project-right_content">
          <span class="project_title">
            <h3>FRAMMI</h3>
          </span>
          <div class="project_img_3 project_img js-project_img"></div>
          <div class="projet-desc_container">
            <div class="js-desc_content">
              <p>Organisation du festival audiovisuel vitrine du département MMI, qui récompense les réalisation des élèves de ce département au travers d’une cérémonie regroupant élèves, professeurs et professionnels.</p>
              <a href="#">Voir le projet ></a>
            </div>
          </div>
        </div>
        <div class="project-left_content">
          <span class="project_title">
            <h3>Vital coach <br> event</h3>
          </span>
          <div class="projet-desc_container">
            <div class="js-desc_content">
              <p>Réalisation d’une vidéo promotionnel pour l'événement “ Road E-Bike Grand Prix” et par la même occasion, faire connaître le monde du vélo à assistance électrique en compétition.</p>
              <a href="#">Voir le projet ></a>
            </div>
          </div>
          <div class="project_img_4 project_img js-project_img"></div>
        </div>
        <div class="project-right_content">
          <span class="project_title">
            <h3>Joseph Aka</h3>
          </span>
          <div class="project_img_5 project_img js-project_img"></div>
          <div class="projet-desc_container">
            <div class="js-desc_content">
              <p>Conception et réalisation, en relation avec l’artiste Joseph Aka, d’un environnement numérique pour la création d’un spectacle de danse contemporaine sur le sujet de la migration.</p>
              <a href="#">Voir le projet ></a>
            </div>
          </div>
        </div>
        <div class="project-left_content">
          <span class="project_title">
            <h3>IFSI Escape<br>Game</h3>
          </span>
          <div class="projet-desc_container">
            <div class="js-desc_content">
              <p>Conception et réalisation d’un escape game semi-numérique autour du thème de la gestion des risques lors des transfusions sanguines.</p>
              <a href="#">Voir le projet ></a>
            </div>
          </div>
          <div class="project_img_6 project_img js-project_img"></div>
        </div>
        <div class="project-right_content">
          <span class="project_title">
            <h3>Synpeak</h3>
          </span>
          <div class="project_img_7 project_img js-project_img"></div>
          <div class="projet-desc_container">
            <div class="js-desc_content">
              <p>Réalisation d’une vidéo sur l'implantation du sport au sein d’un environnement de travail pour l’entreprise Synpeak.</p>
              <a href="#">Voir le projet ></a>
            </div>
          </div>
        </div>
        <div class="project-left_content">
          <span class="project_title">
            <h3>Anniversaire<br>GACO</h3>
          </span>
          <div class="projet-desc_container">
            <div class="js-desc_content">
              <p>Réalisation d’une captation de l’anniversaire des 20 ans de la filière GACO Musique de l’IUT de Chambéry.</p>
              <a href="#">Voir le projet ></a>
            </div>
          </div>
          <div class="project_img_8 project_img js-project_img"></div>
        </div>
      </section>
      <section class="members" id="link-members">
        <h2>nos membres</h2>
        <div class="members_container">
          <div class="membersPictures">
            <div class="main-carousel">
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
            </div>
          </div>
          <div class="membresDesc">

          </div>
        </div>
      </section>
    </div>
  </div>
  <?php include 'include/footer.php'; ?>
  <script src="js/libs/jquery.js"></script>
  <script src="js/libs/flickity.pkgd.js"></script>

  <script src="js/initFlickity.js"></script>
  <script src="js/index_imgSize.js"></script>
  <script src="js/index-projet_offsetTxt.js"></script>
  <script src="js/smoothScroll.js"></script>
  <script src="js/onMove_nav.js"></script>
</body>
</html>
