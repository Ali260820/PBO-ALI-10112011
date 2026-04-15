<?php


function rupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}



class Employee {
    public $nama;
    public $gaji;
    public $lamaKerja;

    public function __construct($nama, $gaji, $lamaKerja) {
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }

    public function hitungGaji() {
        return $this->gaji;
    }
}



class Programmer extends Employee {
    public function hitungGaji() {
        if ($this->lamaKerja < 1) {
            return $this->gaji;
        } elseif ($this->lamaKerja <= 10) {
            return $this->gaji + (0.01 * $this->lamaKerja * $this->gaji);
        } else {
            return $this->gaji + (0.02 * $this->lamaKerja * $this->gaji);
        }
    }
}



class Direktur extends Employee {
    public function hitungGaji() {
        $bonus = 0.5 * $this->lamaKerja * $this->gaji;
        $tunjangan = 0.1 * $this->lamaKerja * $this->gaji;
        return $this->gaji + $bonus + $tunjangan;
    }
}



class PegawaiMingguan extends Employee {
    public $hargaBarang;
    public $stock;
    public $terjual;

    public function __construct($nama, $gaji, $lamaKerja, $hargaBarang, $stock, $terjual) {
        parent::__construct($nama, $gaji, $lamaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->stock = $stock;
        $this->terjual = $terjual;
    }

    public function hitungGaji() {

        if ($this->stock <= 0) {
            return $this->gaji;
        }

        $persentase = $this->terjual / $this->stock;

        if ($persentase > 0.7) {
            $bonus = 0.10 * $this->hargaBarang * $this->terjual;
        } else {
            $bonus = 0.03 * $this->hargaBarang * $this->terjual;
        }

        return $this->gaji + $bonus;
    }
}



if (!isset($_POST['nama'])) {
    echo "Akses tidak valid!";
    exit;
}

$nama  = $_POST['nama'];
$gaji  = (int) $_POST['gaji'];
$lama  = (int) $_POST['lamaKerja'];
$jenis = $_POST['jenis'];



if ($jenis == "programmer") {

    $obj = new Programmer($nama, $gaji, $lama);

} elseif ($jenis == "direktur") {

    $obj = new Direktur($nama, $gaji, $lama);

} else {

    $hargaBarang = $_POST['hargaBarang'] ?? 0;
    $stock       = $_POST['stock'] ?? 1;
    $terjual     = $_POST['terjual'] ?? 0;

    $obj = new PegawaiMingguan(
        $nama,
        $gaji,
        $lama,
        $hargaBarang,
        $stock,
        $terjual
    );
}

$totalGaji = $obj->hitungGaji();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil</title>
</head>
<body>

<h2>Hasil Perhitungan Gaji</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Gaji Awal</th>
        <th>Lama Kerja</th>
        <th>Total Gaji</th>
    </tr>

    <tr>
        <td><?= $nama ?></td>
        <td><?= ucfirst($jenis) ?></td>
        <td><?= rupiah($gaji) ?></td>
        <td><?= $lama ?> Tahun</td>
        <td><?= rupiah($totalGaji) ?></td>
    </tr>

</table>

<br>
<a href="form7.php">← Kembali</a>

</body>
</html>