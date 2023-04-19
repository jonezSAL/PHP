<?php
    // Menginisialisasi variabel tinggi untuk menentukan tinggi setengah piramida angka
    $tinggi = 8;

    // Looping untuk membuat baris-baris pada setengah piramida angka
    for ($i = 0; $i <= $tinggi; $i++) {
        // Looping untuk membuat angka pada setiap baris
        for ($j = 0; $j <= $i; $j++) {
            // Mencetak angka pada setiap kolom
            echo $j . " ";
        }
        // Mencetak baris baru setelah setiap baris piramida selesai
        echo "<br>";
    }
?>