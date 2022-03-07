<?php

require('input.php');

foreach($numbers as $value) {
    if($value % 3 === 0 and $value % 5 === 0) {
        echo 'FizzBuzz!' . PHP_EOL;
    } elseif($value % 3 === 0) {
        echo 'Fizz!' . PHP_EOL;
    } elseif($value % 5 === 0) {
        echo 'Buzz!' . PHP_EOL;
    } else {
        echo $value . PHP_EOL;
    }
}

?>