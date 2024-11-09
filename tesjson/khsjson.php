<?php
// Tangkap variabel dari form
$npm = $_POST["npm"];
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jk"];
$jurusan = $_POST["jurusan"];
$vta = $_POST["tugas"];
$vtb = $_POST["uts"];
$vtc = $_POST["uas"];
$vtd = ($vta * 0.2) + ($vtb * 0.3) + ($vtc * 0.5);

// Tentukan grade dan keterangan lulus/gagal
if ($vtd >= 90) {
    $grade = "A";
    $keterangan = "Lulus";
} elseif ($vtd >= 80) {
    $grade = "B";
    $keterangan = "Lulus";
} elseif ($vtd >= 60) {
    $grade = "C";
    $keterangan = "Tidak Lulus";
} else {
    $grade = "D";
    $keterangan = "Tidak Lulus";
}

// Tampilkan datanya
echo "NPM : $npm <br>";
echo "Nama : $nama <br>";
echo "Jenis Kelamin : $jenis_kelamin <br>";
echo "Jurusan : $jurusan <br>";
echo "Nilai Tugas : $vta <br>";
echo "Nilai UTS : $vtb <br>";
echo "Nilai UAS : $vtc <br>";
echo "Total NILAI : $vtd <br>";
echo "Grade : $grade <br>";
echo "Keterangan : $keterangan <br>";

// File json yang akan dibaca
$file = "krs2.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Data array baru
$data[] = array(
    'npm' => $npm,
    'nama' => $nama,
    'jk' => $jenis_kelamin,
    'jurusan' => $jurusan,
    'tugas' => $vta,
    'uts' => $vtb,
    'uas' => $vtc,
    'nilai' => $vtd,
    'grade' => $grade,
    'keterangan' => $keterangan,
);

$konten = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan konten di file
file_put_contents($file1, $konten);

// Menampilkan data
foreach ($data as $key => $value) {
    echo "<br>";
    echo "<hr>";
    echo "NPM : " . $value['npm'] . '<br>';
    echo "Nama : " . $value['nama'] . '<br>';
    echo "Jenis Kelamin : " . $value['jk'] . '<br>';
    echo "Jurusan : " . $value['jurusan'] . '<br>';
    echo "Tugas : " . $value['tugas'] . '<br>';
    echo "UTS : " . $value['uts'] . '<br>';
    echo "UAS : " . $value['uas'] . '<br>';
    echo "Nilai : " . $value['nilai'] . '<br>';
    echo "Grade : " . $value['grade'] . '<br>';
    echo "Keterangan : " . $value['keterangan'] . '<br>';
    echo "<hr>";
}
?>
