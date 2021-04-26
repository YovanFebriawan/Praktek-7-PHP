<!-- Mendefinisikan html -->
<!DOCTYPE html>
<html>
<head>
	<!-- Memberikan judul pada tab browser -->
	<title>Form Input</title>
</head>
<body>
	<!-- Mendefinisikan form -->
	<form method="post" action="simpan.php">
		<!-- Mendefinisikan tabel -->
		<table>
			<!-- Membuat sel header -->
			<tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" name="nim"></td></tr>
			<tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
			<tr><td>JENIS KELAMIN</td><td>
					<!-- Membuat radio button -->
					<input type="radio" name="jenis_kelamin" value="L">Laki Laki
					<input type="radio" name="jenis_kelamin" value="P">Perempuan
				</td></tr>
			<!-- Membuat sel header -->
			<tr><td>JURUSAN</td><td>
				<!-- Membuat dropdown list -->
					<select name="jurusan">
						<option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
						<option value="TEKNIK MESIN">TEKNIK MESIN</option>
						<option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
					</select>
				</td></tr>
			<!-- Membuat sel header -->
			<tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
			<tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
		</table>
	</form>
</body>
</html>