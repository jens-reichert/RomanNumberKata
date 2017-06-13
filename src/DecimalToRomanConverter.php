<?php
/**
 * Created by PhpStorm.
 * User: Jens.Reichert
 * Date: 12.06.2017
 * Time: 21:48
 */

namespace Kata;


class DecimalToRomanConverter
{
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

    public function convert($decimal)
    {
        $output = '';

        foreach ($this->numberMap as $number => $letter) {
            while ($decimal >= $number) {
                $output .= $letter;
                $decimal -= $number;
            }
        }

        return $output;
    }
}