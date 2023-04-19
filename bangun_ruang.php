<!DOCTYPE html>
<html>
<head>
	<title>Hitung Volume Bangun Ruang</title>
</head>
<body>
	<h2>Hitung Volume Bangun Ruang</h2>
	<form method="post">
		<label for="jenis_bangun">Pilih Jenis Bangun Ruang:</label>
		<select name="jenis_bangun" id="jenis_bangun">
			<option value="kubus">Kubus</option>
			<option value="balok">Balok</option>
			<option value="tabung">Tabung</option>
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
				case 'kubus':
					$volume = $nilai1 * $nilai1 * $nilai1;
					echo "Volume Kubus: $volume";
					break;
				case 'balok':
					$volume = $nilai1 * $nilai2 * $nilai2;
					echo "Volume Balok: $volume";
					break;
				case 'tabung':
					$volume = 3.14 * $nilai1 * $nilai1 * $nilai2;
					echo "Volume Tabung: $volume";
					break;
				default:
					echo "Silahkan pilih jenis bangun ruang terlebih dahulu.";
			}
		}
	?>
</body>
</html>
