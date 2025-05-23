<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Rute Penerbangan</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Pendaftaran Rute Penerbangan</h1>
    <div class="garis"></div>
    <div class="container">
    <form name="FormPenerbangan" method="POST" onsubmit="return formPenerbangan();" novalidate>
        <label>Nama Maskapai:
            <input type="text" name="maskapai">
        </label>
        <label>Bandara Asal:
            <select name="bandara_asal">
                <?php
                $bandara_asal = ["Soekarno Hatta" => 65000, "Husein Sastranegara" => 50000, "Abdul Rachman Saleh" => 40000, "Juanda" => 30000];
                foreach ($bandara_asal as $nama => $pajak) {
                    echo "<option value='$nama'>$nama</option>";
                }
                ?>
            </select>
        </label>
        <label>Bandara Tujuan:
            <select name="bandara_tujuan">
                <?php
                $bandara_tujuan = ["Ngurah Rai" => 85000, "Hasanuddin" => 70000, "Minangkabau" => 60000, "Sultan Iskandar Muda" => 40000];
                foreach ($bandara_tujuan as $nama => $pajak) {
                    echo "<option value='$nama'>$nama</option>";
                }
                ?>
            </select>
        </label>
        <label>Harga Tiket:
            <input type="text" name="harga_tiket">
        </label>
        <input type="submit" name="submit" value="Hitung Total Harga">
    </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $maskapai = $_POST['maskapai'];
        $asal = $_POST['bandara_asal'];
        $tujuan = $_POST['bandara_tujuan'];
        $harga_tiket = (int)$_POST['harga_tiket'];

        $pajak_asal = $bandara_asal[$asal];
        $pajak_tujuan = $bandara_tujuan[$tujuan];
        $total_pajak = $pajak_asal + $pajak_tujuan;
        $total_harga = $harga_tiket + $total_pajak;
        $tanggal = date("Y-m-d H:i:s");
        $nomor = rand(100000, 999999);

        echo "<h2>Data Penerbangan</h2>";
        echo "<table>
                <tr><th>Nomor</th><td>$nomor</td></tr>
                <tr><th>Tanggal</th><td>$tanggal</td></tr>
                <tr><th>Nama Maskapai</th><td>$maskapai</td></tr>
                <tr><th>Asal Penerbangan</th><td>$asal</td></tr>
                <tr><th>Tujuan Penerbangan</th><td>$tujuan</td></tr>
                <tr><th>Harga Tiket</th><td>Rp. $harga_tiket</td></tr>
                <tr><th>Pajak</th><td>Rp. $total_pajak</td></tr>
                <tr><th>Total Harga Tiket</th><td><strong>Rp. $total_harga</strong></td></tr>
            </table>";
    }
    ?>
</body>
</html>
