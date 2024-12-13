<?php
$numbers = [];

for ($i = 0; $i < 10; $i++) {
    $numbers[] = rand(1, 50);
}

var_dump(($numbers));
foreach ($numbers as $number) {
    if ($number % 2 === 0) {
        echo "C'est un nombre pair" . $number . '<br>';
    }
}
foreach ($numbers as $number) {
    if ($number % 2 !== 0) {
        echo "C'est un nombre impair" . $number . '<br>';
    }
}
?>