<?php

$nilai = 75;

switch (true) {
    case ($nilai >= 90);
        echo "A";
        break;
    case ($nilai >= 80);
        echo "B";
        break;
    case ($nilai >= 70);
        echo "c";
        break;
    case ($nilai >= 60);
        echo "D";
        break;
    default:
        echo "E";
        break;
};
