<?php
$array_multidimensi = [
    ["kota" => "Jakarta", "makanan" => "Nasi Goreng", "harga" => 20000],
    ["kota" => "Bandung", "makanan" => "Batagor", "harga" => 15000],
    ["kota" => "Yogyakarta", "makanan" => "Gudeg", "harga" => 25000]
];

echo "<table border='1'>
<tr>
<th>Kota</th>
<th>Makanan Khas</th>
<th>Harga</th>
</tr>";

foreach ($array_multidimensi as $item) {
    echo "<tr>
    <td>{$item['kota']}</td>
    <td>{$item['makanan']}</td>
    <td>{$item['harga']}</td>
    </tr>";
}

echo "</table>";
?>
