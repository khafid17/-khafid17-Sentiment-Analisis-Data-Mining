<?php
error_reporting(0);
require_once __DIR__ . '/vendor/autoload.php';

use Phpml\Classification\KNearesNeighbors;
use Phpml\Dataset\CsvDataset;

$samples = [];
$labels = [];

$dataset = new CsvDataset('iris.csv', 4, false);

$samples = $dataset->getSamles();
$labels = $dataset->getTargets();

$classifier = new KNearesNeighbors();
$classifier->train($samples, $labels);

//$prediction = $classifier->predict([6.5,3.4,5.3,1.0]);
$prediction = $classifier->predict([3.2,3.1,2.0,4.3]);
echo $prediction; //iris-versicotor
?>