<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh PHP</title>
</head>
<body>
    <h1>Halo, dunia!</h1>
    <?php
        // Contoh penggunaan PHP
        $nama = "Yoshi";
        echo "<p>Halo, $nama! Ini contoh penggunaan PHP di dalam HTML.</p>";
        
        // Contoh fungsi sederhana
        function tambah($a, $b) {
            return $a + $b;
        }

        $hasil = tambah(5, 3);
        echo "<p>Hasil penjumlahan 5 + 3 = $hasil</p>";
    ?>
</body>
</html>
