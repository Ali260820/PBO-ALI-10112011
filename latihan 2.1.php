<?php
class belanja {

public $namaPembeli= "ali";
public $namabarang= "sampo";
public $hargabarang= "9000";
public $jumlahbarang= "6";
public $totalbayar;
public $diskon= "0.1";
public $pajak=0.02;


public function totalharga(){
    $subtotal = $this->hargabarang * $this->jumlahbarang;
    
    return $subtotal;
}


}

$belanja1 = new belanja();
echo "nama pembeli: ". $belanja1->namaPembeli . "<br>";
echo "Subtotal: Rp ". $belanja1->totalharga() . "<br>";
echo "Total diskon : Rp". $belanja1->totalharga() * $belanja1->diskon . "<br>";

?>