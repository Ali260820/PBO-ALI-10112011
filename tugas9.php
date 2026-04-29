<?php

class UangTabungan {
    
    private $saldo;
    protected $namaSiswa;

    public function __construct($nama, $saldoAwal) {
        $this->namaSiswa = $nama;
        $this->saldo = $saldoAwal;
    }

    
    public function setor($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            echo "--- Setor Berhasil: Rp$jumlah ---\n";
        }
    }

    
    public function tarik($jumlah) {
        if ($jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
            echo "--- Tarik Berhasil: Rp$jumlah ---\n";
        } else {
            echo "--- Saldo Tidak Cukup! ---\n";
        }
    }

    
    public function getSaldo() {
        return $this->saldo;
    }
}


class Siswa extends UangTabungan {
    public function tampilkanProfil() {
        echo "Nama Siswa: " . $this->namaSiswa . "\n";
        echo "Saldo Saat Ini: Rp" . $this->getSaldo() . "\n";
        echo "--------------------------\n";
    }
}


$daftarSiswa = [
    new Siswa("Siswa 1", 50000),
    new Siswa("Siswa 2", 100000),
    new Siswa("Siswa 3", 75000)
];


echo "=== SALDO AWAL TABUNGAN ===\n";
foreach ($daftarSiswa as $s) {
    $s->tampilkanProfil();
}


$input = fopen("php://stdin", "r");

echo "Pilih Siswa (0, 1, 2): ";
$pilihan = trim(fgets($input));

if (isset($daftarSiswa[$pilihan])) {
    $siswaAktif = $daftarSiswa[$pilihan];
    
    echo "Pilih Aksi (1: Setor, 2: Tarik): ";
    $aksi = trim(fgets($input));
    
    echo "Masukkan Jumlah: ";
    $jumlah = trim(fgets($input));

    
    if ($aksi == "1") {
        $siswaAktif->setor($jumlah);
    } elseif ($aksi == "2") {
        $siswaAktif->tarik($jumlah);
    }

    echo "\n=== SALDO AKHIR ===\n";
    $siswaAktif->tampilkanProfil();
} else {
    echo "Siswa tidak ditemukan.\n";
}

fclose($input);
?>