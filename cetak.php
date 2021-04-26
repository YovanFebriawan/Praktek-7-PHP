<!-- Mendefinisikan tipe berupa html -->
<html>
<!-- Mengelompokkan item -->
<div align="center">
<!-- Membuat judul pada halaman web -->
<h1>Daftar Kontak</h1>
<!-- Mendefinisikan tabel -->
<table border="1">
	<!-- Membuat sel header -->
	<tr><th>ID</th><th>NAMA</th><th>JENIS KELAMIN</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
	<!-- Menambahkan skrip php -->
	<?php
	// Memasukkan file koneksi.php
	include 'koneksi.php';
	// Menyimpan perintah untuk menampilkan data ke dalam fungsi
	$kontak = mysqli_query($koneksi, "SELECT * FROM kontak");
	// Menyimpan nilai ke dalam fungsi
	$no=1;
	// Membuat perulangan
	foreach ($kontak as $row) {
		// Mencetak tabel
		echo "<tr>
			  <td>".$row['id']."</td>
			  <td>".$row['Nama']."</td>
			  <td>".$row['jkel']."</td>
			  <td>".$row['Email']."</td>
			  <td>".$row['Alamat']."</td>
			  <td>".$row['Kota']."</td>
			  <td>".$row['Pesan']."</td>";
		// Menjumlahkan nilai sebanyak 1 setelah melakukan perulangan
		$no++;
	}
	?>
</table>
<!-- Membuat baris baru -->
<br>
<!-- Menuju ke halaman kontak.php -->
<a href="kontak.php">Tambah Data</a>
</div>
</html>