<!doctype html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../CSS/Templating.css">
    <title>Contact</title>
  </head>
  <body>
    <?php include "../HTML/Navbar.html" ?>
    <?php include "../PHP/Date.php" ?>
    <?php include "../HTML/Carousel.html" ?>
    <div class="container">
      <span class="verplicht">* Verplicht</span>
      <form>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputPassword4">Voornaam <span class="verplicht">*</span></label>
            <input type="password" class="form-control" id="inputName" placeholder="Voornaam">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Achternaam <span class="verplicht">*</span></label>
            <input type="password" class="form-control" id="inputPassLastName" placeholder="Achternaam">
          </div>
          <div class="form-group col-md-4">
            <label for="inputEmail4">Email <span class="verplicht">*</span></label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Bericht <span class="verplicht">*</span></label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tekst..."></textarea>
        </div>
        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <?php include "../HTML/Footer.html" ?>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../Javascript/Navbar.js"></script>
  </body>
