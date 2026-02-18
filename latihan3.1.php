<?php
class kendaraan
{
    var $jumlahRoda; 
    var $warna;
    var $bahanBakar; 
    var $harga;
    var $merek;
    var $tahunpembuatan;

    function statusHarga()
        {
    if ($this->harga > 50000000) $status = 'Mahal';
    else $status = 'Murah';
    return $status;
        }

        function StatusBbm()
        {
            if ($this->bahanBakar) $bahanBakar = "Subsidi";
            else $bahanBakar = "Non-Subsidi";
            return $bahanBakar;
        }

        function HargaBekas()
        {
             $HargaBekas =$this->harga -  ($this->harga * 0.10) ;
             return $HargaBekas;
        }
    }

$objekKendaraan1 = new kendaraan();
$objekKendaraan1->merek= "Yamaha MIO";
$objekKendaraan1->harga= "10000000";
$objekKendaraan1->bahanBakar="pertalite";
$objekKendaraan1->tahunpembuatan="2005";
$objekKendaraan1->warna="magenta";
$objekKendaraan1->jumlahRoda="Roda 2";

$objekKendaraan2 = new kendaraan();
$objekKendaraan2->merek = "Toyota Avanza";
$objekKendaraan2->harga="100000000";
$objekKendaraan2->bahanBakar="pertalite";
$objekKendaraan2->tahunpembuatan="2015";
$objekKendaraan2->warna="lembayung merah";
$objekKendaraan2->jumlahRoda="Roda 4";



echo "Merek: " . $objekKendaraan1->merek;
echo "<br>";
echo "Jenis Roda: " . $objekKendaraan1->jumlahRoda;
echo "<br>";
echo " Warna Kendaraan: " . $objekKendaraan1->warna;
echo "<br>";
echo "Nominal Harga: " . $objekKendaraan1->harga;
echo "<br>";
echo "Status Harga Kendaraan: " . $objekKendaraan1->statusHarga();
echo "<br>";
echo "Harga Bekas: " . $objekKendaraan1->HargaBekas();
echo "<br>";
echo "Status BBM: " . $objekKendaraan1->StatusBbm();
echo "<br>";
echo " Tahun Pembuatan: " .$objekKendaraan1->tahunpembuatan;
echo "<br>";
echo "<br>";
echo "Merek: " . $objekKendaraan2->merek;
echo "<br>";
echo "Jenis Roda: " . $objekKendaraan2->jumlahRoda;
echo "<br>";
echo " Warna Kendaraan: " . $objekKendaraan2->warna;
echo "<br>";
echo "Nominal Harga: ".$objekKendaraan2->harga;
echo "<br>";
echo "Status Harga Kendaraan: ".$objekKendaraan2->statusHarga();
echo "<br>";
echo "Estimasi Harga Bekas: ".$objekKendaraan2->HargaBekas();
echo "<br>";
echo "Status BBM: " . $objekKendaraan2->StatusBbm();
echo "<br>";
echo " Tahun Pembuatan: " .$objekKendaraan2->tahunpembuatan;
echo "<br>";

?>
