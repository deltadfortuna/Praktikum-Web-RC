<?php

include "index.html";
class buah{
    var $totalMangga, $totalJambu, $totalSalak;

    public function __construct($mangga, $jambu, $salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }

    public function getMangga(){
        $this->totalMangga = $this->mangga * 15000;
        echo "<fieldset><center> <br> <b>Mangga </b>";
         echo "Rp ".$this->totalMangga;
         echo "<br>";

    }

    public function getJambu(){
        $this->totalJambu = $this->jambu * 13000;
        echo "<center> <br> <b> Jambu</b>";
        echo "Rp ".$this->totalJambu;
        echo "<br>";
    }

    public function getSalak(){
        $this->totalSalak = $this->salak * 10000;
        echo "<br> <b> Salak</b>";
        echo "Rp ".$this->totalSalak;
    }

    public function total(){
        $total = $this->totalMangga + $this->totalJambu + $this->totalSalak;
        echo "<fieldset>";
        echo "<br><b>Total Pesanan Anda Sebanyak <b>= Rp ". $total;
        echo "<br></fieldset>";
    }

}

$mangga = $_POST["mangga"];
$jambu = $_POST["jambu"];
$salak = $_POST["salak"];
echo "<br><br><br> <fieldset> <fieldset><legend> <center><b> Pesanan Saya </b></center> </legend>";
$checkout = new buah($mangga, $jambu, $salak);
$checkout->getMangga();
$checkout->getJambu();
$checkout->getSalak();
$checkout->total();

?>