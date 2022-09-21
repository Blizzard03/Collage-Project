<?php
Class Montir{
    public $JumlahHadir;
    public $JumlahAbsen;
    public $HonorHarian;
    public $UangTransport;
    public $TotalGaji;

function SetHadir($H){
    $this->JumlahHadir = $H;
}
function GetHadir(){
    return $this->JumlahHadir;
}
function SetAbsen($A){
    $this->JumlahAbsen = $A;
}
function GetAbsen(){
    return $this->JumlahAbsen;
}

function HitungUangTransport(){
$UangTransport = $this->JumlahAbsen*25000;
return $UangTransport;
}
function HitungHonorHarian(){
    $HonorHarian=$this->JumlahHadir * 1000000;
        return $HonorHarian;

}

function HitungTotalGaji(){
    $TotalGaji = $this->HitungHonorHarian() + $this->HitungUangTransport();
    return $TotalGaji;
}
}
$NewMontir = new Montir();
$NewMontir -> SetHadir(20);
$NewMontir -> SetAbsen(3);

Print "<h2><b>Pembayaran Gaji Montir: </h2></b>";
Print "<BR>Jumlah Kehadiran = {$NewMontir ->GetHadir()}";
Print "<BR>Jumlah Absen     = {$NewMontir ->GetAbsen()}";
Print "<BR>Honor Harian     = {$NewMontir ->HitungHonorHarian()}";
Print "<BR>Uang Transport   = {$NewMontir ->HitungUangTransport()}";
Print "<BR>Jumlah Gaji      = {$NewMontir ->HitungHonorHarian()}";
