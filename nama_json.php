<?php
  // Data siswa
  $siswa = array(
    array("pelita"),
    array("najmina"),
    array("anita"),
    array("Bayu"),
    array("Nasa"),
    array("Rahma"),
  );

  // Menampilkan data siswa dengan menggunakan looping
  for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i][0] . "<br>";
  }
?>