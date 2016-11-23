<?php
session_start();
if(empty($_SESSION['nama'])){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Buku</title>
	<meta name="viewport" content="width=device-width, initialscale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default" style="background-color: #fff; width:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="dataBuku.php">Lihat Data</a></li>
      <li><a href="bukuTambah.php">Tambah Data</a></li>
      <li><a href="keluar.php">Keluar</a></li>
    </ul>
  </div>
 </nav>
 <div class="container">
<h3>Tambah Data Buku</h3>
<form action="bukuTambahProses.php" method="POST" enctype="multipart/form-data">
<table>
	<tr>
		<td>Judul</td>
		<td>
			<input type="text" name="judul">
		</td>
	</tr>
	<tr>
		<td>Gambar Sampul</td>
		<td>
			<input type="file" name="gambar">
		</td>
	</tr>
	<tr>
		<td>Penerbit</td>
		<td>
			<input type="text" name="penerbit">
		</td>
	</tr>
	<tr>
		<td>Pengarang</td>
		<td>
			<input type="text" name="pengarang">
		</td>
	</tr>
	<tr>
		<td>Sinopsis</td>
		<td>
			<textarea name="sinopsis"></textarea>
		</td>
	</tr>
	<tr>
		<td>Lokasi</td>
		<td>
			<input type="text" name="lokasi">
		</td>
	</tr>
	<tr>
		<td>Stok</td>
		<td>
			<input type="text" name="stok">
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="center">
			<input type="submit" value="Simpan" class="btn btn-default">
		</td>
	</tr>
</table>
</form>
</div>
</body>
</html>