<?php
Class Pegadaian{

    public $Nama;
    public $besaranpinjaman;
    public $bunga = 10; 
    public $lamaangsuran = 12; 
    public $keterlambatanangsuran = 40;
    public $dendapersenperhari = 0.15/100;

   
   public function totalpinjaman(){
     $totalBunga = $this->besaranpinjaman * ($this->bunga / 100);
     return $this->besaranpinjaman + $totalBunga;
    }
     
   
   public function Angsuranperbulan(){
     if($this->lamaangsuran == 0){
         return 0;
     }
     return $this->totalpinjaman() / $this->lamaangsuran;
    }

    
    public function Denda (){
      return $this->Angsuranperbulan() * 
             $this->dendapersenperhari * 
             $this->keterlambatanangsuran;
    }

   
   public function TotalBayar(){
    return $this->Angsuranperbulan() + $this->Denda();
    }
}

$nasabah1 = new Pegadaian();


$nasabah1->Nama = htmlspecialchars($_POST['Nama']);
$nasabah1->besaranpinjaman = (float) $_POST['besaranpinjaman'];

echo "<h2> TOKO PEGADAIAN SYARIAH </h2>";
echo "<h3> Keadilan NO. 16 </h3>";
echo "<h4> Telp. 16412847174 </h4>";
echo "Nama Nasabah : " .  $nasabah1->Nama . "<br>";
echo "Jumlah Pinjaman : Rp " . number_format($nasabah1->besaranpinjaman,0,',','.') . "<br>";
echo "Total Pinjaman + Bunga : Rp " . number_format($nasabah1->totalpinjaman(),0,',','.') . "<br>";
echo "Setoran per Bulan : Rp " . number_format($nasabah1->Angsuranperbulan(),0,',','.') . "<br>";
echo "Keterlambatan Angsuran (Hari) : ". $nasabah1->keterlambatanangsuran . "<br>";
echo "Denda Keterlambatan : Rp ". number_format($nasabah1->Denda(),0,',','.') . "<br>";
echo "Besaran Pembayaran : Rp ". number_format($nasabah1->TotalBayar(),0,',','.') . "<br>";

?>