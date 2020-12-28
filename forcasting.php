<?php

require_once 'vendor/autoload.php';

use Phpml\regression\LeastSquares;
use Phpml\Dataset\CsvDataset;

$samples = [];
$targets = [];

$dataset = new CsvDataset('sales.csv',2,false);

$samples = $dataset->getSamples();
$targets = $dataset->getTargets();

print_r($samples);
print_r($targets);

$regression = new LeastSquares();
$regression->train($samples, $targets);
echo $regression->predict([2018, 2]);
//echo $regression->predict([2018, 2]);
// return 246.72

$regression->getIntercept();
$regression->getCoefficients();

?>