<?php
if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];
    echo "Detail dari nama: " . htmlspecialchars($nama);
    echo "<br><a href='latihan5b.php'>Kembali</a>";
} else {
    echo "Nama tidak ditemukan.";
}
?>
