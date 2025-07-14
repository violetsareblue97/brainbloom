<?php
$host = "localhost"; // atau alamat server database Anda
$user = "root"; // username database Anda
$db = "kontak"; // nama database Anda

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>