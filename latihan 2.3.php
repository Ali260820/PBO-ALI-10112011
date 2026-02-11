<?php


class belanja {

public $namaPembeli;
public $namabarang;
public $hargabarang;
public $jumlahbarang;
public $totalbayar;
public $diskon;
public $pajak=0.02;

public function __construct($namaPembeli, $namabarang, $hargabarang, $diskon, $jumlahbarang){

$this->namaPembeli = $namaPembeli;
$this->namabarang = $namabarang;
$this->jumlahbarang = $jumlahbarang;
$this->hargabarang = $hargabarang;
$this->diskon = $diskon;
}


public function totalharga(){
    $subtotal = $this->hargabarang * $this->jumlahbarang;
    
    return $subtotal;
}

}
$belanja1 = new belanja("ALI", "sampo", " 6000", "0.2", "5");
echo"<pre>";
echo "nama pembeli: ". $belanja1->namaPembeli . "<br>";
echo "Subtotal: Rp ". $belanja1->totalharga() . "<br>";
echo "Total diskon : Rp". $belanja1->totalharga() * $belanja1->diskon . "<br>";
echo "Pajak: Rp ". $belanja1->totalharga() * $belanja1->pajak. "<br>";
echo"<pre>";









?>