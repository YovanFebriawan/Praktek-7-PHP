<!-- Menambahkan skrip php -->
<?php
// Memasukkan file koneksi.php
include 'koneksi.php';
// Mengambil nilai dan menyimpan ke dalam fungsi
$id 			= $_POST['id'];
$nama			= $_POST['nama'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$email			= $_POST['email'];
$alamat			= $_POST['alamat'];
$kota			= $_POST['kota'];
$pesan			= $_POST['pesan'];
// Menyimpan perintah/query ke dalam fungsi
$sql="INSERT INTO kontak SET id='$id', Nama='$nama', jkel='$jenis_kelamin', Email='$email', Alamat='$alamat', Kota='$kota', Pesan='$pesan'";
// Mengeksekusi perintah dan disimpan ke dalam fungsi
$check=mysqli_query($koneksi, $sql);
// Melakukan pengecekan pada fungsi
if (!$check) {
	// Mencetak teks dan menutup koneksi
	die('Gagal Memasukkan data : '.mysqli_error($koneksi));
// Dieksekusi ketika terjadi kesalahan pada pengecekan
} else {
	// Mencetak teks
	echo "Data berhasil dimasukkan";
	echo '<br><br><a href="cetak.php">Cek</a>';
}
?>