<?php
$server = "localhost";
$user = "pweb";
$password = "test123";
$nama_database = "tugas_database_pweb";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>