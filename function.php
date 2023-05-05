<!DOCTYPE html>
<html>

<head>
    <title>Function JSON</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Tanggal Lahir</td>
            <td>Umur</td>
            <td>Alamat</td>
            <td>Kelas</td>
            <td>Nilai</td>
            <td>Hasil</td>
        </tr>
        <?php
        $json_string = file_get_contents('data.json');
        $json_data = json_decode($json_string, true);
        foreach ($json_data as $data){
            $tanggal_lahir = new DateTime($data['tanggal_lahir']);
            $today = new DateTime();
            $umur = $tanggal_lahir->diff($today);
            $umur_str = $umur->format('%y tahun %m bulan %d hari');
            $umur_str = str_replace('tahun', 'thn', $umur_str);
            $umur_str = str_replace('bulan', 'bln', $umur_str);
            $umur_str = str_replace('hari', 'hr', $umur_str);
            $alamat = $data['alamat'];
            $kelas = $data['kelas'];
            $nilai = $data['nilai'];

            // Determine grade based on the score
            if ($nilai >= 85) {
                $hasil = 'A';
            } elseif ($nilai >= 70) {
                $hasil = 'B';
            } elseif ($nilai >= 60) {
                $hasil = 'C';
            } else {
                $hasil = 'D';
            }
        ?>
        <tr>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['kelas']; ?></td>
            <td><?php echo $data['tanggal_lahir']; ?></td>
            <td><?php echo $umur_str; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['kelas']; ?></td>
            <td><?php echo $data['nilai']; ?></td>
            <td><?php echo $hasil; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>