<?php

require_once 'vendor/autoload.php';

use Phpml\FeatureExtraction\TokenCountVecktorizer;
use Phpml\Tokenization\WhitespaceTokenzen;
$vectorizer = new TokenCountVecktorizer(new WhitespaceTokenzer());

$samples = [
'pada hari minggu ku turut ayah ke kota',
'naik delman istimewa ku duduk di muka',
'di samping pak kusir yang sedang bekerja',
'mengendarai kuda supaya baik jalannya'
];

$vectorizer = new TokenCountVecktorizer(new WhitespaceTokenzer());
$vectorizer->fit($samples);
$vectorizer->transform($samples);
$tokens = $vectorizer->getVocabulary();
print_r($tokens);

?>