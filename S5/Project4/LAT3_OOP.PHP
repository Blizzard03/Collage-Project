<?php 

class PEMBELI{
public $Harga_Barang;
public $Quantity;

function SetHarga($Hg){
	$this->Harga_Barang=$Hg;
}

function  SetQuantity($Qty){
    $this-> Quantity_Barang = $Qty;
}

function GetHarga(){
    return $this->Harga_Barang ;
}

function GetQuantity(){
    return $this->Quantity_Barang;
}

function HitungJumlahBayar(){
    return $this->Harga_Barang * $this -> Quantity_Barang;

}

function Converter($uang){
   return "Rp " . number_format($uang,2,',','.');
}
}
// KELAS BARU
class PELANGGAN extends PEMBELI
{
    public $Diskon;

    function HitungDiskon()
    {
        $Diskon = ($this->Harga_Barang * $this->Quantity_Barang) * 0.1;
        return $Diskon;
    }

    function HitungJumlahBayar()
    {
        $Bayar = ($this->Harga_Barang * $this->Quantity_Barang) - $this->HitungDiskon();
        return $Bayar;
    }
}


$Pembeli = new PEMBELI();
$Pembeli-> SetHarga(5000); 
$Pembeli->SetQuantity(3);

$Pelanggan = new PELANGGAN();
$Pelanggan-> SetHarga(5000);
$Pelanggan-> SetQuantity(3);
echo "<strong><h2> Transaksi oleh PEMBELI</h2></strong> <br>";
echo "Harga Barang : ". $Pembeli ->Converter($Pembeli->Harga_Barang) . "<br>";
echo "Quantity : ". $Pembeli->GetQuantity() . "<br>";
echo "Jumlah Bayar : " .$Pembeli ->Converter($Pembeli->HitungJumlahBayar()). "<br>";
echo "<strong><h2> Transaksi oleh Pelanggan</strong></h2> <br>";
echo "Harga Barang : " . $Pelanggan->Converter($Pelanggan->GetHarga())."<br>";
echo "Quantity : " . $Pelanggan->GetQuantity()."<br>";

echo "Diskon : " .$Pelanggan->Converter($Pelanggan->HitungDiskon())."<br>";
echo "Total Bayar :" . $Pelanggan->Converter($Pelanggan->HitungJumlahBayar());

