<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $bil1 = 10;
        $bil2 = 5;

        echo "bilangan 1 = $bil1 <br>";
        echo "bilangan 2 = $bil2 <br>";
        echo "<br>";

        echo "Berikut merupakan hasil dari setiap operasi <br>";
        echo "<br>";

        echo "PENJUMLAHAN<br>";        
        $operator = "+";
        echo "Operator : $operator <br>";
        echo "Hasil : " . ($bil1+$bil2) . "<br>";
        echo "<br>";

        echo "PENGURANGAN<br>";        
        $operator = "-";
        echo "Operator : $operator <br>";
        echo "Hasil : " . ($bil1-$bil2) . "<br>";
        echo "<br>";

        echo "PERKALIAN<br>";        
        $operator = "*";
        echo "Operator : $operator <br>";
        echo "Hasil : " . ($bil1*$bil2) . "<br>";
        echo "<br>";

        echo "MODULUS<br>";        
        $operator = "%";
        echo "Operator : $operator <br>";
        echo "Hasil : " . ($bil1%$bil2) . "<br>";
        echo "<br>";
    ?>
</body>
</html>