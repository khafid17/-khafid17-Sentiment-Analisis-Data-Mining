<?php

require_once 'vendor/autoload.php';

//create stemmer
$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer = $stemmerFactory->createStemmer();

// stem
$sentence = 'Perekonomian Indonesia sedang dalam pertumbuhan yang membanggakan';
$output = $stemmer->stem($sentence);

echo $output."\n";
//ekonomi indonesi sedang dalam tumbuh yang bangga

?>