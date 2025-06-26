<?php
if (isset($_GET['angka'])) {
    $angka = $_GET['angka'];
    for ($i = 1; $i <= $angka; $i++) {
        echo $i . " ";
    }
} else {
    echo "Variabel 'angka' tidak ada.";
}
?>
