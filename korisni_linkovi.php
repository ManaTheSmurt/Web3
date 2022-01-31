<?php 
session_start();
include "admin-objava-process.php";
include "db_conn.php";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Početna</title>
	<link rel="stylesheet" type="text/css" href="homeStyle.css">
     <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <meta name="HandheldFriendly" content="true">
     <meta charset="utf-8">
     <link rel="stylesheet" href="stylesheet-user-view.css">
     <link rel="stylesheet" href="stylesheet.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
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
    <div class="linkovi container">
    <i class="fab fa-tiktok fa-2x"></i>
    <a class="TikTokerslink" target="_blank" href="https://www.tiktok.com/@theblockchainboy">@theblockchainboy</a>
    <br>
    <i class="fab fa-tiktok fa-2x"></i>
    <a class="TikTokerslink" target="_blank" href="https://www.tiktok.com/@cryptomasun">@cryptomasun</a>
    </div>
</body>
    <!-- Kod koji učitava main.js javascript skriptu -->
    <script src="/main.js"></script>
    <!-- Kod učitava koji učitava font awesome ikone -->
    <script src="https://kit.fontawesome.com/a9f583f331.js" crossorigin="anonymous"></script>
</html>
