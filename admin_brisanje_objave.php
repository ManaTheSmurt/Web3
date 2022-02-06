<?php
include "db_conn.php";

if(isset($_REQUEST['admin_brisanje_objave'])){

if (isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql= "DELETE * FROM postovi WHERE id_objave=$id;";

mysqli_query($conn, $sql);

header("Location: admin_index.php?Post_izbrisan");
}

?>