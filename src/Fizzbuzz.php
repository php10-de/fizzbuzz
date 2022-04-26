<?php
declare(strict_types = 1);

namespace App;

use ErrorException;

/**
 * Fizzbuzz class to print the numbers from 1 to 100.
 *
 */
class Fizzbuzz
{
    public const LIMIT = 100;
    
    /**
     * generate the Fizzbuzz items
     *
     * @return array<int|string>
     */
    protected function generate(): array
    {
        $items = [];
        for ($i = 1; $i <= self::LIMIT; $i++) {
            $isMultipleOf3 = ($i % 3 === 0);
            $isMultipleOf5 = ($i % 5 === 0);
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
    public function fizzbuzzHtml(): void
    {
        $items = $this->generate();
        foreach ($items as $item) {
            echo $item . '<br>';
        }
    }
}
