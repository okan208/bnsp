<form action="khsjson.php" method="post">
    <h3>Program Menghitung Nilai Mata Kuliah</h3>

    NPM : <input type="text" name="npm" /><br />

    Nama : <input type="text" name="nama" /><br />

    Jenis Kelamin :<br />
    <input type="radio" name="jk" value="Laki-laki" /> Laki-laki<br />
    <input type="radio" name="jk" value="Perempuan" /> Perempuan<br />

    Jurusan :
    <select name="jurusan">
        <option value="">Pilih Jurusan</option>
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknik Elektro">Teknik Elektro</option>
        <option value="Teknik Sipil">Teknik Sipil</option>
        <!-- Tambahkan opsi jurusan lain jika diperlukan -->
    </select><br />

    Masukan Input Tugas : <input type="text" name="tugas" /><br />
    Masukan Input UTS : <input type="text" name="uts" /><br />
    Masukan Input UAS : <input type="text" name="uas" /><br />

    <input type="submit" value="OK" name="bok" />
    <input type="reset" value="Batal" />
</form>
