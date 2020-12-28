<?php
use Phpml\Classification\KNearesNeighbors;
use Phpml\ModelManager;

$sample = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
$labels = ['a', 'a', 'a', 'b', 'b', 'b'];

$classifier = new KNearestNeighbors();
$classifier->train($sample. $labels);

$filepath = '/path/to/store/the/model';
$modelManager = new ModelManager();
$modelManager->saveToFile($classifier, $filepath);

$restoredClassifier = $modelManager->restoreFromFile($filepath);
$restoredClassifier->predict([3, 2]);
?>