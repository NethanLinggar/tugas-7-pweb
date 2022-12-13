<!DOCTYPE html>
<html>

<head>
    <title>Tugas PWEB</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>
    <form action="proses-pendaftaran.php" method="post">
        <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <input type="text" name="alamat" placeholder="alamat" />
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="sekolah_asal" />
            </p>
            <p>
                <label for="Agama">Agama: </label>
                <select name="Agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Buddha</option>
                    <option>Ateis</option>
                </select>
            </p>
            <p>
                <label for="Jenis_Kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
            </p>
            <p>
                <input type="submit" value="Daftar" name="Daftar" />
            </p>
        </fieldset>
    </form>
</body>

</html>