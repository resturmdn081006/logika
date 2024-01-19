<?php

function hitung($a) {
    for ($i = 1; $i <= 12; $i++) {
        $hasil = $a*4+$i*3;
        echo "Suku ke-$i: $hasil\n" . "<br/>";
    }
}

$a = 9;
hitung($a);

?>