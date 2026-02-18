<?php
Class Produk {

public $nama;
public $harga;


public function statusHarga() {
    if ($this->harga > 100000) {
return "Produk Mahal";
    }
else 
return "Produk Terjangkau";
}
}

$produk1 = new Produk();

$produk1->nama =
htmlspecialchars(string : $_POST['nama']);
$produk1->harga =
htmlspecialchars(string : $_POST['harga']);

echo "<h2> data produk 1 </h2>";
echo "Nama Produk : " .  $produk1->nama . "<br>";
echo "Harga : Rp " . $produk1->harga . "<br>";
echo "Status Harga Produk : " .$produk1->statusHarga();


?>