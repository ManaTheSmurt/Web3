<?php

$hostName= "127.0.0.1";
$uName= "root";
$password = "";

$db_name = "web3";

$conn = mysqli_connect($hostName, $uName, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}