<?php
    function prima ($x, $y){
     for($i=$x; $i<=$y; $i++){
        $a = 0;
        for($j=1;$j<=$i;$j++){
            if($i % $j == 0){
                $a++;
            }
        }
        if($a == 2){
         echo $i.'      ';
        }

     }
    }
    echo "Bilangan prima dari 1 sampai 50 yaitu: ";
    echo "<br>";
    prima(1, 50);

?>