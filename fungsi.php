<?php

function luaspersegi($sisi){
    $rumus = $sisi * $sisi;
    return $rumus;
}

echo "Hasilnya perkaliannya adalah : " . luaspersegi(10);
echo "<br>";

// funtion nama

function nama(){
    echo "Nama saya adalah Muhadzir";   
}

nama();
echo "<br>";
//parameter 

function perkenalan($nama){
    echo "Perkenalkan Nama saya : " . $nama;
}

perkenalan("Muhadzir");
echo "<br>";

//parameter default
function Mahasiswa($siswa = "STT Nurul Fikri"){
    echo "Halo saya Mahasiswa di " . $siswa;
}

Mahasiswa();
?>