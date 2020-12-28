<?php
require_once __DIR__ .'/vendor/autoload.php';

use Phpml\Classification\KNearestNeighbors;

$samples = [[1, 2],[1, 1], [2, 3], [3, 4], [4, 2], [4, 1]];
$labels = ['a', 'a', 'a', 'b', 'b', 'b'];

$classifier = new KNearestNeighbors();
$classifier->train ($samples, $labels);

echo $classifier->predict([3, 2]);
//return 'b'

?>