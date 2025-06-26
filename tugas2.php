<?php
$nrp = "123456"; // Ganti dengan NRP kalian
$kategori = $nrp % 5;

$data = [
    ["nama" => "Bali", "gambar" => "bali.jpg", "deskripsi" => "Pulau Dewata", "kategori" => "Wisata", "harga" => 100000],
    ["nama" => "Jakarta", "gambar" => "jakarta.jpg", "deskripsi" => "Ibukota Indonesia", "kategori" => "Kota", "harga" => 50000],
    // Tambahkan 8 data lainnya sesuai kategori
];

echo "<table border='1'>
<tr>
<th>Nama</th>
<th>Gambar</th>
<th>Deskripsi</th>
<th>Kategori</th>
<th>Harga</th>
</tr>";

foreach ($data as $item) {
    echo "<tr>
    <td>{$item['nama']}</td>
    <td><img src='{$item['gambar']}' alt='{$item['nama']}' width='100'></td>
    <td>{$item['deskripsi']}</td>
    <td>{$item['kategori']}</td>
    <td>{$item['harga']}</td>
    </tr>";
}

echo "</table>";
?>
