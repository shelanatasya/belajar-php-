<?php
$pembelian = 60000;
$diskon =0;

if ($pembelian >= 50000) {
    $diskon = $pembelian * 0 . 2;
}elseif ($pembelian >= 25000)
{
    $diskon = $pembelian * 0 . 1;
}else{
    $diskon = 0;
}
echo "anda mendapatkan diskon sebesar" . $diskon;
?>