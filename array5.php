<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="stylesheet" href="array5.css">
</head>
<body >
    <table class = "table1" align = "center">
        <tr>
            <th>ID</th>
            <th>PROVINSI</th>
        </tr>
        <?php
$provinsi = array (11 => "Aceh", 12 => "sumatera utara", 13 => "sumatera barat", 
14 => "riau", 15 => "jambi", 16 => "sumatera selatan", 17 => "bengukulu", 
18 => "lampung", 19 => "bangka belitung", 21 => "kepulauan riau", 31 =>"dki jhakarta"
, 32 => "jawa barat", 33 => "jawa tengah", 34 => "yogyakarta", 35 => "jawa timur", 
36 => "banten", 51 => "bali",52 => "ntb", 53 => "ntt", 61 => "kalimatan barat",
62 => "kalimantan tengah", 63 => "kalimantan selatan", 64 => "kalimantan timur", 
65 => "kalimantan utara", 71 => "sulawesi utara", 72 => "sulawesi tengah" , 73 => "sulawesi selatan
",74 => "sulawesi tenggara", 75 => "gorontalo", 76 => "sulawesi barat",81 => "maluku", 
82 => "maluku utara", 91 => "papua barat", 94 => "papua");
foreach ($provinsi as $id => $pro){
    echo "<tr>";
    echo "<td>" .$id."</td>";
    echo "<td>".$pro."</td>";
    echo "</tr>";
}
?>
    </table>
</body>
</html>
