<?php

class SegiEmpat{
public $Panjang;
public $Lebar;

function SetPanjang($P){
$this->Panjang=$P;
}	

function SetLebar($L){
$this->Lebar = $L;	
}
	
function GetPanjang(){
	return $this->Panjang;
}	

function GetLebar(){
	return $this->Lebar;
}
	
function HitungLuas(){
	$Luas = $this->Panjang * $this->Lebar;
	return $Luas;
}	
	
function HitungKeliling(){
return (2 * ($this->Panjang + $this->Lebar));
}
}

$New_SegiEmpat = new SegiEmpat();
$New_SegiEmpat -> SetPanjang(10);
$New_SegiEmpat -> SetLebar(4);

print "Panjang : {$New_SegiEmpat->GetPanjang()}";
print "<br> Lebar :{$New_SegiEmpat->GetLebar()}";
print "<br> Luas segi-empat :{$New_SegiEmpat->HitungLuas()}";
print "<br> Keliling segi-empat :{$New_SegiEmpat->HitungKeliling()}";
?>