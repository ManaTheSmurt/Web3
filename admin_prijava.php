<!DOCTYPE html>
<html>
<head>
	<title>Admin prijava</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
    <!--CSS datoteke za stilizaciju web-aplikacije -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
        <!-- Formular za prijavu - šalje podatke na obradu skripti userLoginProcess i uspješnom prijavom prijavljuje korisnika u njegov račun  -->
		<div class="container korisnicka prijava master">
        <form action="admin_prijava_process.php" method="post">
		<div class="container korisnicka prijava">
		<div class="grid korisnicka prijava">
			<div class="logo"><img src="/Logo 140x40 navbar.png"></div>
			<div class="korisnicko_ime"><input type="text" name="username" placeholder="Korisničko ime" class="username_input"><br></div>
			<div class="lozinka"><input type="password" name="password" placeholder="Lozinka" class="password_input"></div>
			<?php if (isset($_GET['error'])) { ?>
     		<p class="error" style="color:red;"><?php echo $_GET['error']; ?></p>
     		<?php } ?>
			<div class="prijava"><button class="prijava_button" type="submit">Prijava</button> <a class="nemas_racun" href="korisnik_registracija_ui.php" class="ca">Nemaš račun?</a></div>
			<b class="admin_prijava_upozorenje">Administratorska prijava</b>
		</div>
		</div>
     </form>
     </div>
</body>
</html>