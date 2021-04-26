<!-- Menambahkan skrip php -->
<?php
// Memasukkan file koneksi.php
include 'koneksi.php';
// Mengambil nilai dan memasukkan ke dalam variabel
$nim			= $_POST['nim'];
$nama			= $_POST['nama'];
$jurusan		= $_POST['jurusan'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$alamat			= $_POST['alamat'];
// Perintah/query untuk memasukkan data
$query = "INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', alamat='$alamat'";
// Menjalankan fungsi query dengan menggunakan fungsi koneksi
mysqli_query($koneksi, $query);
// Mengalihkan ke halaman index.php
header("location:index.php");
?>