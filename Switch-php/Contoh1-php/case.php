<?php

$angka = 10;

switch(true) {
    case ($angka >0):
        echo "Angka positif";
        break;
    case ($angka <0):
        echo "Angka negatif";
        break;
    default:
        echo "Angka Nol";
}
?>