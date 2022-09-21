<?php
abstract class BANGUN_DATAR
{
	abstract protected function Hitung_Luas();

}

class BUJURSANGKAR extends BANGUN_DATAR
{
	protected $Sisi;

	public function SET_SISI($Sisi)
	{
		$this->Sisi = $Sisi;
	}

	public function GET_SISI()
	{
		return $this->Sisi;
	}

	public function Hitung_Luas()
	{
		return $this->Sisi * $this->Sisi;
	}
}

class SEGITIGA extends BANGUN_DATAR
{
	protected $ALAS;
	protected $Tinggi;
	public	function SET_ALAS($ALAS)
	{
		$this->ALAS = $ALAS;
	}

	public function SET_TINGGI($Tinggi)
	{
		$this->Tinggi = $Tinggi;
	}

	public function GET_ALAS()
	{
		return $this->ALAS;
	}

	public function GET_TINGGI()
	{
		return $this->Tinggi;
	}
	public function Hitung_Luas()
	{
		return 0.5 * $this->ALAS * $this->Tinggi;
	}
}

class LINGKARAN extends BANGUN_DATAR{
protected $JARI_JARI;

public function SET_JARI_JARI($JARI_JARI){
	$this ->JARI_JARI = $JARI_JARI;
}

public function GETJARI_JARI(){
	return $this->JARI_JARI;
}

public function Hitung_Luas(){
	return 22/7 * $this->JARI_JARI * $this->JARI_JARI;
}
}

//Inisiasi BUJURSANGKAR
$Kotak = new BUJURSANGKAR();
$Kotak->SET_SISI(4);

//Inisiasi SEGITIGA
$Segitiga_Siku_Siku= new SEGITIGA();
$Segitiga_Siku_Siku->SET_ALAS(5);
$Segitiga_Siku_Siku->SET_TINGGI(8);

//Inisiasi Lingkaran
$Lingkaran = new LINGKARAN();
$Lingkaran->SET_JARI_JARI(7);

echo "<b>CONTOH OUTPUT PROGRAM</b> <br>";
echo "Sisi : " . $Kotak->GET_SISI() . "<br>";
echo "Luas Bujur Sangkar: " . $Kotak->Hitung_Luas() . "<br><br><br>";
echo "Alas : " . $Segitiga_Siku_Siku->GET_ALAS()."<br>";
echo "Tinggi : " . $Segitiga_Siku_Siku->GET_TINGGI()."<br>";
echo "Luas Segitiga Siku-Siku : ". $Segitiga_Siku_Siku->Hitung_Luas()."<br><br><br>";
echo "Jari-jari:". $Lingkaran->GetJari_Jari(). "<br>";
echo "Luas Lingkaran : " . $Lingkaran ->Hitung_Luas();