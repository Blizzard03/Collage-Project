<?php
trait HonorHarian
{
    public function SetHadir($Hadir)
    {
        $this->Hadir = $Hadir;
    }

    public function SetTerlambat($Terlambat)
    {
        $this->Terlambat = $Terlambat;
    }

    public function GetHadir()
    {
        return $this->Hadir;
    }

    public function GetTerlambat()
    {
        return $this->Terlambat;
    }

    public function HitungHonorHarian()
    {
        return ($this->GetHadir() * 90000) - ($this->GetTerlambat() * 0.01 * $this->GetHadir() * 90000);
    }
}

trait HonorLembur
{
    public function SetLembur($slbr)
    {
        $this->Lembur = $slbr;
    }

    public function GetLembur()
    {
        return $this->Lembur;
    }

    public function HitungHonorLembur()
    {
        if (1 <= $this->GetLembur() && $this->GetLembur() <= 10) {
            return $this->GetLembur() * 20000;
        } elseif (11 <= $this->GetLembur() && $this->GetLembur() <= 20) {
            return $this->GetLembur() * 25000;
        } elseif ($this->GetLembur() > 20) {
            return $this->GetLembur() * 30000;
        } else {
            0;
        }
    }
}

class SATPAM
{
    protected $Hadir;
    protected $Terlambat;

    use HonorHarian;

    function Converter($Input)
    {
        return "Rp " . number_format($Input, 2, ',', '.');
    }
}

class OB
{
    protected $Hadir;
    protected $Terlambat;
    protected $Lembur;
    protected $HonorLemburPerjam;

    use HonorHarian, HonorLembur;
   
    function Converter($Input)
    {
        return "Rp " . number_format($Input, 2, ',', '.');
    }
}

$Security = new SATPAM();
$Security->SetHadir(24);
$Security->SetTerlambat(4);

$Cleaning_Service = new OB();
$Cleaning_Service->SetHadir(25);
$Cleaning_Service->SetTerlambat(1);
$Cleaning_Service->SetLembur(15);

echo "<b><h3>CONTOH OUTPUT PROGRAM<h3></b>";
echo "<h2><b>HONOR SATPAM</b></h2>";
echo "Jumlah Hadir       : " . $Security->GetHadir() . "<br>";
echo "Jumlah Terlambat   : " . $Security->GetTerlambat() . "<br>";
echo "Total Honor Harian : " . $Security->Converter($Security->HitungHonorHarian()) . "<br><br>";
echo "<b><h2>HONOR STAFF OB</h2></b>";
echo "Jumlah Hadir       : " . $Cleaning_Service->GetHadir() . "<br>";
echo "Jumlah Terlambat   : " . $Cleaning_Service->GetTerlambat() . "<br>";
echo "Jumlah Jam Lembur  : " . $Cleaning_Service->GetLembur() . "<br>";
echo "Total Honor Harian : " . $Cleaning_Service->Converter($Cleaning_Service->HitungHonorHarian()) . "<br>";
echo "Total Honor Lembur : " . $Cleaning_Service->Converter($Cleaning_Service->HitungHonorLembur());
