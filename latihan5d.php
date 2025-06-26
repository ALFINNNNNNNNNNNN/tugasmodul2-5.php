<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Jumlah Baris: <input type="number" name="jumlah_baris"><br>
    Jumlah Angka: <input type="number" name="jumlah_angka"><br>
    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah_baris = $_POST['jumlah_baris'];
    $jumlah_angka = $_POST['jumlah_angka'];
    
    for ($i = 1; $i <= $jumlah_baris; $i++) {
        for ($j = 1; $j <= $jumlah_angka; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
}
?>

</body>
</html>
