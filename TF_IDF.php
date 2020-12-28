<?php

require_once 'vendor/autoload.php';

use Phpml\FeatureExtraction\TokenCountVectorizer;
use Phpml\Tokenization\WhitespaceTokenizer;
use Phpml\FeatureExtraction\TfIdfTransformer;

$vectorizer = new TokenCountVectorizer(new WhitespaceTokenizer());

$samples = [
    'pada hari minggu ku turut ayah ke kota',
    'naik delman istimewa ku duduk di muka',
    'disamping pak kusir yang sedang bekerja',
    'mengendarai kuda supaya baik jalannya'
];
$vectorizer = new TokenCountVectorizer(new WhitespaceTokenizer());
$vectorizer->fit($samples);
$vectorizer->transform($samples);

/* get token and token index */
$tokens = $vectorizer->getVocabulary();
// print_r($tokens);

/* count term frequency */
// print_r($samples);

$transformer = new TfIdfTransformer();
$transformer->fit($samples);
$transformer->transform($samples);

print_r($samples)
?>