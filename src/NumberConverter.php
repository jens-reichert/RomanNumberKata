<?php

namespace Kata;

/**
 * Class NumberConverter
 * @package Kata
 */
class NumberConverter
{
    /**
     * @var \Kata\RomanToDecimalConverter
     */
    protected $romanToDecimal;
    /**
     * @var \Kata\DecimalToRomanConverter
     */
    protected $decimalToRoman;

    /**
     * NumberConverter constructor.
     */
    public function __construct()
    {
        $this->romanToDecimal = new RomanToDecimalConverter();
        $this->decimalToRoman = new DecimalToRomanConverter();
    }

    /**
     * Convert the given number, depending on its type
     *
     * @param int|string $number
     *
     * @return int|string
     */
    public function convert($number)
    {
        if(is_numeric($number)){
            return $this->decimalToRoman->convert($number);
        }
        if(is_string($number)){
            return $this->romanToDecimal->convert($number);
        }
    }
}