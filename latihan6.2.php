<?php

$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $b){
    echo $b. "<br>";
}
?>

<?php

$data = [
    ["Nama"=>"Ani", "nilai"=>80],
    ["Nama"=>"Sinta", "nilai"=>75],
    ["Nama"=>"Rina", "nilai"=>90]
];

echo "<table border ='1'>";
echo "<tr><th>Nama</th><th>Nilai</th></tr>";
foreach ($data as $d){
    echo "<tr>";
    echo "<td>".$d["Nama"]. "</td>";
    echo "<td>".$d["nilai"]. "</td>";
    echo "</tr>";
}

echo "</table>";
?>