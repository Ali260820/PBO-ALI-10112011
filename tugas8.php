<?php

class Karyawan {
    public $nama;
    public $golongan;
    public $jamLembur;

    // Constructor
    public function __construct($nama, $golongan, $jamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
    }

    // Method get gaji pokok
    public function getGajiPokok() {
        $gaji = [
            "Ib" => 1250000,
            "Ic" => 1300000,
            "Id" => 1350000,
            "IIa" => 2000000,
            "IIb" => 2100000,
            "IIc" => 2200000,
            "IId" => 2300000,
            "IIIa" => 2400000,
            "IIIb" => 2500000,
            "IIIc" => 2600000,
            "IIId" => 2700000,
            "IVa" => 2800000,
            "IVb" => 2900000,
            "IVc" => 3000000,
            "IVd" => 3100000
        ];

        return $gaji[$this->golongan];
    }

    // Hitung total gaji
    public function totalGaji() {
        $lembur = 15000;
        return $this->getGajiPokok() + ($this->jamLembur * $lembur);
    }


    public function __destruct() {
        
    }
}


$data = [];

// Data awal
$data[] = new Karyawan("Winny", "IIb", 30);
$data[] = new Karyawan("Stendy", "IIIc", 32);
$data[] = new Karyawan("Alfred", "IVb", 30);

// Menu
while (true) {
    echo "\n===== MENU GAJI KARYAWAN =====\n";
    echo "1. Tampilkan Data\n";
    echo "2. Tambah Data\n";
    echo "3. Update Data\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih menu: ";

    $pilih = trim(fgets(STDIN));

    switch ($pilih) {

        case 1:
            echo "\n===== DATA KARYAWAN =====\n";
            $no = 1;
            foreach ($data as $k) {
                echo $no++ . ". $k->nama | $k->golongan | $k->jamLembur jam | Rp" . number_format($k->totalGaji(), 0, ',', '.') . "\n";
            }
            break;

        case 2:
            echo "Nama: ";
            $nama = trim(fgets(STDIN));
            echo "Golongan: ";
            $gol = trim(fgets(STDIN));
            echo "Jam Lembur: ";
            $jam = trim(fgets(STDIN));

            $data[] = new Karyawan($nama, $gol, $jam);
            echo "Data berhasil ditambah!\n";
            break;

        case 3:
            echo "Pilih nomor data yang diupdate: ";
            $index = trim(fgets(STDIN)) - 1;

            if (isset($data[$index])) {
                echo "Nama baru: ";
                $data[$index]->nama = trim(fgets(STDIN));
                echo "Golongan baru: ";
                $data[$index]->golongan = trim(fgets(STDIN));
                echo "Jam lembur baru: ";
                $data[$index]->jamLembur = trim(fgets(STDIN));
                echo "Data berhasil diupdate!\n";
            } else {
                echo "Data tidak ditemukan!\n";
            }
            break;

        case 4:
            echo "Pilih nomor data yang dihapus: ";
            $index = trim(fgets(STDIN)) - 1;

            if (isset($data[$index])) {
                unset($data[$index]);
                $data = array_values($data); 
                echo "Data berhasil dihapus!\n";
            } else {
                echo "Data tidak ditemukan!\n";
            }
            break;

        case 5:
            echo "Keluar program...\n";
            exit;

        default:
            echo "Menu tidak tersedia!\n";
    }
}
?>