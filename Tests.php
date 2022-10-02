<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require 'FizzBuzz.php';
use FizzBuzz\FizzBuzz;
class Tests extends TestCase
{
	public function testFizzBuzz()
	{
		$fizz_buzz = new FizzBuzz(1, 100);
		foreach ([15, 30, 45, 60, 75, 90] as $index) {
			$this->assertSame($fizz_buzz->get_element($index), 'FizzBuzz' . $fizz_buzz->get_line_break());
		}
	}
	public function testBuzz()
	{
		$fizz_buzz = new FizzBuzz(1, 100);
		foreach ([5, 10, 20, 25, 35, 40, 50, 55, 65, 70, 80, 85, 95, 100] as $index) {
			$this->assertSame($fizz_buzz->get_element($index), 'Buzz' . $fizz_buzz->get_line_break());
		}
	}
	public function testFizz()
	{
		$fizz_buzz = new FizzBuzz(1, 100);
		foreach ([3, 6, 9, 12, 18, 21, 24, 27, 33, 36, 39, 42, 48, 51, 54, 57, 63, 66, 69, 72, 78, 81, 84, 87, 93, 96, 99] as $index) {
			$this->assertSame($fizz_buzz->get_element($index), 'Fizz' . $fizz_buzz->get_line_break());
		}
	}
	public function testNumber()
	{
		$fizz_buzz = new FizzBuzz(1, 100);
		foreach ([1, 2, 4, 7, 8, 11, 13, 14, 16, 17, 19, 22, 23, 26, 28, 29, 31, 32, 34, 37, 38, 41, 43, 44, 46, 47, 49, 52, 53, 56, 58, 59, 61, 62, 64, 67, 68, 71, 73, 74, 76, 77, 79, 82, 83, 86, 88, 89, 91, 92, 94, 97, 98] as $index) {
			$this->assertSame($fizz_buzz->get_element($index), $index . $fizz_buzz->get_line_break());
		}
	}
}