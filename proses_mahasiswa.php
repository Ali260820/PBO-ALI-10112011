<?php



function formatnilai($angka) {
    return "Nilai" . number_format($angka, 0, ',');
}

class Mahasiswa {

    public $namaMahasiswa;
    public $kelasMahasiswa;
    public $nilaiMahasiswa;
    public $grade;
    public $status;     

    }




//buat array data mahasiswa
$data = [
    'namaMahasiswa' => 'Miftah', 
    'kelasMahasiswa' => 'SI 1B',
    'nilaiMahasiswa' => 85,
    'grade' => 'A',
    'status' => 'Lulus',
];

$data1 = [
    'namaMahasiswa' => 'Ali', 
    'kelasMahasiswa' => 'SI 1B',
    'nilaiMahasiswa' => 55,
    'grade' => 'C',
    'status' => 'Tidak Lulus',
];

$data2 = [
    'namaMahasiswa' => 'Ocid', 
    'kelasMahasiswa' => 'SI 1B',
    'nilaiMahasiswa' => 75,
    'grade' => 'B',
    'status' => 'Lulus',
];
?>
<html>
    <head>
        <title>

        DATA NILAI  MAHASISWA

        </title>
    
    </head>

    <body>
        <h2>  Data Mahasiswa</h2>

        <form  method="GET">
            <button type="Submit" name="namaMahasiswa" value="Miftah">Miftah</button>
            <button type="Submit" name="namaMahasiswa" value="Ali">Ali</button>
            <button type="Submit" name="namaMahasiswa" value="Ocid">Ocid</button>
            <button type="Submit" name="namaMahasiswa" value="Data Mahasiswa">Keseluruhan</button>
            
        </form>
        
    </body>


</html>
<?php

//instansiasi objek mahasiswa dari class mahasiswa


$mahasiswa1 = new Mahasiswa ();
$mahasiswa1->namaMahasiswa = $data ["namaMahasiswa"];
$mahasiswa1->kelasMahasiswa = $data ["kelasMahasiswa"];
$mahasiswa1->nilaiMahasiswa = $data ["nilaiMahasiswa"];
$mahasiswa1->grade = $data ["grade"];
$mahasiswa1->status = $data ["status"];


$mahasiswa2 = new Mahasiswa ();
$mahasiswa2->namaMahasiswa = $data1 ["namaMahasiswa"];
$mahasiswa2->kelasMahasiswa = $data1 ["kelasMahasiswa"];
$mahasiswa2->nilaiMahasiswa = $data1 ["nilaiMahasiswa"];
$mahasiswa2->grade = $data1 ["grade"];
$mahasiswa2->status = $data1 ["status"];

$mahasiswa3 = new Mahasiswa ();
$mahasiswa3->namaMahasiswa = $data2 ["namaMahasiswa"];
$mahasiswa3->kelasMahasiswa = $data2 ["kelasMahasiswa"];        
$mahasiswa3->nilaiMahasiswa = $data2 ["nilaiMahasiswa"];
$mahasiswa3->grade = $data2 ["grade"];
$mahasiswa3->status = $data2 ["status"];

if(isset($_GET['namaMahasiswa'])) {
    if ($_GET['namaMahasiswa'] == "Miftah") {
    
echo "<h2> KETERANGAN NILAI MAHASISWA </h2>";
echo "Nama Mahasiswa : " . $mahasiswa1->namaMahasiswa . "<br>";
echo "Kelas Mahasiswa : " . $mahasiswa1->kelasMahasiswa . "<br>";
echo "Nilai Mahasiswa : " . $mahasiswa1->nilaiMahasiswa . "<br>";
echo "Grade : " . $mahasiswa1->grade . "<br>";
echo "Status : " . $mahasiswa1->status . "<br>";
    }
elseif ($_GET['namaMahasiswa'] == "Ali") {


echo "<h2> KETERANGAN NILAI MAHASISWA </h2>";
echo "Nama Mahasiswa : " . $mahasiswa2->namaMahasiswa . "<br>";
echo "Kelas Mahasiswa : " . $mahasiswa2->kelasMahasiswa . "<br>";
echo "Nilai Mahasiswa : " . $mahasiswa2->nilaiMahasiswa . "<br>";
echo "Grade : " . $mahasiswa2->grade . "<br>";
echo "Status : " . $mahasiswa2->status . "<br>";
}
elseif ($_GET['namaMahasiswa'] == "Ocid") {

echo "<h2> KETERANGAN NILAI MAHASISWA </h2>";
echo "Nama Mahasiswa : " . $mahasiswa3->namaMahasiswa . "<br>";
echo "Kelas Mahasiswa : " . $mahasiswa3->kelasMahasiswa . "<br>";
echo "Nilai Mahasiswa : " . $mahasiswa3->nilaiMahasiswa . "<br>";
echo "Grade : " . $mahasiswa3->grade . "<br>";
echo "Status : " . $mahasiswa3->status . "<br>";
    }

    elseif ($_GET['namaMahasiswa'] == "Data Mahasiswa") {


        echo "<h2> KETERANGAN NILAI MAHASISWA </h2>";
        echo "Nama Mahasiswa : " . $mahasiswa1->namaMahasiswa . "<br>";
        echo "Kelas Mahasiswa : " . $mahasiswa1->kelasMahasiswa . "<br>";
        echo "Nilai Mahasiswa : " . $mahasiswa1->nilaiMahasiswa . "<br>";
        echo "Grade : " . $mahasiswa1->grade . "<br>";
        echo "Status : " . $mahasiswa1->status . "<br>";
        echo"------------------------------";
        echo "<br>";

        echo "Nama Mahasiswa : " . $mahasiswa2->namaMahasiswa . "<br>";
        echo "Kelas Mahasiswa : " . $mahasiswa2->kelasMahasiswa . "<br>";
        echo "Nilai Mahasiswa : " . $mahasiswa2->nilaiMahasiswa . "<br>";
        echo "Grade : " . $mahasiswa2->grade . "<br>";
        echo "Status : " . $mahasiswa2->status . "<br>";
        echo"------------------------------";
        
        echo "<br>";
         
        echo "Nama Mahasiswa : " . $mahasiswa3->namaMahasiswa . "<br>";
        echo "Kelas Mahasiswa : " . $mahasiswa3->kelasMahasiswa . "<br>";
        echo "Nilai Mahasiswa : " . $mahasiswa3->nilaiMahasiswa . "<br>";
        echo "Grade : " . $mahasiswa3->grade . "<br>";
        echo "Status : " . $mahasiswa3->status . "<br>";
        echo"------------------------------";
    }
}
?>