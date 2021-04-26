<!-- Mendefinisikan tipe berupa html -->
<html>
<head>
	<!-- Memberikan judul pada tab browser -->
	<title>Halaman Login</title>
</head>
<body>
	<!-- Menambahkan judul pada halaman web -->
	<h1>Selamat Datang</h1>
	<!-- Mendefinisikan form -->
	<form method="POST" action="cek_login.php">
		<!-- Mendefinisikan tabel -->
		<table>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td>Username</td><td>:</td><td><input type="text" name="username" placeholder="Masukkan Username"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td>Password</td><td>:</td><td><input type="password" name="password" placeholder="Masukkan Password"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td></td><td></td><td><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>