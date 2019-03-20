<!doctype html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../CSS/Templating.css">
    <title>Home</title>
  </head>
  <body>
    <?php include "../HTML/Navbar.html" ?>
    <?php include "../PHP/Date.php" ?>
    <?php include "../HTML/Carousel.html" ?>
    <div class="container">
      <div id="textField" class="jumbotron jumbotron-fluid" >
        <div class="container">
          <h1 class="display-4">Welkom!</h1>
          <p class="lead">Mijn naam is Danny van der Weijde en ik ben 19 jaar oud. Ik heb eerste de opleiding Mediavormgeving gevolgt voor een jaar en nu volg ik de opleiding Applicatie medewerker. Klik hier om <a id="werkLink" href="Werk.php">mijn werk</a> te vinden en klik hier om <a id="skillsLink" href="Skills.php">mijn skills</a> te vinden.</p>
        </div>
      </div>
    </div>
    <?php include "../HTML/Footer.html" ?>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../Javascript/Navbar.js"></script>
  </body>