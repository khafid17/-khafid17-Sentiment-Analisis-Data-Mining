<?php
error_reporting(0);
require_once __DIR__ .'/vendor/autoload.php';

use Phpml\Classification\KNearestNeighbors;
use Phpml\Dataset\CsvDataset;

$samples = [];
$labels = [];

$dataset = new CsvDataset('iris.csv', 5, false);
$samples = $dataset->getSamples();
$labels = $dataset->getTargets();

$classifier = new KNearestNeighbors();
$classifier ->train($samples, $labels);

//$prediction = $classifier->predict([6.5, 3.4, 5.3, 1.0, 6.0]);
$prediction = $classifier->predict([3.1, 2.3, 0.4, 2.5, 3.6]);
echo $prediction; //Iris-versicolor
?>