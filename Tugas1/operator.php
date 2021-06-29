<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Operator</title>
</head>
<body>
    <h2>Belajar Operator</h2>
    <hr>
    <p>Penjumlahan</p>
    <?php
        $a = 5;
        $b = 7;
        $hasil;
        // penjumlahan

        $hasil = $a+$b;
        echo "<b> Hasil dari penjumlahan $a + $b nya adalah ". $hasil." </b> <br>";

        // pengurangan
        $hasil = $a-$b;
        echo "<b> Hasil dari pengurangan $a - $b nya adalah ". $hasil." </b> <br>";

        // perkalian
        $hasil = $a*$b;
        echo "<b> Hasil dari perkalian $a * $b nya adalah ". $hasil." </b> <br>";

        // pembagian
        $hasil = $a/$b;
        echo "<b> Hasil dari pembagian $a / $b nya adalah ". number_format($hasil, 2)." </b>";

        // modulus
        $hasil = $b%$a;
        echo "<b> Hasil dari modulus $b mod $a adalah ". $hasil."</b> <br>";

       
        echo "<hr><b> Increment</b>";
        for($i=1; $i<=5; $i++){
            echo "<br>$i";
        }

        echo "<hr><b> Decrement</b>";
        for($i=10; $i>0; $i--){
            echo "<br>$i";
        }

    ?>
</body>
</html>