<?php
$numbers = [13, 29, 49, 9, 7, 30, 10, 50];
var_dump($numbers);

if (in_array(7, $numbers)) {
    echo "7 est le plus petit nombre du tableau" . '<br>';
}
if (in_array(50, $numbers)) {
    echo "50 est le plus grand nombre du tableau" . '<br>';
}
?>