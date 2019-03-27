<?php

require 'data/data.php';
require 'inc/fonctions.php';

$message = presentation("Johnny", 20, " et j'assume pas que c'est pas vrai");

$array = [
    'tata',
    'toto',
    'titi'
];


$array[] = 'tutu';
array_push($array, 'tete', 'tyty');

include 'inc/header.tpl.php';
include 'inc/home.tpl.php';
include 'inc/footer.tpl.php';