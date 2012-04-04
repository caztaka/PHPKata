<?php


echo "Input Number:";
$a = trim(fgets(STDIN));
$b = $a % 2;

if ($b == 0) {
    echo $a . " is even number.";
} else {
    echo $b . " is odd number.";
}

?>
