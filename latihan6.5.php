<?php

function formatRupiah($angka){
    return "Rp " . number_format($angka,0,",",".");
}

class Belanja{

    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;
    public $member;

    public function subtotal(): float{
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function diskon($subtotal): int{

        $diskon = 0;

        if($this->member == true){

            if($subtotal > 500000){
                $diskon = 15000;
            }

        }else{

            if($subtotal > 100000){
                $diskon = 5000;
            }

        }

        return $diskon;
    }

    public function total(): float{

        $subtotal = $this->subtotal();
        $diskon = $this->diskon($subtotal);

        return $subtotal - $diskon;
    }
}


$dataBelanja = [

    [
        "nama"=>"Budi",
        "barang"=>"Gula",
        "harga"=>65000,
        "jumlah"=>2,
        "member"=>true
    ],

    [
        "nama"=>"Sinta",
        "barang"=>"Minyak",
        "harga"=>140000,
        "jumlah"=>1,
        "member"=>false
    ],

    [
        "nama"=>"Rani",
        "barang"=>"Tepung",
        "harga"=>50000,
        "jumlah"=>3,
        "member"=>true
    ],

    [
        "nama"=>"Ali",
        "barang"=>"Tepung",
        "harga"=>50000,
        "jumlah"=>2,
        "member"=>false
    ],

    [
        "nama"=>"Wildan",
        "barang"=>"Bakso",
        "harga"=>50000,
        "jumlah"=>3,
        "member"=>true
    ]

];

echo "<table border='1' cellpadding='6'>";

echo "<tr>
<th>No</th>
<th>Nama</th>
<th>Member</th>
<th>Barang</th>
<th>Subtotal</th>
<th>Diskon</th>
<th>Total</th>
</tr>";

$no = 1;

foreach($dataBelanja as $d){

    $belanja = new Belanja();

    $belanja->namaPembeli = $d["nama"];
    $belanja->namaBarang = $d["barang"];
    $belanja->hargaBarang = $d["harga"];
    $belanja->jumlahBeli = $d["jumlah"];
    $belanja->member = $d["member"];

    $subtotal = $belanja->subtotal();
    $diskon = $belanja->diskon($subtotal);
    $total = $belanja->total();

    echo "<tr>";

    echo "<td>".$no."</td>";
    echo "<td>".$belanja->namaPembeli."</td>";
    echo "<td>".($belanja->member ? "Ya" : "Tidak")."</td>";
    echo "<td>".$belanja->namaBarang."</td>";
    echo "<td>".formatRupiah($subtotal)."</td>";
    echo "<td>".formatRupiah($diskon)."</td>";
    echo "<td>".formatRupiah($total)."</td>";

    echo "</tr>";

    $no++;
}

echo "</table>";

?>