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
	$re_pass = validate($_POST['re_password']);
	$full_name = validate($_POST['full_name']);

	$user_data = 'username='. $username;


	if (empty($username)) {
		header("Location: admin_dodavanje_admina.php?error=Upišite korisničko ime&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location: admin_dodavanje_admina.php?error=Upišite lozinku&$user_data");
	    exit();
	}else if(empty($full_name)){
	header("Location: admin_dodavanje_admina.php?error=Upišite lozinku&$user_data");
	exit();
	}
	else if(empty($re_pass)){
        header("Location: admin_dodavanje_admina.php?error=Ponovite lozinku&$user_data");
	    exit();
	}else if($password !== $re_pass){
        header("Location: admin_dodavanje_admina.php?error=Niste točno potvrdili lozinku&$user_data");
	    exit();
	}

	else{

		// hashing the password
		$password = md5($password);

	    $sql = "SELECT * FROM admini WHERE username='$username' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: admin_dodavanje_admina.php?error=Korisničko ime već postoji odaberite neko drugo&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO admini(username, password,full_name) VALUES('$username', '$password', '$full_name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: admin_dodavanje_admina.php?success=Vaš je račun napravljen.");
	         exit();
           }else {
	           	header("Location: admin_dodavanje_admina.php?error=Unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: admin_dodavanje_admina.php");
	exit();
}