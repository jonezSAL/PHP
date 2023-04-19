<?php
    // Menginisialisasi variabel tinggi untuk menentukan tinggi setengah piramida terbalik
    $tinggi = 9;

    // Looping untuk membuat baris-baris pada setengah piramida terbalik
    for ($i = $tinggi; $i >= 1; $i--) {
        // Looping untuk membuat bintang pada setiap baris
        for ($j = $i; $j >= 1; $j--) {
            // Mencetak bintang
            echo "*";
        }
        // Mencetak baris baru setelah setiap baris piramida selesai
        echo "<br>";
    }
?>