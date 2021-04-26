<!-- Menambahkan skrip php -->
<?php 
// Mengaktifkan session php
session_start();
// Memasukkan file koneksi.php
include 'koneksi.php'; 
// Menyimpan data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
// Menyimpan perintah/query ke dalam fungsi
$sql = "SELECT * FROM login WHERE username='$username' and password='$password'";
// Mengeksekusi perintah/query
$hasil = $koneksi->query($sql) or die($koneksi->error.__LINE__);
// Melakukan pengecekan
if($hasil->num_rows > 0) {
	// Menuju ke file cetak.php
	header("location:cetak.php");
} else {
	// Mencetak teks
	echo 'Username/Password yang Anda masukkan salah. Silahkan ulang kembali';	
}
?>