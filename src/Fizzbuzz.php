<?php

namespace App;

use \ErrorException;

/**
 * Fizzbuzz Class to print the numbers from 1 to 100.
 *
 */
class Fizzbuzz
{
    const LIMIT = 100;

    /**
     * Set strict mode in constructor and initialize dp
     *
     * @return void
     */
    public function __construct()
    {
        error_reporting(E_ALL);
        set_error_handler(function ($severity, $message, $file, $line) {
            throw new ErrorException($message, 0, $severity, $file, $line);
        });
    }
    
    /**
     * generate
     *
     * @return array<int|string>
     */
    protected function generate()
    {
        $items = [];
        $isMultipleOf3 = false;
        $isMultipleOf5 = false;
        for ($i = 1; $i <= self::LIMIT; $i++) {
            $isMultipleOf3 = ($i % 3 == 0);
            $isMultipleOf5 = ($i % 5 == 0);
            if ($isMultipleOf3 && $isMultipleOf5) {
                $items[] = 'FizzBuzz';
            } elseif ($isMultipleOf3) {
                $items[] = 'Fizz';
            } elseif ($isMultipleOf5) {
                $items[] = 'Buzz';
            } else {
                $items[] = $i;
            }
        }
        return $items;
    }

    /**
     * Render fizzbuzz in HTML
     *
     * @return void
     */
    public function fizzbuzzHtml()
    {
        $items = $this->generate();
        foreach ($items as $item) {
            echo $item . "<br>";
        }
    }
}
