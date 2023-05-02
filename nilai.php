<?php
    echo "PROGRAM KATEGORI NILAI <br><br>";
    echo "Range Nilai : <br>";
    echo "Nilai A (91-100) <br> 
          Nilai B (81-90) <br>
          Nilai C(71-80) <br>
          Nilai D(0-70) <br><br>";

    $nilai = 85;
    echo "Nilai : " . $nilai . "<br>";

    switch($nilai){
        case ($nilai > 90 && $nilai <= 100):
            echo "Nilai anda adalah A";
            break;
        case ($nilai > 80 && $nilai <= 90):
            echo "Nilai anda adalah B";
            break;
        case ($nilai > 70 && $nilai <= 80):
            echo "Nilai anda adalah C";
            break;
        case ($nilai >= 0 && $nilai <= 70):
            echo "Nilai anda adalah D";
            break;
        default:
            echo "Maaf, nilai yang anda inputkan tidak sesuai dengan sistem";
            break;
    }

?>