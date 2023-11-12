<?php
//minimal daftar hadir di matakuliah pemerogaman web
$Absensi = 8;

if ($Absensi >= 14) {
    $Kategori = "teladan";
} 
    elseif($Absensi >= 11){
    $Kategori= "rajin";
} 
    elseif($Absensi >= 9){
   $Kategori = " organisasi";
} 
    elseif($Absensi >= 6){
   $Kategori= "kadang_kadang";
}
    elseif($Absensi >= 4){
    $Kategori = "males";
} 
    elseif($Absensi <= 3){
    $Kategori= "gak niat kulia";
} 


echo "Kategori mahasiswa: $Kategori";

?>