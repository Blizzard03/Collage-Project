<?php
//Definisi Class EffectText
class EffectText {
public $Text;

function SetText($st){
$this->Set_Text = $st;
}
function GetText(){
return $this->Set_Text;
}
function Capital(){
	return STRTOUPPER($this->Set_Text);
}

function Small(){
	return STRTOLOWER ($this->Set_Text);
}
}

// Membuat objek Tulisan
$New_TEXT = new EffectText();

// Memasukan Text Input
$New_TEXT->SetText("Selamat Datang di Kota Bandung");

// Mengambil & menampilkan isi 
print "Text Input : {$New_TEXT->GetText()}";
print "<BR> Text Capital : {$New_TEXT->Capital()}";
print "<BR> Text Small : {$New_TEXT->Small()}";








?>