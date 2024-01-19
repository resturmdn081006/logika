<?php

$pukul = "07:00-11:45-08:55";

function ubahJam($jam){
    $hour = array(1900, 2345, 855);

    foreach($hour as $key){
        if ($key >= 1200){
            echo $jam . "AM" . "<br/>";
        } else{
            echo $jam . "PM" . '<br/>';
        }
        break;
    }
}

$jam = explode("-", $pukul);
ubahJam($jam[0]);
ubahJam($jam[1]);
ubahJam($jam[2]);