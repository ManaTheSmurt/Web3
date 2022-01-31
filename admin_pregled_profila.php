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
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="stylesheet-user-view.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Admin profil</title>
</head>
<body>
<div class="grid-profile">
    <div class="outline-cube">
        <h3 class="username"><?php echo "$_SESSION[admin_username]";?></h3>
        <h4 class="id"> #<?php echo "$_SESSION[admin_id]";?></h4>
        <a href="/admin-objava-ui.php" class="nova_objava"><h3 class="nova_objava">Nova objava</h3></a>
        <a href="/admin_dodavanje_admina.php" class="nova_objava"><h3 class="dodavanje_admina">Dodavanje admina</h3></a>
        <a href="admin_index.php" class="btn btn-light profile admin">🠔 Povratak</a>
        <a href="/odjava.php" class="btn btn-light profile log-out admin">Odjava</a>
    </div>
</div>
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