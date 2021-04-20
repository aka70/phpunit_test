<?php

require_once 'vendor/autoload.php';

use App\Library\FizzBuzz;

$fizzbuzz = new FizzBuzz();

$result = $fizzbuzz->toFizzBuzzNass(15);

echo $result;
