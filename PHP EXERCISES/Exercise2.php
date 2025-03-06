<?php

$number = 10; 


if ($number % 2 == 0) {
    echo $number . " is even.\n";
} else {
    echo $number . " is odd.\n";
}
?>

<?php

$number = -5; 

if ($number > 0) {
    echo $number . " is positive.\n";
} elseif ($number < 0) {
    echo $number . " is negative.\n";
} else {
    echo "The number is zero.\n";
}
?>