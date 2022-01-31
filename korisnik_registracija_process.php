<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])
     && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
	$email = validate($_POST['e-mail']);
	$re_pass = validate($_POST['re_password']);

	$user_data = 'username='. $username;


	if (empty($username)) {
		header("Location: korisnik_registracija_ui.php?error=Upišite korisničko ime&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location: korisnik_registracija_ui.php?error=Upišite lozinku&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: korisnik_registracija_ui.php?error=Ponovite lozinku&$user_data");
	    exit();
	}else if(empty($email)){
		header("Location:korisnik_registracija_ui.php?error=Upišite adresu e-pošte&$user_data");
	}

	else if($password !== $re_pass){
        header("Location: korisnik_registracija_ui.php?error=Niste točno potvrdili lozinku&$user_data");
	    exit();
	}

	else{

		// hashing the password
		$password = md5($password);

	    $sql = "SELECT * FROM korisnici WHERE username='$username' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: korisnik_registracija_ui.php?error=Korisničko ime već postoji odaberite neko drugo&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO korisnici(username, password,email) VALUES('$username', '$password', '$email')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: korisnik_registracija_ui.php?success=Vaš je račun napravljen.");
	         exit();
           }else {
	           	header("Location: korisnik_registracija_ui.php?error=Unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: korisnik_registracija_ui.php");
	exit();
}