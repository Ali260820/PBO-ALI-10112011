<?php

class Belanja {

    public $pembeli;
    public $member;
    public $totalBelanja;
    public $diskon = 0;

    public function __construct($pembeli,$member,$totalBelanja){
        $this->pembeli = $pembeli;
        $this->member = $member;
        $this->totalBelanja = $totalBelanja;
    }

    public function hitungDiskon(){

        if($this->member == "ya"){

            if($this->totalBelanja > 500000){
                $this->diskon = 50000;
            }
            elseif($this->totalBelanja > 100000){
                $this->diskon = 15000;
            }

        }else{

            if($this->totalBelanja > 100000){
                $this->diskon = 5000;
            }

        }

        return $this->diskon;
    }

    public function totalBayar(){
        return $this->totalBelanja - $this->hitungDiskon();
    }

}

?>

<h2>Program Diskon Belanja</h2>

<form method="post">

Nama Pembeli :
<input type="text" name="pembeli" required>

<br><br>

Apakah ada kartu member :
<select name="member">
<option value="ya">Ya</option>
<option value="tidak">Tidak</option>
</select>

<br><br>

Total Belanja :
<input type="number" name="belanja" required>

<br><br>

<button type="submit">Hitung</button>

</form>

<?php

if(isset($_POST['pembeli'])){

$pembeli = $_POST['pembeli'];
$member = $_POST['member'];
$totalBelanja = $_POST['belanja'];

$data = new Belanja($pembeli,$member,$totalBelanja);

echo "<br><table border='1' cellpadding='10'>";

echo "<tr>
<th>No</th>
<th>Pembeli</th>
<th>Kartu Member</th>
<th>Total Belanja</th>
<th>Diskon</th>
<th>Biaya yang dikeluarkan</th>
</tr>";

echo "<tr>
<td>1</td>
<td>".$data->pembeli."</td>
<td>".$data->member."</td>
<td>Rp ".$data->totalBelanja."</td>
<td>Rp ".$data->hitungDiskon()."</td>
<td>Rp ".$data->totalBayar()."</td>
</tr>";

echo "</table>";

}

?>