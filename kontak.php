<!-- Mendefinisikan tipe berupa html -->
<html>
<head>
	<!-- Membuat judul pada tab browser -->
	<title>Tambah Kontak</title>
</head>
<body>
	<!-- Membuat judul pada halaman web -->
	<h1>Tambah Kontak</h1>
	<!-- Mendefinisikan form -->
	<form method="POST" action="tambahkontak.php">
		<!-- Mendefinisikan tabel -->
		<table>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td>ID</td><td>: </td><td><input type="number" name="id"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td>NAMA</td><td>: </td><td><input type="text" name="nama"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td>JENIS KELAMIN</td><td>: </td><td>

					<input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
					<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
				</td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td>EMAIL</td><td>: </td><td><input type="email" name="email"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<td>ALAMAT</td><td>: </td><td><input type="text" name="alamat"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<td>KOTA</td><td>: </td><td><input type="text" name="kota"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<td>PESAN</td><td>: </td><td><input type="text" name="pesan"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td></td><td></td><td>
					<!-- Membuat tombol -->
					<input type="submit" name="Submit" value="Simpan">
					<input type="reset" name="reset" value="Bersihkan">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>