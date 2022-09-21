<?php
$nilaiquiz = $_GET["NilaiKUIS"];
$nilaiuts = $_GET["NilaiUTS"];
$nilaiuas = $_GET["NilaiUAS"];

$bobotquiz = $nilaiquiz * 0.25;
$bobotuts = $nilaiuts * 0.35;
$bobotuas = $nilaiuas * 0.40;

$totalnilai = $bobotquiz + $bobotuts + $bobotuas;


function CalculationValue($totalnilai)
{
    if ($totalnilai <= 50) {
        $index_nilai_akhir = 'E';
    } else if ($totalnilai >= 51 and $totalnilai <= 60) {
        $index_nilai_akhir = 'A';
    } else if ($index_nilai >= 61 and $index_nilai <= 70) {
        $index_nilai_akhir = 'C';
    } else if ($totalnilai >= 71 and $totalnilai <= 85) {
        $index_nilai_akhir = 'B';
    } else if ($totalnilai >= 86) {
        $index_nilai_akhir = 'A';
    }

    return $index_nilai_akhir;
}
echo $totalnilai;
echo "<br>";
echo CalculationValue($totalnilai);
