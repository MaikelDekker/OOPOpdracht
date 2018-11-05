<?php
require 'Superhero.php';
require 'Avenger.php';

$spiderman = new Superhero('Spider-Man', 'Male', 'Spiderfriends', 'With great power comes great responsibility!');
print_r('<pre>'. $spiderman . '</pre>');
$spiderman->sayOneLiner();

$thor = new Avenger('Thor', 'Male', 'For Asgard!');
print_r('<pre>' . $thor . '</pre>');
$thor->sayOneliner();