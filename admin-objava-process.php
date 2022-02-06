<?php 
include "db_conn.php";

$msg = "";

$sql = "SELECT * FROM postovi";
$query = mysqli_query($conn, $sql);

if(isset($_REQUEST["new_post"])) {
    $content = $_REQUEST['sadrzaj_objave'];
    $naslov_objave = $_REQUEST['naslov_objave'];
    $kratki_opis = $_REQUEST['kratki_opis'];

    $filename = $_FILES["uploadfile"]['name'];
	$tempname = $_FILES["uploadfile"]['tmp_name'];	
	$folder = "slike_objava/".$filename;

    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Slika uspiješno postavljena";
    }else{
        $msg = "Postavljanje slike neuspiješno";
    }

    $sql = "INSERT INTO postovi(sadrzaj_objave, naslov_objave, slika_objave, kratki_opis) VALUES('$content', '$naslov_objave','$filename', '$kratki_opis')";
    mysqli_query($conn, $sql);

    header("location: admin_index.php?info=Uspjesno_dodano");
    exit();
}

if(isset($_REQUEST['id'])) {

    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM postovi WHERE id_objave = $id";
    $query = mysqli_query($conn, $sql);

}
?>



