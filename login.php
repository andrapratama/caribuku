<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<meta name="viewport" content="width=device-width, initialscale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		#formLogin {
			width: 30%;
			margin:170px auto;
			padding: 10px 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;
		}
		h4 {
			margin-bottom: 20px;
			text-align: center;
		}
	</style>
</head>
<body>
<form action="loginProses.php" method="post" id="formLogin">
<h4>Login Admin</h4>
<table>
	<tr>
		<td width="150px">Nama pengguna</td>
		<td>
			<input type="text" name="nama" maxlength="15">
		</td>
	</tr>
	<tr>
		<td>Kata sandi</td>
		<td>
			<input type="password" name="katasandi" maxlength="15">
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="center">
			<input type="submit" value="Masuk" class="btn btn-default">
		</td>
	</tr>
</table>
</form>
</body>
</html>