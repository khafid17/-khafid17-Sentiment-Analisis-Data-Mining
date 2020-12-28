<?php

require_once 'vendor/autoload.php';

use Phpml\regression\LeastSquares;

$samples = [[60], [61], [62], [63], [65]];
$targets = [3.1, 3.6, 3.8, 4, 4.1];

$regression = new LeastSquares();
$regression->train($samples, $targets);

echo $prediksi = $regression->predict([64]);
?>