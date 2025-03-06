<?php
// Loop from 1 to 100
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
}
?>

<?php

$fib1 = 0;
$fib2 = 1;
$count = 0;

echo "Even Fibonacci numbers: \n";


while ($count < 10) {
    $fib3 = $fib1 + $fib2;
    $fib1 = $fib2;
    $fib2 = $fib3;
    
    
    if ($fib1 % 2 == 0) {
        echo $fib1 . "\n";
    }

    $count++;
}
?>
