<?php
session_start();
if(empty($_SESSION['nama'])){
	header("location:login.php");
}

if ($_POST) {
	$judul = $_POST['judul'];
	$penerbit = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$sinopsis = $_POST['sinopsis'];
	$lokasi = $_POST['lokasi'];
	$stok = $_POST['stok'];

	include "koneksi.php";
	$File = $_FILES['gambar']['name'];
	$sql = "INSERT INTO databuku VALUES(NULL, '$judul', '$File', '$penerbit', '$pengarang', '$sinopsis', '$lokasi', '$stok')";

	if (mysqli_query($koneksi, $sql)) {
   		include "dataBuku.php";
   		echo "Data buku berhasil disimpan";
	} else {
    	echo "Kesalahan: ".$sql."<br>".mysqli_error($koneksi);
	}
	
	$file_name	= $_FILES['gambar']['name'];
	$file_name	= stripcslashes($file_name);
	$file_name	= str_replace("'","",$file_name);

	copy($_FILES['gambar']['tmp_name'],"gambar/".$file_name);
	mysqli_close($koneksi);
}
?>