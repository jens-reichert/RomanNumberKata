<?php

use Kata\NumberConverter;

class NumberConverterTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->converter = new NumberConverter();
    }

    /**
     * @test
     */
    public function it_converts_a_roman_number_to_decimal()
    {
        $this->assertEquals(1234, $this->converter->convert('MCCXXXIV'));
    }

    /**
     * @test
     */
    public function it_converts_a_decimal_number_to_roman()
    {
        $this->assertEquals('MCCXXXIV', $this->converter->convert(1234));
    }

}
