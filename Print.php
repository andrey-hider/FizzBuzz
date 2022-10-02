<?php
declare(strict_types=1);
require 'FizzBuzz.php';
use FizzBuzz\FizzBuzz;

$fizz_buzz = new FizzBuzz(1, 100);
print_r($fizz_buzz->get_elements());