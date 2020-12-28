<?php

require_once 'vendor/autoload.php';

use Phpml\Dataset\CsvDataset;
use Phpml\CrossValidation\StratifiedRandomSplit;
use Phpml\Tokenization\WordTokenizer;
use Phpml\FeatureExtraction\StopWords\English;
use Phpml\FeatureExtraction\TokenCountVectorizer;
use Phpml\Clasification\SVC;
use Phpml\Metric\Accuracy;

$dataset = new CsvDataset('dataset.csv', 1, true);

print_r($dataset->getSamples());
print_r($dataset->getTargets());

$split = new StratifierRandomSplit($dataset, 0.2);
$sample_data = $split->getTrainSamples();

foreach ($sample_data as $value){
    $samples[] = $value[0];
}
print_r($samples);

$vectorizer = new TokenCountVectorizer(new WordTokenizer(), new English());

//build the dictionary
$vectorizer->fit($samples);
//transform the provided text samples into a vectorizen list
$vectorizer->trasform($samples);

print_r($samples);

// SVC Classifier
$classifier = new SVC();
$classifier->train($samples, $split->getTrainLabels());

$test_data = $split->getTestSamples();
foreach ($test_data as $value){
    $test[] = $value[0];
}
//Build the dictionry.
$vectorizer->fit($test);
$vectorizer->transform($test);

$predicted = $clasifier->predict($test);

print_r($predicted);

echo 'Accuracy' . Accuracy::score($split->getTestLabels(), $predicted);
?>