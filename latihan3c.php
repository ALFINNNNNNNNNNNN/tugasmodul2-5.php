<?php
function pangkat($angka, $pangkat) {
    return $angka ** $pangkat; 
}

$base = 5;
$exponent = 4;
$result = pangkat($base, $exponent);

echo "$base pangkat $exponent = $result"; 
?>
