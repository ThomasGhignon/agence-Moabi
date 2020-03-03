<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width"/>
  <meta name="keywords" content="HTML,CSS,JavaScript">
  <meta name="author" content="Ghignon Thomas">
  <title>Projet</title>

  <link rel="stylesheet" href="css/libs/cssReset.css">
  <link rel="stylesheet" href="css/style_global.css">
  <link rel="stylesheet" href="css/style_projet.css">

  <link rel="stylesheet" href="css/style_footer.css">
  <link rel="stylesheet" href="css/style_nav.css">
</head>
<body>
  <header>
    <div class="wrap">
      <?php include 'include/nav.php'; ?>

      <div class="headerContent">
        <h1>naturopathe</h1>
        <p>Projet  de communication, graphisme et développement web</p>
        <div class="headerImg_container">
          <div class="headerImg_content">
            <!-- <img src="img/pictures/testPicture.jpg" alt="image du projet"> -->
          </div>
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
      <section class="main_content">

      </section>
    </div>
  </div>

  <?php include 'include/footer.php'; ?>
</body>
</html>
