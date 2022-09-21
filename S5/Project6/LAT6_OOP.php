<?php
interface NILAI
{
    public function HITUNG_NA();
    public function STATUS_KELULUSAN();
}

class NILAI_NON_PRATIKA implements NILAI
{
    protected $QUIZ;
    protected $UTS;
    protected $UAS;

    public function SET_QUIZ($QUIZ)
    {
        $this->QUIZ = $QUIZ;
    }

    public function SET_UTS($UTS)
    {
        $this->UTS = $UTS;
    }

    public function SET_UAS($UAS)
    {
        $this->UAS = $UAS;
    }

    public function GET_QUIZ()
    {
        return $this->QUIZ;
    }
    public function GET_UTS()
    {
        return $this->UTS;
    }
    public function GET_UAS()
    {
        return $this->UAS;
    }

    public function HITUNG_NA()
    {
        return ($this->QUIZ * 0.20) + ($this->UTS * 0.30)  + ($this->UAS * 0.50);
    }

    public function STATUS_KELULUSAN()
    {
        if ($this->HITUNG_NA() > 70) {
            return "<b>LULUS</b>";
        } elseif ($this->HITUNG_NA() > 50) {
            return "<b>REMEDIAL</b>";
        } else {
            return "<b>GAGAL</b>";
        }
    }
}
class NILAI_PRATIKA implements NILAI
{
    protected $PRATIKA1;
    protected $PRATIKA2;
    protected $PRATIKA3;
    protected $PRATIKA4;
    protected $PRATIKA5;

    public function SET_PRAKTIKA1($PRATIKA1)
    {
        $this->PRATIKA1 = $PRATIKA1;
    }

    public function SET_PRAKTIKA2($PRATIKA2)
    {
        $this->PRATIKA2 = $PRATIKA2;
    }

    public function SET_PRAKTIKA3($PRATIKA3)
    {
        $this->PRATIKA3 = $PRATIKA3;
    }

    public function SET_PRAKTIKA4($PRATIKA4)
    {
        $this->PRATIKA4 = $PRATIKA4;
    }

    public function SET_PRAKTIKA5($PRATIKA5)
    {
        $this->PRATIKA5 = $PRATIKA5;
    }

    public function GET_PRAKTIKA1()
    {
        return $this->PRATIKA1;
    }
    public function GET_PRAKTIKA2()
    {
        return $this->PRATIKA2;
    }
    public function GET_PRAKTIKA3()
    {
        return $this->PRATIKA3;
    }
    public function GET_PRAKTIKA4()
    {
        return $this->PRATIKA4;
    }
    public function GET_PRAKTIKA5()
    {
        return $this->PRATIKA5;
    }
    public function HITUNG_NA()
    {
        $nilai_Total = ($this->GET_PRAKTIKA1() + $this->GET_PRAKTIKA2() + $this->GET_PRAKTIKA3() + $this->GET_PRAKTIKA4() + $this->GET_PRAKTIKA5()) / 5;
        return $nilai_Total;
    }
    public function STATUS_KELULUSAN()
    {
        if ($this->HITUNG_NA() >= 60) {
            return "<b>LULUS<b>";
        } else {
            return "<b>GAGAL</b>";
        }
    }
}
//Inisiasi Praktika
$PRATIKA = new NILAI_PRATIKA();
$PRATIKA->SET_PRAKTIKA1(90);
$PRATIKA->SET_PRAKTIKA2(75);
$PRATIKA->SET_PRAKTIKA3(55);
$PRATIKA->SET_PRAKTIKA4(60);
$PRATIKA->SET_PRAKTIKA5(80);

//Inisiasi Non Praktika
$Non_Praktika = new NILAI_NON_PRATIKA();
$Non_Praktika->SET_QUIZ(70);
$Non_Praktika->SET_UTS(85);
$Non_Praktika->SET_UAS(30);

//OUTPUT
echo "<h2><b>CONTOH OUTPUT PROGRAM</b></h2>";
echo "Nilai Praktika-1 : " . $PRATIKA->GET_PRAKTIKA1() . "<br>";
echo "Nilai Praktika-2 : " . $PRATIKA->GET_PRAKTIKA2() . "<br>";
echo "Nilai Praktika-3 : " . $PRATIKA->GET_PRAKTIKA3() . "<br>";
echo "Nilai Praktika-4 : " . $PRATIKA->GET_PRAKTIKA4() . "<br>";
echo "Nilai Praktika-5 : " . $PRATIKA->GET_PRAKTIKA5() . "<br>";
echo "Nilai Akhir      : " . $PRATIKA->HITUNG_NA() . "<br>";
echo "Status Kelulusan : " . $PRATIKA->STATUS_KELULUSAN() . "<br><br><br>";
echo "Nilai Quiz       : " . $Non_Praktika->GET_QUIZ() . "<br>";
echo "Nilai UTS        : " . $Non_Praktika->GET_UTS() . "<br>";
echo "Nilai UAS        : " . $Non_Praktika->GET_QUIZ() . "<br>";
echo "Nilai Akhir      : " . $Non_Praktika->HITUNG_NA() . "<br>";
echo "Status Kelulusan : " . $Non_Praktika->STATUS_KELULUSAN();