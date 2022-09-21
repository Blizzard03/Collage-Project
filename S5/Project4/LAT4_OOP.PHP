<?php
class MONTIR{
	public $Jumlah_Hadir;
	public $Jumlah_Absen;
	public $Honor_Harian;
	public $Uang_Transport;
	public $Total_Gaji;
	
	function Set_Hadir($Shdr){
	$this->Jumlah_Hadir = $Shdr;
	}
	
	function Set_Absen ($Sabn){
		$this->Jumlah_Absen = $Sabn;
	}
	
	function Get_Hadir(){
	return $this->Jumlah_Hadir;
	}
	
	function Get_Absen(){
	return $this->Jumlah_Absen;
	}
	
	function Hitung_Honor_Harian(){
		$Honor_Harian = $this->Jumlah_Hadir * 100000;
		return $Honor_Harian;
	}
	
	function Hitung_Uang_Transport(){
		$Uang_Transport= $this->Jumlah_Hadir *25000;
		return $Uang_Transport;
	}
	
	function Hitung_Total_Gaji(){
		$Total_Gaji =$this->Hitung_Honor_Harian()+ $this-> Hitung_Uang_Transport();
		return $Total_Gaji;
	}
	
	function Converter($Input){
   return "Rp " . number_format($Input,2,',','.');
}
}

class KEPALA_MONTIR extends MONTIR{
	public $Tunjangan_Kepala;
	public $Potongan_Absen;
	
	function Hitung_Tunjangan(){
		$Tunjangan_Kepala = 0.5* $this->Hitung_Honor_Harian();
	return $Tunjangan_Kepala;
}

function Hitung_Potongan_Absen(){
$Potongan_Absen = $this->Get_Absen() * 50000;
return $Potongan_Absen;
}

function Hitung_Total_Gaji(){
	$Total_Gaji = $this->Hitung_Honor_Harian() + $this->Hitung_Uang_Transport() + $this->Hitung_Tunjangan() - $this->Hitung_Potongan_Absen();
	return $Total_Gaji;
}
}
$Montir= new MONTIR();
$Montir -> Set_Hadir(20);
$Montir-> Set_Absen(3);

$Kepala_Montir = new KEPALA_MONTIR();
$Kepala_Montir ->Set_Hadir(20);
$Kepala_Montir ->Set_Absen(3);


echo "<strong><h2>Pembayaran Gaji MONTIR</strong></h2>";
echo "Jumlah Kehadiran : " . $Montir->Get_Hadir(). "<br>";
echo "Jumlah Absen : " . $Montir->Get_Absen()."<br>";
echo "Honor Harian : " . $Montir->Converter($Montir->Hitung_Honor_Harian()). "<br>";
echo "Uang Transport : " . $Montir->Converter($Montir->Hitung_Uang_Transport())."<br>";
echo "Jumlah Gaji : " . $Montir->Converter($Montir->Hitung_Total_Gaji())."<br><br>";
echo "<strong><h2>Pembayaran Gaji KEPALAMONTIR</strong></h2>";
echo "Jumlah Kehadiran : ". $Kepala_Montir->Get_Hadir()."<br>";
echo "Jumlah Absen : " . $Kepala_Montir->Get_Absen() ."<br>" ;
echo "Honor Harian : " . $Kepala_Montir->Converter($Kepala_Montir->Hitung_Honor_Harian())."<br>";
echo "Uang Transport :" . $Kepala_Montir->Converter($Kepala_Montir->Hitung_Uang_Transport())."<br>";
echo "Tunjangan Kepala : ". $Kepala_Montir->Converter($Kepala_Montir->Hitung_Tunjangan())."<br>";
echo "Potongan Absen : " . $Kepala_Montir->Converter($Kepala_Montir->Hitung_Potongan_Absen())."<br>";
echo "Jumlah Gaji : " . $Kepala_Montir-> Converter($Kepala_Montir->Hitung_Total_Gaji());
?>