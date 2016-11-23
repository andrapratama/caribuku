<?php
session_start();
if ($_POST) {
	include "koneksi.php";
	$nama = $_POST['nama'];
	$katasandi = $_POST['katasandi'];
	$sql = "SELECT * FROM admin WHERE nama='$nama' AND katasandi='$katasandi'";
	$query = mysqli_query($koneksi, $sql);
	$ada = mysqli_num_rows($query);
	if ($ada > 0) {
		$_SESSION['nama'] = $nama;
		header("location:dataBuku.php");
	} else {
		echo "Nama dan Kata Sandi tidak cocok.";
		include "login.php";
	}
}
?>