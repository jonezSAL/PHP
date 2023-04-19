<?php
    // Menginisialisasi variabel nilai
    $nilai = 85;

    // Menggunakan struktur pengkondisian untuk menentukan kategori nilai
    if ($nilai >= 90 && $nilai <= 100) {
        echo "Nilai anda A";
    } elseif ($nilai >= 80 && $nilai < 90) {
        echo "Nilai anda B";
    } elseif ($nilai >= 70 && $nilai < 80) {
        echo "Nilai anda C";
    } else {
        echo "Nilai anda D";
    }
?>
