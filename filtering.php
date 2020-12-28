<?php
require_once 'vendor/autoload.php';

use Phpml\Tokenization\WordTokenizer;
use Phpml\FeatureExtraction\StopWords\English;
use Phpml\FeatureExtraction\TokenCountVectorizer;

$samples = [
    'Lorem Ipsum is simply dummy text',
    'Lorem Imsum has been the industry standard',
    'when an unknown printer took a galley'
];

/*tanpa stopword removal*/
//$vectorizer = new TokenCountVectorizer(new WordTokenizer);

/* menggunakan stopwords English */
$vectorizer = new TokenCountVectorizer(new WordTokenizer, new English());
$vectorizer->fit($samples);
$vectorizer->transform($samples);

$tokens = $vectorizer->getVocabulary();

print_r($tokens);

?>