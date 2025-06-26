<?php
function faktorial($a) {
    if ($a < 0) {
        return "Faktorial tidak didefinisikan untuk bilangan negatif.";
    } elseif ($a == 0 || $a == 1) {
        return 1;
    } else {
        $result = 1;
        for ($i = 2; $i <= $a; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

$number = 5;
$result_factorial = faktorial($number);

echo "Faktorial dari $number = $result_factorial"; // Output: Faktorial dari 5 = 120
?>