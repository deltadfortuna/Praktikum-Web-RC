<?php

    function penjumlahan($x, $y){
        $total = $x + $y;

        echo "<h4> Penjumlahan </h4>";
        echo "Operator: -";
        echo "<br>";
        echo "Hasil = $total";
        }

    function pengurangan($x, $y){
        $total = $x - $y;

        echo "<h4> Pengurangan </h4>";
        echo "Operator: -";
        echo "<br>";
        echo "Hasil = $total";
        }

    function perkalian($x, $y){
        $total = $x * $y;

        echo "<h4> Perkalian</h4>";
        echo "Operator: *";
        echo "<br>";
        echo "Hasil = $total";
        }

    function pembagian($x, $y){
        $total = $x / $y;

        echo "<h4> Pembagian</h4>";
        echo "Operator: /";
        echo "<br>";
        echo "Hasil = $total";
        }

    function modulo($x, $y){
        $total = $x % $y;

        echo "<h4> Modulo</h4>";
        echo "Operator: %";
        echo "<br>";
        echo "Hasil = $total";
        }

        echo "Bilangan 1 = 30";
        echo "<br>";
        echo "Bilangan 2 = 20";
        echo "<br>";
        echo "Berikut merupakan hasil dari setiap operasi";
        echo "<br>";

        penjumlahan (30, 20);
        pengurangan (30,20);
        perkalian (30,20);
        pembagian (30,20);
        modulo (30, 20);

?>