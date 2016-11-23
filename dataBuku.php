<?php
session_start();
if(empty($_SESSION['nama'])){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Buku</title>
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
 <div class="container-fluid">
<h3>Data Buku</h3>
<table class="table table-striped table-hover table-bordered">
	<tr>
		<td>No.</td>
		<td>Judul</td>
		<td>Gambar Sampul</td>
		<td>Penerbit</td>
		<td>Pengarang</td>
		<td>Sinopsis</td>
		<td>Lokasi</td>
		<td>Stok</td>
		<td>Aksi</td>
	</tr>
	<?php
		include "koneksi.php";
		$sql = "SELECT * FROM databuku ORDER BY id";
		$query = mysqli_query($koneksi, $sql);
		$no = 1;
		while ($data = mysqli_fetch_assoc($query)) {
			echo "<tr>";
			echo "<td>".$no."</td>";
			echo "<td>".$data['judul']."</td>";
			echo "<td>";
			echo "<img src='gambar/".$data['gambar']."' width='60' alt='".$data['gambar']."'>";
			echo "</td>";
			echo "<td>".$data['penerbit']."</td>";
			echo "<td>".$data['pengarang']."</td>";
			echo "<td width='300'>".$data['sinopsis']."</td>";
			echo "<td>".$data['lokasi']."</td>";
			echo "<td>".$data['stok']."</td>";
			echo "<td><a href='bukuUbah.php?id=".$data['id']."'>Ubah</a> | <a href='bukuHapus.php?id=".$data['id']."'>Hapus</a></td>";
			echo "</tr>";
			$no++;
		}
		mysqli_close($koneksi)
	?>
</table>
</div>
</body>
</html>