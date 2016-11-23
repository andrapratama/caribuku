<!DOCTYPE html>
<html>
<head>
	<title>Cari Buku</title>
	<meta name="viewport" content="width=device-width, initialscale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		.container {
			width: 90%;
			margin: 20px auto; 
			padding: 20px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			height: auto;
		}

		.data {
			width: 20%;
			float: left;
			padding: 20px;
		}

		.sinopsis {
			width: 40%;
			float: left;
			padding-top: 20px;

		}

		.letak {
			width: 30%;
			float: right;
			padding-top: 20px;
		}
	</style>
<body>
<div class="container">
<form method="post" name="form1" role="form" style="margin: 10px auto">
  <div class="form-group">
    <label class="control-label col-sm-2" for="cari">Cari buku di form ini</label>
    <input name="txtCari" type="text" size="40" list="txtCari">
    	<datalist id="txtCari">
    	<?php
    		include "koneksi.php";
			$sqlcari = "SELECT judul FROM databuku";
			$querycari = mysqli_query($koneksi, $sqlcari);
			while ($data=mysqli_fetch_assoc($querycari)) {
				echo "<option value='$data[judul]'>";
			}
		?>
    	</datalist>
    <input style="margin-bottom: 10px" name="btnCari" type="submit" value="Cari" class="btn btn-default">
  </div>
</form>

<?php
if ($_POST) {
	include "koneksi.php";
	$sql = "SELECT * FROM databuku WHERE judul='".$_POST['txtCari']."'";
	$query = mysqli_query($koneksi, $sql);
	while ($data= mysqli_fetch_array($query)) {
		echo "<div class='data'>";
		echo "<b>".$data['judul']."</b>";
		echo "<br>";
		echo "<img src='gambar/".$data['gambar']."' width='150' alt='".$data['gambar']."'>";
		echo "<br><br>";
		echo "<b>Penerbit :</b><br>";
		echo $data['penerbit'];
		echo "<br><br>";
		echo "<b>Pengarang :</b><br>";
		echo $data['pengarang'];
		echo "</div>";

		echo "<div class='sinopsis'>";
		echo $data['sinopsis'];
		echo "</div>";

		echo "<div class='letak'>";
		echo "<b>Lokasi :</b><br>";
		echo $data['lokasi'];
		echo "<br><br>";
		echo "<b>Jumlah :</b><br>";
		echo $data['stok'];
		echo "</div>";
	}
}
?>
</div>
</body>
</html>