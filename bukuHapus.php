<?php
session_start();
if(empty($_SESSION['nama'])){
	header("location:login.php");
}

if ($_GET) {
	include "koneksi.php";
	$sql = "DELETE FROM databuku WHERE id='".$_GET['id']."'";
	if (mysqli_query($koneksi, $sql)) {
		include "dataBuku.php";
		echo "Data buku berhasil dihapus";
	} else {
    	echo "Kesalahan: ".$sql."<br>".mysqli_error($koneksi);
	}
}
?>