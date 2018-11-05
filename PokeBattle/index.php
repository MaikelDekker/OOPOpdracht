<?php
require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';

$pikachu = new Pikachu('Pikachu');
print_r('<pre>'. $pikachu . '</pre>');
$charmeleon = new Charmeleon('Charmeleon');
print_r('<pre>'. $charmeleon . '</pre>');

print_r('<pre>'. $charmeleon->name . ' Health: ' . $charmeleon->health . '</pre>');
print_r('<pre>'. $pikachu->name . ' Health: ' . $pikachu->health . '</pre>');
print_r('<pre>'. $pikachu->name . ' Attack'. '</pre>');
$pikachu->Attack($charmeleon, 'Electric Ring');
print_r('<pre>'. $charmeleon->name . ' Health: ' . $charmeleon->health . '</pre>');
print_r('<pre>'. $charmeleon->name . ' Attack'. '</pre>');
$charmeleon->Attack($pikachu, 'Flare');
print_r('<pre>'. $pikachu->name . ' Health: ' . $pikachu->health . '</pre>');
?>