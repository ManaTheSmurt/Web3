<?php 
session_start();
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    //Sanitizacija korisničkog imena i lozinke 
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	
	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
	// Provjerava je li neki dio formulata prazan i ako je javlja pogrešku
	if (empty($username)) {
		header("Location: admin_prijava.php?error=Upišite korisničko ime");
	    exit();
	}else if(empty($password)){
        header("Location: admin_prijava.php?error=Upišite lozinku");
	    exit();
	}else{
		// md5 hashiranje lozinke - mjera sigurnosti 
        $password = md5($password);

        //Query koji uspoređiva podatke dobivene iz formulara i baze podataka
		$sql = "SELECT * FROM admini WHERE username='$username' AND password='$password'";

		$result = mysqli_query($conn, $sql);
		// Ukoliko se podatci dobiveni iz formulara i baze podataka slažu ovaj dio koda postavlja session sa tim korisničkim imenom i identifikacijskim brojem
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
            	$_SESSION['admin_username'] = $row['username'];
            	$_SESSION['admin_id'] = $row['id'];
				$_SESSION['admin_puno_ime'] = $row['puno_ime'];
				header("Location: admin_index.php?Uspjesna_prijava");
            }else{
				//  Ako se podatci ne slažu presumjerava korisnika na ponovnu prijavu i daje objašnjenje neuspjele prijave
				header("Location: admin_prijava.php?error=Netočno korisničko ime ili lozinka");
				exit();
			}
		}else{
			header("Location: admin_prijava.php?error=Netočno korisničko ime ili lozinka");
	        exit();
		}
	}
	
}else{
	header("Location: index.php?Neuspjesna_prijava");
	exit();
}


