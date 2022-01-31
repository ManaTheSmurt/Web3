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
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>E-mail</label>
          <input type="email" 
                 name="e-mail" 
                 placeholder="Adresa e-pošte"><br>

          <label>Korisničko ime</label>
          <?php if (isset($_GET['username'])) { ?>
               <input type="text" 
                      name="username" 
                      placeholder="Korisničko ime"
                      value="<?php echo $_GET['username']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="username" 
                      placeholder="Korisničko ime"><br>
          <?php }?>


     	<label>Lozinka</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Lozinka"><br>

          <label>Ponovite lozinku</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Ponovite lozinku"><br>

     	<button type="submit">Registriraj se</button>
          <a href="index.php" class="ca">Već imate korisnički račun?</a>
     </form>
</body>
</html>