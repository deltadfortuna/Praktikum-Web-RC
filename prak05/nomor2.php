<?php
    function urutan(){
        $bunga = array("Kertas", "lavender", "Anggrek", "Kemboja", "Mawar", "Tulip", "Asoka", "Melati", "Kenanga", "Terompet");
        sort($bunga);
        print_r($bunga);
    }

    echo "Urutkan 10 data nama bunga di bawah ini: ";
    echo "<br>";
    echo "Bunga = (Kertas, lavender, Anggrek, Kemboja, Mawar, Tulip, Asoka, Melati, Kenanga, Terompet)";
    echo "<br>";
    echo "<br>";

    echo "<pre>";
    urutan();
    echo "</pre";
    echo "<br>";
    echo "<br>";
    echo "10 nama bunga telah terurut";
?>