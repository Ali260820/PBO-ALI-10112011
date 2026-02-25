<?php



function formatrupiah($angka) {
    return "Rp" . number_format($angka, 0, '.', '.');
}

class Belanja {

    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;

    public function __construct() {
    }

public function hitungSubtotal() {
    return   $this->hargaBarang * $this->jumlahBeli;

    }

public function hitungTotalDenganDiskon($persenDiskon) {
    $subtotal = $this->hitungSubtotal();
    $diskon = ($persenDiskon / 100) *$subtotal;
    return $subtotal - $diskon;
    
    }


}
//buat array data pembelian
$data = [
    'namaPembeli' => 'miftah', 
    'namaBarang' => 'Mie Ayam',
    'hargaBarang' => 12000,
    'jumlahBeli' => 12,
];
//instansiasi objek belanja dari class belanja


$belanja = new Belanja ();

$belanja->namaPembeli = $data ["namaPembeli"];
$belanja->namaBarang = $data ["namaBarang"];
$belanja->hargaBarang = $data ["hargaBarang"];
$belanja->jumlahBeli = $data ["jumlahBeli"];


echo "<h2> STRUK BELANJA WARUNG A </h2>";
echo "Pembeli : " . $belanja->namaPembeli . "<br>";
echo "Barang : " . $belanja->namaBarang . "<br>";
echo "Harga Barang : " . formatrupiah($belanja->hargaBarang) . "<br>";
echo "Subtotal : " . formatrupiah($belanja->hitungSubtotal()) . "<br>";
echo "Total dengan Diskon 10% : " . formatrupiah($belanja->hitungTotalDenganDiskon(10)) . "<br>";


?>