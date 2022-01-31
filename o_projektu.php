<?php 
session_start();
include "admin-objava-process.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sadržaj</title>
    <!--CSS datoteke za stilizaciju web-aplikacije -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/stylesheet.css">
</head>
<body>
 <!--Navigacijska traka - Bootstrap 5.0-->
 <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <!-- Ikona projekta koja u isto vrijeme služi kao gumb za povratak na početnu stranicu -->
      <img src="Logo 140x40 navbar.png" alt="logo-navbar" width="140" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/sadrzaj.php">Sadržaj</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="korisni_linkovi.php">Linkovi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
          <!-- Skripta koja detektira je li korisnik prijavljen te ako je stavlja ikonu za pregled profila, te obratno ako korisnik nije prijavljen daje mogućnost prijave  -->
          <?php
            if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
              echo '<a href="/korisnik_pregled_profila.php" class="nav-link"><i class="fas fa-user-circle fa-2x"></i></a>';
            }else{
              echo '<a href="korisnik_prijava.php" class="nav-link">Prijavite se</a>';
            }
          ?>
      </ul>
    </div>
  </div>
</nav>

<h1>Koja je namjena ovog projekta</h1>

</body>
<!-- Kod koji učitava main.js javascript skriptu -->
<script src="/main.js"></script>
    <!-- Kod učitava koji učitava font awesome ikone -->
    <script src="https://kit.fontawesome.com/a9f583f331.js" crossorigin="anonymous"></script>
</html>