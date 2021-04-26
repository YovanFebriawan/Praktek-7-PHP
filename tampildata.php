<!-- Membuat judul -->
<h2>List Mahasiswa</h2>
<!-- Mendefinisikan tabel -->
<table border="1">
	<!-- Mendefinisikan sel header  -->
	<tr><th>NO</th><th>NIM</th><th>NAMA</th><th>GENDER</th><th>JURUSAN</th></tr>
	<!-- Menambahkan skrip php -->
	<?php
	// Memasukkan file koneksi.php
	include 'koneksi.php';
	// Menyimpan perintah untuk menampilkan data ke dalam fungsi
	$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
	// Menyimpan nilai ke dalam fungsi
	$no=1;
	// Membuat perulangan
	foreach ($mahasiswa as $row) {
		// Mengecek kondisi kemudian menyimpan nilai ke dalam fungsi
		$jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan' : 'Laki laki';
		// Menampilkan teks berupa tabel
		echo "<tr>
			  <td>$no</td>
			  <td>".$row['nim']."</td>
			  <td>".$row['nama']."</td>
			  <td>".$jenis_kelamin."</td>
			  <td>".$row['jurusan']."</td>
			  </tr>";
	    // Menjumlahkan nilai sebanyak 1 setiap selesai melakukan perulangan
		$no++;
	}
	?>
</table>