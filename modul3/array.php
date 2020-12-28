<?php

$strings = [
    "To changes this Licenses header",
    "choose License Headers in Project Properties"
];
$case_folded_array = array_map('strtolower',$strings);
print_r($case_folded_array);

?>