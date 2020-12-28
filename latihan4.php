<?php

require_once 'vendor/autoload.php';

use Phpml\Regression\LeastSquares;
use Phpml\Dataset\CsvDataset;

$samples = [];
$targets = [];

$dataset = new CsvDataset('sales.csv',2,false);

$samples = $dataset->getSamples();
$targets = $dataset->getTargets();

print_r($samples);
print_r($targets);



?>
