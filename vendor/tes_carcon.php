<?php
require 'vendor/autoload.php';
use carbon\carbon;

$sekarang = carbon::now();

echo "sekarang : $sekarang <br>";
echo "umur saya :" . carbon::createFromDate(2000, 1, 1)->age . "<br>";
echo "besok: " . $sekarang->addDay() ."<br>";
?>