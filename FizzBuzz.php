<?php
declare(strict_types=1);

namespace FizzBuzz;
class FizzBuzz
{
	private $first_index;
	private $last_index;

	/**
	 * construct the Fizz Buzz
	 * @param int $first_index first element of Fizz Buzz list
	 * @param int $last_index last element of Fizz Buzz list
	 */
	public function __construct(int $first_index, int $last_index)
	{
		$this->first_index = $first_index;
		$this->last_index = $last_index;
	}

	/**
	 * get line break
	 * @return string
	 */
	function get_line_break(): string
	{
		$is_shell_call = (php_sapi_name() == 'cli');
		if ($is_shell_call) {
			$line_break = PHP_EOL;
		} else {
			$line_break = '<br>';
		}
		return $line_break;
	}

	/**
	 * get single fizz buzz element
	 * @param int $index
	 * @return string
	 */
	function get_element(int $index): string
	{
		$output = '';
		if ($index % 15 == 0) {
			$output .= 'FizzBuzz' . $this->get_line_break();
		} elseif ($index % 5 == 0) {
			$output .= 'Buzz' . $this->get_line_break();
		} elseif ($index % 3 == 0) {
			$output .= 'Fizz' . $this->get_line_break();
		} else {
			$output .= $index . $this->get_line_break();
		}
		return $output;
	}

	/**
	 * get all fizz buzz elements
	 * @return string
	 */
	function get_elements(): string
	{
		$output = '';
		if ($this->first_index > 0 && $this->last_index > 0 && $this->first_index < $this->last_index) {
			for ($counter = $this->first_index; $counter <= $this->last_index; $counter++) {
				$output .= $this->get_element($counter);
			}
		}
		return $output;
	}
}

