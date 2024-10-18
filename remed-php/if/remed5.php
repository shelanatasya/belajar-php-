<?php

$tahun = 2024; 

if($tahun %4== 0){
    echo "tahun kabisat";
}elseif ($tahun %100 == 0) {
    echo "bukan tahun kabisat";
}

