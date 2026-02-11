<?php
class belanja {

public $namakasir;

public $namaPembeli;

public $namabarang;

public $hargabarang;

public $UangDibayar;

public $totalbayar;

public $diskon;

public $pajak=0.02;



public function totalharga(){

    $subtotal = $this->hargabarang * $this->jumlahbarang;
    
    return $subtotal;
}


}


$belanja1 = new belanja();
$belanja1->UangDibayar= "50000";
$belanja1->namakasir = "Alex";
$belanja1->namaPembeli = "Ali";
$belanja1->namabarang = "sampo";
$belanja1->jumlahbarang = "4";
$belanja1->hargabarang ="9000";
$belanja1->diskon = "0.1";
//var_dump($belanja1);



$belanja1->totalharga();
echo"<pre>";
echo "==========TOKO ALMAZ==========\n";
echo "nama kasir: ". $belanja1->namakasir . "\n";
echo "nama pembeli: ". $belanja1->namaPembeli . "\n";
echo "-------------------------------\n";
echo "Subtotal: Rp ". $belanja1->totalharga() . "\n";
echo "Total diskon : Rp". $belanja1->totalharga() * $belanja1->diskon . "\n";
echo "Pajak: Rp ". $belanja1->totalharga() * $belanja1->pajak. "\n";
echo "-------------------------------\n";
echo "Total Bayar : Rp " . ($belanja1->totalHarga() - ($belanja1->totalHarga() * $belanja1->diskon) + ($belanja1->totalHarga() * $belanja1->pajak)) . "\n";
echo "Uang Bayar  : Rp " . $belanja1->UangDibayar . "\n";
echo "Kembalian   : Rp " . ($belanja1->UangDibayar - ($belanja1->totalHarga() - ($belanja1->totalHarga() * $belanja1->diskon) + ($belanja1->totalHarga() * $belanja1->pajak))) . "\n";
echo "===============================\n";
echo"<pre>";


?>