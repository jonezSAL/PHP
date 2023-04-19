<!DOCTYPE html>
<html>
<head>
	<title>Hitung Luas Bangun Datar</title>
</head>
<body>
	<h2>Hitung Luas Bangun Datar</h2>
	<form method="post">
		<label for="jenis_bangun">Pilih Jenis Bangun Datar:</label>
		<select name="jenis_bangun" id="jenis_bangun">
			<option value="persegi">Persegi</option>
			<option value="persegi_panjang">Persegi Panjang</option>
			<option value="segitiga">Segitiga</option>
			<option value="lingkaran">Lingkaran</option>
			<option value="trapesium">Trapesium</option>
		</select>
		<br><br>
		<label for="nilai1">Nilai 1:</label>
		<input type="number" name="nilai1" id="nilai1" required>
		<br><br>
		<label for="nilai2">Nilai 2:</label>
		<input type="number" name="nilai2" id="nilai2" required>
		<br><br>
		<input type="submit" name="hitung" value="Hitung">
	</form>

	<?php
		if(isset($_POST['hitung'])){
			$jenis_bangun = $_POST['jenis_bangun'];
			$nilai1 = $_POST['nilai1'];
			$nilai2 = $_POST['nilai2'];

			switch($jenis_bangun){
				case 'persegi':
					$luas = $nilai1 * $nilai1;
					echo "Luas Persegi: $luas";
					break;
				case 'persegi_panjang':
					$luas = $nilai1 * $nilai2;
					echo "Luas Persegi Panjang: $luas";
					break;
				case 'segitiga':
					$luas = 0.5 * $nilai1 * $nilai2;
					echo "Luas Segitiga: $luas";
					break;
				case 'lingkaran':
					$luas = 3.14 * $nilai1 * $nilai1;
					echo "Luas Lingkaran: $luas";
					break;
				case 'trapesium':
					$luas = 0.5 * ($nilai1 + $nilai2) * $nilai2;
					echo "Luas Trapesium: $luas";
					break;
				default:
					echo "Silahkan pilih jenis bangun datar terlebih dahulu.";
			}
		}
	?>
</body>
</html>
