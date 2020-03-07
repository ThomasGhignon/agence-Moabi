<?php
$fileJson = 'json/data_project.json';
$data = file_get_contents($fileJson);
$obj = json_decode($data);

$nbProject = $_GET["nbProject"];
 ?>
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

  <title><?php echo $obj->project[$nbProject]->title; ?></title>

  <link rel="stylesheet" href="css/libs/cssReset.css">
  <link rel="stylesheet" href="css/style_global.css">
  <link rel="stylesheet" href="css/style_projet.css">

  <link rel="stylesheet" href="css/style_footer.css">
  <link rel="stylesheet" href="css/style_nav.css">

  <link rel="stylesheet" href="css/responsive/responsive_global.css">
  <link rel="stylesheet" href="css/responsive/responsive_projet.css">
</head>
<body>
  <div class="onMoveNav navHidden">
    <div class="wrap">
      <?php include 'include/nav_project.php'; ?>
    </div>
  </div>
  <header>
    <div class="wrap">
      <?php include 'include/nav_project.php'; ?>

      <div class="headerContent">
        <div>
          <h1><?php echo $obj->project[$nbProject]->title; ?></h1>
          <p><?php echo $obj->project[$nbProject]->head; ?></p>
        </div>

        <div class="headerImg_container">
          <div class="headerImg_content">
            <img src="<?php echo $obj->project[$nbProject]->projectPicture; ?>" alt="image du projet">
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
      <section class="project_desc">
        <div>
          <img src="img/logo/white-moabi-onlyFigure.svg" alt="Logo Moabi">
        </div>
        <div>
          <h2>Description du projet</h2>
          <p><?php echo $obj->project[$nbProject]->main; ?></p>
          <h3>Technologies et outils :</h3>
          <span><?php echo $obj->project[$nbProject]->tools; ?></span>
        </div>
      </section>
      <section class="project_office">
        <div class="office_container">
          <h2>Le bureau</h2>
          <div class="office_content">
            <?php
              for ($i=0; $i < count($obj->project[$nbProject]->office); $i++) {
                echo "<div>
                          <div><img src='". $obj->project[$nbProject]->office[$i]->memberPicture ."' alt='photo membre'></div>
                          <h4>". $obj->project[$nbProject]->office[$i]->name ."</h4>
                          <p>". $obj->project[$nbProject]->office[$i]->role ."</p>
                        </div>";
              }
             ?>
          </div>
        </div>
      </section>
    </div>
  </div>

  <?php include 'include/footer.php'; ?>
  <script src="js/libs/jquery.js"></script>
  <script src="js/onMove_nav.js"></script>
</body>
</html>
