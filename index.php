<?php 

require_once __DIR__. '/Models/movies.php';

$jumanji = new Movie('Jumanji', 90, 'https://www.viaggioff.it/wp-content/uploads/2021/09/jumanji-e1632828246850-1024x634.jpg');

$hungergames = new Movie('Hunger Games', 130, 'https://images.alphacoders.com/273/273893.jpg');

var_dump($jumanji->getInfo());