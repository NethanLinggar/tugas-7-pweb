<?php
include("config.php");

if (isset($_POST['Daftar'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $sekolah = $_POST['sekolah_asal'];
    $agama = $_POST['Agama'];
    $jk = $_POST['jenis_kelamin'];

    $sql = "INSERT INTO siswa (nama, alamat, sekolah_asal, Agama, jenis_kelamin) VALUES ('$nama', '$alamat', '$sekolah', '$agama', '$jk')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: index.php?status=sukses');
    } else {
        header('location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang");
}
?>