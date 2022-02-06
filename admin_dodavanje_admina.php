<!DOCTYPE html>
<html>
<head>
	<title>Dodavanje admina</title>
	<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
     <form action="admin_dodavanje_admina_process.php" method="post">
     	<h2>Dodaj admina</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<h5 class="error"><?php echo $_GET['error']; ?></h5>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <h5 class="success"><?php echo $_GET['success']; ?></h5>
          <?php } ?>

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
          <label>Puno ime</label>
          <input type="text" 
                 name="full_name" 
                 placeholder="Puno ime admina"><br>

     	<label>Lozinka</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Lozinka"><br>

          <label>Ponovite lozinku</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Ponovite lozinku"><br>

     	<button type="submit">Registriraj se</button>
     </form>
</body>
</html>