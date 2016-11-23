<?php
error_reporting(0);
$host = "localhost";
$user = "root";
$pass = "";
$db = "pencarianbukudb";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
	die("Gagal koneksi: ".mysqli_connect_error());
}
?>