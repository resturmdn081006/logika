<?php
$tinggiBadan = 160; 
$beratBadan = 55; 

$tinggiBadanMeter = $tinggiBadan / 100;
$imt = $beratBadan / ($tinggiBadanMeter * $tinggiBadanMeter);

if ($imt >= 25) {
    echo "Obesitas.";
} elseif ($imt >= 22.9 && $imt < 24.9) {
    echo "Lebih.";
} elseif ($imt >= 18.5 && $imt < 25) {
    echo "Normal.";
} else {
    echo "Kurang .";
}
?>
