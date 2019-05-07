<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Nick Sluiters, Joost Oomen, Jurgen Paapen, Stijn Pijman">
  <meta name="owner" content="Move with Friends">
  <meta name="description" content="Hét platform voor het vinden van een sportmaatje">
  <meta name="keywords" content="beweging, sporten, activiteiten, samen, buddy, maatje, vriend, move, with, friends">
  <title>MovewithFriends homepage</title>
  <link rel="icon" href="images/iconmwf.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
    <body>
        <div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <a href="../Controller/index.php">
        <img class="img-responsive" src="images/logomwf.png" style=" position: absolute; z-index: 2;" alt="">
      </a>
      <p class="logofoot"> Move with Friends</p>
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/wandelcarousel.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/crunchcarousel.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/squashcarousel.png" alt="Third slide">
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light backgroundnav sticky-top" id="kopje1">
    <div class="container col-xl-8">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link fred" rel="" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Move with Friends
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#kopje1">Move With Friends? Wat is dat?</a>
              <a class="dropdown-item" href="#kopje2">Hoe werkt het? </a>
              <a class="dropdown-item" href="#kopje3">Is het voor mij?</a>
              <a class="dropdown-item" href="#kopje4">Is Move With Friends echt gratis? </a>
            </div>
          </li>
          <li class="nav-item active">
                <a class="nav-link" href="registratie.php">Inschrijven<span class="sr-only">(current)</span></a>
            </li>
          <li class="nav-item active">
                <a class="nav-link" href="contactpaginaMWF.php">Contact<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
        <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
          <li>
            <a class="navbar-brand" target="_blank" href="https://www.facebook.com/movewithfriends.breda.3">
              <img src="images/facebookicon.png" title="Volg ons op Facebook" style="margin-left: 15px;" width="25" height="25" alt="">
            </a>
            <a class="navbar-brand" target="_blank" href="https://twitter.com/movewithfriends?lang=en">
              <img src="images/twittericon.png" title="Volg ons op Twitter" style="margin-left: 15px;" width="25" height="25" alt="">
            </a>
            <a class="navbar-brand" target="_blank" href="https://www.instagram.com/movewithfriends/">
              <img src="images/instagramicon.png" title="Volg ons op Instagram" style="margin-left: 15px;" width="25" height="25" alt=""></a>
            <div class="navbar-brand">
              <img src="images/loginicon.png" title="LOGIN" onclick="document.getElementById('modal-wrapper').style.display='block'" style="margin-left: 15px;" width="25" height="25" alt="">
            </div>
          </li>
        </ul>
    </div>
  </nav>

