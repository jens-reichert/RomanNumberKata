<?php

namespace Kata;

/**
 * Class RomanToDecimalConverter
 * @package Kata
 *
 *  Converts roman letters to decimal numbers
 */
class RomanToDecimalConverter
{
    /**
     * Map of letters with there associated numbers
     *
     * @var array
     */
    private $letterMap = [
        'M' => 1000,
        'D' => 500,
        'C' => 100,
        'L' => 50,
        'X' => 10,
        'V' => 5,
        'I' => 1,
    ];

    /**
     * Convert the given roman letters to a decimal number
     *
     * @param string $roman
     *
     * @return int
     */
    public function convert($roman)
    {
        return $this->totalNumber(
            $this->parseLettersToValues($roman)
        );
    }

    /**
     * Sum the converted values
     *
     * @param array $values
     *
     * @return int
     */
    protected function totalNumber($values)
    {
        return array_sum($values);
    }

    /**
     * Map the roman letters to there associated numbers
     *
     * @param string $roman
     *
     * @return array
     */
    protected function mapLettersToNumbers($roman)
    {
        $letters = str_split($roman, 1);
        return array_map(function ($letter) {
            return $this->letterMap[$letter];
        }, $letters);
    }

    /**
     * Negate the given number
     *
     * @param int $number
     *
     * @return int
     */
    protected function negateNumber($number)
    {
        return 0 - $number;
    }

    /**
     * Check if the next array value is greater than the actual value
     *
     * @param array $values
     * @param int   $key
     * @param int   $number
     *
     * @return bool
     */
    protected function nextNumberIsGreaterThanActualNumber($values, $key, $number)
    {
        return $values[$key + 1] > $number;
    }

    /**
     * Check if the current array item is the last one of the array
     *
     * @param int   $key
     * @param array $values
     *
     * @return bool
     */
    protected function isNotTheLastItem($key, $values)
    {
        return $key != count($values) - 1;
    }

    /**
     * Negate the current value if it should be negative
     *
     * @param array $values
     * @param int   $key
     * @param int   $number
     *
     * @return int
     */
    protected function detectNegativeValue($values, $key, $number)
    {
        if ($this->nextNumberIsGreaterThanActualNumber($values, $key, $number)) {
            return $this->negateNumber($number);
        }
        return $number;
    }

    /**
     * Parse the roman letter string to its decimal equivalent
     *
     * @param string $roman
     *
     * @return array
     * @internal param $number
     *
     */
    protected function parseLettersToValues($roman)
    {
        $values = $this->mapLettersToNumbers($roman);

        foreach ($values as $key => &$number) {
            if ($this->isNotTheLastItem($key, $values)) {
                $number = $this->detectNegativeValue($values, $key, $number);
            }
        }
        return $values;
    }
}