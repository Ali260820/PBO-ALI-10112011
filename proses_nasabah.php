<?php
Class Pegadaian{


    public $Nama;
    public $besaranpinjaman;
    public $bunga = 0.10;
    public $lamaangsuran;
    public $keterlambatanangsuran = 40;
    public $dendapersenperhari= 0.15/100;

   public function totalpinjaman(){
     return  $this->besaranpinjaman *($this->bunga/100);
    }
     
   public function Angsuranperbulan(){
     return $this->totalpinjaman() / $this->lamaangsuran;
      
        
    }

    public function Denda (){
      return $this->Angsuranperbulan() * $this->dendapersenperhari * $this->keterlambatanangsuran;
       
    }


   public function TotalBayar(){

    return $this->Angsuranperbulan() * $this->Denda();
            
    }


    }

    $nasabah1 = new Pegadaian ();

    $nasabah1->Nama = htmlspecialchars(string : $_POST['Nama']);
    $nasabah1->besaranpinjaman = htmlspecialchars(string : $_POST['besaranpinjaman']);

echo "<h2> TOKO PEGADAIAN SYARIAH </h2>";
echo "<h3> Keadilan NO. 16 </h3>";
echo "<h4> Telp. 16412847174 </h4>";
echo "Nama Nasabah : " .  $nasabah1->Nama . "<br>";
echo "Jumlah Pinjaman : Rp " . $nasabah1->besaranpinjaman . "<br>";
echo "Setoran : Rp " . $nasabah1->Angsuranperbulan() . "<br>";
echo " keterlambatan Angsuran (Hari) : ". $nasabah1->keterlambatanangsuran . "<br>";
echo " Denda keterlmbatan  : ". $nasabah1->Denda(). "<br>";
echo " Besaran Pembayran : ". $nasabah1->TotalBayar(). "<br>";

?>