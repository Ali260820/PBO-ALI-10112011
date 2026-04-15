<!DOCTYPE html>
<html>
<head>
    <title>Form Pegawai</title>

    <script>
        function tampilMingguan() {
            var jenis = document.getElementById("jenis").value;
            var formMingguan = document.getElementById("formMingguan");

            if (jenis === "mingguan") {
                formMingguan.style.display = "block";
            } else {
                formMingguan.style.display = "none";
            }
        }
    </script>

</head>
<body>

<h2>Form Input Pegawai</h2>

<form action="tugasp7.php" method="POST">

    Nama: <input type="text" name="nama" required><br><br>
    Gaji Pokok: <input type="number" name="gaji" required><br><br>
    Lama Kerja (tahun): <input type="number" name="lamaKerja" required><br><br>

    Jenis Pegawai:
    <select name="jenis" id="jenis" onchange="tampilMingguan()">
        <option value="programmer">Programmer</option>
        <option value="direktur">Direktur</option>
        <option value="mingguan">Pegawai Mingguan</option>
    </select><br><br>

    
    <div id="formMingguan" style="display:none;">
        <h3>Data Penjualan</h3>

        Harga Barang: <input type="number" name="hargaBarang"><br><br>
        Stock: <input type="number" name="stock"><br><br>
        Terjual: <input type="number" name="terjual"><br><br>
    </div>

    <button type="submit">Hitung Gaji</button>

</form>

</body>
</html>