<?php
    echo "Program BMI <br>";
    echo "Rumus BMI adalah (Berat (Kg) / Tinggi * Tinggi (Meter)) <br><br>";

    // Inputan Awal
    $nama = "Nadif Rayhan";
    $tb = 1.85;
    $bb = 98;

    // Penghitungan BMI
    $bmi = $bb / ($tb ** 2);

    echo "Nama = " . $nama . "<br>";
    echo "Tinggi Badan = " . $tb . " Meter <br>";
    echo "Berat Badan = " . $bb . " Kilogram <br><br>";

    echo "Halo, " . $nama . "." . " Nilai BMI anda adalah " . $bmi . ", anda termasuk "; 
    
    // Kategori BMI
    if($bmi < 18.5){
        echo "Kurus.";
    }else if($bmi < 25){
        echo "Sedang.";
    }else{
        echo "Gemuk.";
    };
?>