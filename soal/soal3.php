<?php

$bulan = 5;

switch (true) {
    case ($bulan >= 1 && $bulan <= 3):
        echo "Musim dingin";
        break;
    case ($bulan >= 4 && $bulan <= 6):
        echo "Musim semi";
        break;
    case ($bulan >= 7 && $bulan <= 9):
        echo "Musim panas";
        break;
    case ($bulan >= 10 && $bulan <= 12):
        echo "Musim gugur";
        break;
    default:
        echo "anda memasukan rentang yang tidak sesuai";
}
