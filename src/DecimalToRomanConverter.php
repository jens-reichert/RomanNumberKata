<?php

namespace Kata;

/**
 * Class DecimalToRomanConverter
 * @package Kata
 *
 * Converts decimal numbers to roman letters
 */
class DecimalToRomanConverter
{
    /**
     * String of roman letters
     *
     * @var string
     */
    protected $output = '';

    /**
     * Decimal number to convert
     *
     * @var integer
     */
    protected $decimalToConvert;

    /**
     * Map of numbers with there associated roman letters
     *
     * @var array
     */
    private $numberMap = [
        1000 => 'M',
        500  => 'D',
        100  => 'C',
        50   => 'L',
        40   => 'XL',
        10   => 'X',
        9    => 'IX',
        5    => 'V',
        4    => 'IV',
        1    => 'I',
    ];

    /**
     * Convert the given number to a string of roman letters
     *
     * @param $decimal
     *
     * @return string
     */
    public function convert($decimal)
    {
        $this->decimalToConvert = $decimal;

        foreach ($this->numberMap as $number => $letter) {
            while ($this->decimalMatchesNumber($number)) {
                $this->buildOutput($letter, $number);
            }
        }

        return $this->output;
    }

    /**
     * Check if the actual decimal number contains the given number
     *
     * @param integer $number
     *
     * @return bool
     * @internal param $decimal
     */
    protected function decimalMatchesNumber($number)
    {
        return $this->decimalToConvert >= $number;
    }

    /**
     * Add the given letter to the output string
     *
     * @param string $letter
     *
     * @return string
     * @internal param $output
     *
     */
    protected function addToOutputString($letter)
    {
        $this->output .= $letter;
    }

    /**
     * Reduce the actual decimal number
     *
     * @param integer $number
     *
     * @return mixed
     * @internal param $decimal
     */
    protected function subtractNumberFromDecimal($number)
    {
        $this->decimalToConvert -= $number;
    }

    /**
     * Build the output string of roman numbers
     *
     * @param $letter
     * @param $number
     */
    protected function buildOutput($letter, $number)
    {
        $this->addToOutputString($letter);
        $this->subtractNumberFromDecimal($number);
    }
}