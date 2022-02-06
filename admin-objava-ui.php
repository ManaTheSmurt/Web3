<?php
session_start();
if (isset($_SESSION['admin_id']) && isset($_SESSION['admin_username'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objava - admin</title>
    <!--CSS datoteke za stilizaciju web-aplikacije -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/stylesheet.css">
        <script src="https://cdn.tiny.cloud/1/9xlm3e13sq1ylbqe87gr3io1uawcb7jype63fsfrenef8avg/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      </head>
<body>
<div class="PostForm">
  <?php if(isset($_REQUEST['info'])){?>
    <?php if($_REQUEST['info'] = "added") {?>
        <div class="alert alert-success" role="alert">
        Objava uspiješno dodana
        </div>
    <?php } ?>
  <?php } ?>
  
<!--Navigacijska traka - Bootstrap 5.0-->
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin_index.php">
      <!-- Ikona projekta koja u isto vrijeme služi kao gumb za povratak na početnu stranicu -->
      <img src="Logo 140x40 navbar.png" alt="logo-navbar" width="140" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/sve_objave.php">Sve objave</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="korisni_linkovi.php">Linkovi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/o_projektu.php">O projektu</a>
        </li>
          <!-- Skripta koja detektira je li korisnik prijavljen te ako je stavlja ikonu za pregled profila, te obratno ako korisnik nije prijavljen daje mogućnost prijave  -->
          <?php
            if (isset($_SESSION['admin_id']) && isset($_SESSION['admin_username'])) {
              echo '<li class="nav-item"><a href="/admin_pregled_profila.php" class="nav-link active"><i class="fas fa-user-circle fa-2x"></i></a></li>';
            }else{
              echo '<li class="nav-item"><a href="admin-prijava.php" class="nav-link">Prijavite se</a></li>';
            }
          ?>
      </ul>
    </div>
  </div>
</nav>
<!-- Formular za kreiranje objava -->

<form action="admin-objava-process.php" method="POST" enctype="multipart/form-data">
<div class="parent">
  <div class="row1">
    <textarea type="text" class="objaveTextarea" id="naslov_objave" name="naslov_objave" onkeyup="preview()" placeholder="naslov objave"></textarea>
  </div>
  <div class="row2">
    <textarea id="TinyMCE" name="sadrzaj_objave" placeholder="sadržaj objave"></textarea>
  </div>
  <div class="row3">
    <textarea class="objaveTextarea" id="kratki_opis" name="kratki_opis" onkeyup="preview()" placeholder="kratki opis"></textarea>
  </div>
  <div class="row4">
    <input type="file" id="image_picker" name="uploadfile"/>
  </div>
  <div class="row5">
    <button class="objaveFormSbmtBtn" name="new_post">Objavi</button>
  </div>

</div>
</form>
</div>
</div>
    
<div class="card text-white bg-white mx-auto mb-5 mt-4" style="width: 18rem;">
    <div class="card-body">
            <img id="imgPreview" src="#" class='card-img-top'>
            <h3 id ="naslovPreview" class="naslov_objave"></h3>
            <p id ="kratkiOpisPreview" class="card-text"></p>
            <a class="btn btn-light">Naučimo ➞</a>
     </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
   function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#imgPreview').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#image_picker").change(function(){
        readURL(this);
    });

  function preview() {
    $("#naslovPreview").html($("#naslov_objave").val());
    $("#kratkiOpisPreview").html($("#kratki_opis").val());

  
}

</script>
<footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3 mt-3">
      <li class="nav-item"><a href="sve_objave.php" class="nav-link px-2 text-muted">Sve objave</a></li>
      <li class="nav-item"><a href="korisni_linkovi.php" class="nav-link px-2 text-muted">Linkovi</a></li>
      <li class="nav-item"><a href="o_projektu.php" class="nav-link px-2 text-muted">O projektu</a></li>
      <?php
            if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
              echo ' <li class="nav-item"><a href="korisnik_pregled_profila.php" class="nav-link px-2 text-muted">Profil</a></li>';
            }else{
              echo ' <li class="nav-item"><a href="korisnik_prijava.php" class="nav-link px-2 text-muted">Prijavite se</a></li>';
            }
          ?>
      <li class="nav-item"><a href="admin_prijava.php" class="nav-link px-2 text-muted">Admin</a></li>
    </ul>
    <p class="text-center text-muted">2022. | Manuel Radaljac | <a class="text-muted" href="mailto:manuel.radaljac@skole.hr?subject=Web3 - kontakt">manuel.radaljac@skole.hr</a></p>
  </footer>
</body>
<!-- Kod koji učitava main.js javascript skriptu -->
<script src="/main.js"></script>
    <!-- Kod učitava koji učitava font awesome ikone -->
    <script src="https://kit.fontawesome.com/a9f583f331.js" crossorigin="anonymous"></script>
</html>

<?php
}else{
  header("Location: index.php?Nemate_dopustenje_za_pristup_toj_stranici");
  exit();
}

?>