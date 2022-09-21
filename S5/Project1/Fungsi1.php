<?php
$input = $_POST["NPM"];
$KdFakultas= substr($input,5,1);
$kodejenjang= substr($input,4,1);
?>
<html>
<body>

NPM : <?php echo $_POST["NPM"]; ?><br>
Jumlah SKS : <?php echo $_POST["JumlahSKS"]; ?><br>
Jumlah Praktika : <?php echo $_POST["JumlahPraktik"]; ?><br>
<br><br><br><br>
Jenjang Pendidikan : 
<?php switch ($kodejenjang){
    case 0:
        $jenjangpendidikan ="Diploma III";
        $biayaSKS=200000;
        $biayaPraktik=300000;
        echo $jenjangpendidikan;
break;
case 1:
    $jenjangpendidikan ="Sarjana";
    $biayaSKS=250000;
    $biayaPraktik=400000;
    echo $jenjangpendidikan;
break;
case 2:
    $jenjangpendidikan ="Magister";
    $biayaSKS=3500000;
    $biayaPraktik=500000;
    echo $jenjangpendidikan;
break;
}?><br>
Nama Fakultas : 
<?php switch ($KdFakultas){
    case 1:
        $Namafakultas ="Ekonomi";
        $biayapengembangan=1000000;
        echo $Namafakultas;
break;
case 2:
    $jenjangpendidikan ="Teknik";
    $biayapengembangan=1000000;
    echo $Namafakultas;
break;
}?>


</body>
</html> 
