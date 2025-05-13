<?php
include "koneksi.php";

$nama    = $_POST['nama'];
$nim     = $_POST['nim'];
$jurusan = $_POST['jurusan'];

$sql = "INSERT INTO mahasiswa (nama, nim, jurusan)
        VALUES ('$nama', '$nim', '$jurusan')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil disimpan.<br>";
    echo "<a href='tampil.php'>Lihat Data</a>";
} else {
    echo "Gagal menyimpan data: " . $koneksi->error;
}
?>