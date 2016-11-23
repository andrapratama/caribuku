<?php
session_start();
if(empty($_SESSION['nama'])){
	header("location:login.php");
}

if ($_POST) {
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$penerbit = $_POST['penerbit'];
	$pengarang = $_POST['pengarang'];
	$sinopsis = $_POST['sinopsis'];
	$lokasi = $_POST['lokasi'];
	$stok = $_POST['stok'];

	include "koneksi.php";
	$file_name = $_FILES['gambar']['name'];
	$file_name = stripslashes($file_name);
	$file_name = str_replace("'","",$file_name);
				
	copy($_FILES['gambar']['tmp_name'],"gambar/".$file_name);
	if (! $_FILES['gambar']['name']=="") {
		$namafile = $_FILES['gambar']['name'];
	}
	else {
		$namafile = $_POST['gambarHidden'];
	}
	$sql = "UPDATE databuku SET 
		judul='$judul', gambar='$namafile', 
		penerbit='$penerbit', 
		pengarang='$pengarang', 
		sinopsis='$sinopsis', 
		lokasi='$lokasi', 
		stok='$stok' WHERE id='$id'";

	if (mysqli_query($koneksi, $sql)) {
   		include "dataBuku.php";
   		echo "Data buku berhasil diubah";
	} else {
    	echo "Kesalahan: ".$sql."<br>".mysqli_error($koneksi);
	}
	mysqli_close($koneksi);
}
?>