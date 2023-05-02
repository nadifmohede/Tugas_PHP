<?php
    echo "PROGRAM SEGITIGA ANGKA <br><br>"; // judul dari program

    $tinggi = 9; // jumlah tinggi segitiga yang akan dihasilkan

    for($i = 0; $i <= $tinggi; $i++){ // melakukan looping dari 0 hingga 9
        for($j = 0; $j <= $i; $j++){ // melakukan looping sebanyak nilai $i
            echo $j . " "; // mencetak nilai variabel $j
        }
        echo "<br>"; // pindah ke baris selanjutnya
    }

?>