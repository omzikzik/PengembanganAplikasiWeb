<?php
include "koneksi.php";

$sql = "SELECT * FROM mahasiswa";
$result = $koneksi->query($sql);

echo "<h2>Daftar Mahasiswa</h2>";
echo "<table border='1' cellpadding='5'>
<tr><th>No</th><th>Nama</th><th>NIM</th><th>Jurusan</th></tr>";
$no = 1;
while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$no++."</td>
            <td>".$row['nama']."</td>
            <td>".$row['nim']."</td>
            <td>".$row['jurusan']."</td>
          </tr>";
}
echo "</table>";
?>