<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Tugas PWEB</title>
</head>

<body>
    <header>
        <h1>Siswa yang sudah mendaftar</h1>
    </header>
    <nav><a href="form-daftar.php">Daftar Siswa Baru</a></nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>alamat</th>
                <th>sekolah asal</th>
                <th>agama</th>
                <th>jenis kelamin</th>
                <th>tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
        $sql = "SELECT * FROM siswa";
        $query = mysqli_query($db, $sql);
        while ($siswa = mysqli_fetch_array($query)) {
            echo "<tr>";

            echo "<td>" . $siswa['id'] . "</td>";
            echo "<td>" . $siswa['nama'] . "</td>";
            echo "<td>" . $siswa['alamat'] . "</td>";
            echo "<td>" . $siswa['sekolah_asal'] . "</td>";
            echo "<td>" . $siswa['Agama'] . "</td>";
            echo "<td>" . $siswa['Jenis_Kelamin'] . "</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=" . $siswa['id'] . "'>Edit</a> | ";
            echo "<a href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <p>Total:
        <?php echo mysqli_num_rows($query) ?>
    </p>
</body>

</html>