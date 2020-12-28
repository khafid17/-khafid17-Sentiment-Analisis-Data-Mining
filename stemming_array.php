<?php

require_once 'vendor/autoload.php';

//create stemmer
$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer = $stemmerFactory->createStemmer();

// stem array
$paragraph = [ 
    'Ada banyk variasi tulisan Lorem Ipsum yang tersedia',
    'tapi kebanyakan sudah mengalami perubahan bentuk',
    'entah karena unsur humor atau kalimat yang diacak',
    'anda harus yaki tidak ada bagian yang memalukan yang tersembunyi'
];

$stem_array = array_map(array($stemmer, 'stem'), $paragraph);
print_r($stem_array);

?>