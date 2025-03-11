<?php
$tomb = array(3, 1, 6, 4, 11);
$vanE = false; 

foreach ($tomb as $szam) {
    if ($szam > 5 && $szam <= 9) {
        $vanE = true;
        break;
    }
}
if ($vanE) {
    echo "Van a tömbben olyan szám, amely 5 < X <= 9.";
} else {
    echo "Nincs a tömbben olyan szám, amely 5 < X <= 9.";
}
?>