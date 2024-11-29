<?php
include 'koneksi.php';

$sql = "SELECT * FROM buku_tamu";
$result = mysqli_query($conn, $sql);

echo "<h2>Daftar Buku Tamu</h2>";
echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Isi Pesan</th>
</tr>";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>" . $row['ID_BT'] . "</td>
            <td>" . $row['NAMA'] . "</td>
            <td>" . $row['EMAIL'] . "</td>
            <td>" . $row['ISI'] . "</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='4'>Tidak ada data.</td></tr>";
}
echo "</table>";

mysqli_close($conn);
?>
