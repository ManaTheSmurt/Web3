<!DOCTYPE html>
<html>
<head>
	<title>Registracija</title>
	<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
     <form action="korisnik_registracija_process.php" method="post">
     	<h2>Registriraj korisnika</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error" style="color: #FFFFFF;"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success" style="color: #FFFFFF;"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <input type="email" name="e-mail" placeholder="Adresa e-pošte"><br>

          <?php if (isset($_GET['username'])) { ?>
               <input type="text" name="username" placeholder="Korisničko ime" value="<?php echo $_GET['username']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="username" placeholder="Korisničko ime"><br>
          <?php }?>
     	<input type="password" name="password" placeholder="Lozinka"><br>

          <input type="password" name="re_password" placeholder="Ponovite lozinku"><br>

     	<button type="submit">Registriraj se</button>
          <a href="korisnik_prijava.php" class="ca">Već imate korisnički račun?</a>
     </form>
</body>
</html>