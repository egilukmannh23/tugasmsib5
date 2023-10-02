<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family : arial;
            font-size : 14px;
        }

        td {
            text-align : center;
            background-color : #d5dbe3;
        }

        th {
            background-color : aqua;
        }
    </style>
</head>
<body>
<?php
include'abstract1.php'; 
include'persegipanjang.php';
include'segitiga.php';
include'lingkaran.php';


$lingkaran = new lingkaran(4);
$persegiPanjang = new persegipanjang(5, 8);
$segitiga = new segitiga(9, 3);


$kumpulanBidang = [$lingkaran, $persegiPanjang, $segitiga];


echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<thead>";
echo "<tr>";
echo "<th>No</th>";
echo "<th>Nama Bidang</th>";
echo "<th>Keterangan</th>";
echo "<th>Luas Bidang</th>";
echo "<th>Keliling Bidang</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
foreach ($kumpulanBidang as $bdg => $bidang) {
    echo "<tr>";
    echo "<td>" . ($bdg + 1) . "</td>";
    echo "<td>" . $bidang->namaBidang() . "</td>";
    echo "<td>" . $bidang->__toString() . "</td>";
    echo "<td>" . $bidang->luasBidang() . "</td>";
    echo "<td>" . $bidang->keliling() . "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>
    
</body>
</html>
