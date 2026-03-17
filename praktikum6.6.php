<?php

class BangunRuang {

    public $jenis;
    public $sisi;
    public $jari;
    public $tinggi;

    // Constructor
    public function __construct($jenis, $sisi, $jari, $tinggi) {
        $this->jenis = $jenis;
        $this->sisi = $sisi;
        $this->jari = $jari;
        $this->tinggi = $tinggi;
    }

    // Method hitung volume
    public function hitungVolume() {
        switch ($this->jenis) {

            case "Bola":
                return (4/3) * pi() * pow($this->jari, 3);

            case "Kerucut":
                return (1/3) * pi() * pow($this->jari, 2) * $this->tinggi;

            case "Limas Segi Empat":
                return (1/3) * pow($this->sisi, 2) * $this->tinggi;

            case "Kubus":
                return pow($this->sisi, 3);

            case "Tabung":
                return pi() * pow($this->jari, 2) * $this->tinggi;

            default:
                return 0;
        }
    }
}

// Array object (data bangun ruang)
$dataBangun = [
    new BangunRuang("Bola", 0, 7, 0),
    new BangunRuang("Kerucut", 0, 14, 10),
    new BangunRuang("Limas Segi Empat", 8, 0, 24),
    new BangunRuang("Kubus", 30, 0, 0),
    new BangunRuang("Tabung", 0, 7, 10),
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Volume Bangun Ruang</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
        }
        th {
            background-color: blue;
            color: white;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Tabel Volume Bangun Ruang</h2>

<table>
    <tr>
        <th>Jenis Bangun Ruang</th>
        <th>Sisi</th>
        <th>Jari-jari</th>
        <th>Tinggi</th>
        <th>Volume</th>
    </tr>

    <?php foreach ($dataBangun as $bangun): ?>
        <tr>
            <td><?= $bangun->jenis ?></td>
            <td><?= $bangun->sisi ?></td>
            <td><?= $bangun->jari ?></td>
            <td><?= $bangun->tinggi ?></td>
            <td><?= round($bangun->hitungVolume(), 2) ?></td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>