<?php
function KoneksiDB() {
$host = "localhost";
$user = "root";
$psw = "";
$db = "latihan";
return mysqli_connect($host, $user, $psw, $db);
}
function LoadObat() {
$koneksi = KoneksiDB();
$sql = "select id_obat, nama_obat, harga, stok from obat";
$result = mysqli_query($koneksi, $sql);
return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
$data_obat = LoadObat();
?>