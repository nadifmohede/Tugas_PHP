<?php
    echo "PROGRAM SEGITIGA BINTANG SIKU-SIKU TERBALIK <br><br>"; // judul dari program

    $baris = 9; // jumlah baris yang akan dicetak oleh looping

    for($i = $baris; $i >= 1; $i--){ // melakukan looping dari 9 ke 1
        for($j = 1; $j <= $i; $j++){ // melakukan looping sebanyak nilai $i
            echo "* "; // mencetak karakter bintang
        }
        echo "<br>"; // pindah ke baris selanjutnya
    }

?>