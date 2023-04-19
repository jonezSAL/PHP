<!DOCTYPE html>
<html>
<head>
	<title>Kategori BMI</title>
</head>
<body>
	<h2>Kategori BMI</h2>
	<form method="post">
		<label for="nama">Nama:</label>
		<input type="text" name="nama" id="nama" required>
		<br><br>
		<label for="tinggi">Tinggi Badan (cm):</label>
		<input type="number" name="tinggi" id="tinggi" required>
		<br><br>
		<label for="berat">Berat Badan (kg):</label>
		<input type="number" name="berat" id="berat" required>
		<br><br>
		<input type="submit" name="hitung" value="Hitung">
	</form>

	<?php
		if(isset($_POST['hitung'])){
			$nama = $_POST['nama'];
			$tinggi = $_POST['tinggi'];
			$berat = $_POST['berat'];

			// Menghitung nilai BMI
			$tinggi_meter = $tinggi / 100; // Konversi tinggi ke meter
			$bmi = $berat / ($tinggi_meter * $tinggi_meter);

			// Menentukan kategori BMI
			if($bmi < 18.5){
				$kategori = "kurus";
			} elseif($bmi >= 18.5 && $bmi <= 24.9){
				$kategori = "sedang";
			} elseif($bmi >= 25 && $bmi <= 29.9){
				$kategori = "gemuk";
			} else{
				$kategori = "obesitas";
			}

			// Menampilkan hasil
			echo "Halo, $nama. Nilai BMI anda adalah " . number_format($bmi, 2) . ", anda termasuk $kategori.";
		}
	?>
</body>
</html>
