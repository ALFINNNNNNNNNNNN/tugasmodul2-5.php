<?php
$array_negara = ["Indonesia", "Malaysia", "Singapura", "Thailand", "Filipina"];
$array_negara[] = "Brunei";
$array_negara[] = "Vietnam";
$array_negara[] = "Kamboja";

echo "<ul>";
foreach ($array_negara as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";
?>
