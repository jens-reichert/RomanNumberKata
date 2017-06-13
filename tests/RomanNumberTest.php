<?php

use Kata\DecimalToRomanConverter;

class RomanNumberTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->converter = new DecimalToRomanConverter();
    }

    /**
     * @test
     */
    public function it_converts_1_to_I()
    {
        $this->assertEquals('I', $this->converter->convert(1));
    }

    /**
     * @test
     */
    public function it_converts_2_to_II()
    {
        $this->assertEquals('II', $this->converter->convert(2));
    }

    /**
     * @test
     */
    public function it_converts_4_to_IV()
    {
        $this->assertEquals('IV', $this->converter->convert(4));
    }

    /**
     * @test
     */
    public function it_converts_5_to_V()
    {
        $this->assertEquals('V', $this->converter->convert(5));
    }

    /**
     * @test
     */
    public function it_converts_6_to_VI()
    {
        $this->assertEquals('VI', $this->converter->convert(6));
    }

    /**
     * @test
     */
    public function it_converts_7_to_VII()
    {
        $this->assertEquals('VII', $this->converter->convert(7));
    }

    /**
     * @test
     */
    public function it_converts_9_to_IX()
    {
        $this->assertEquals('IX', $this->converter->convert(9));
    }

    /**
     * @test
     */
    public function it_converts_10_to_X()
    {
        $this->assertEquals('X', $this->converter->convert(10));
    }

    /**
     * @test
     */
    public function it_converts_12_to_XII()
    {
        $this->assertEquals('XII', $this->converter->convert(12));
    }

    /**
     * @test
     */
    public function it_converts_48_to_XIII()
    {
        $this->assertEquals('XLVIII', $this->converter->convert(48));
    }

    /**
     * @test
     */
    public function it_converts_123_to_CXXIII()
    {
        $this->assertEquals('CXXIII', $this->converter->convert(123));
    }

    /**
     * @test
     */
    public function it_converts_1234_to_MCCXXXIV()
    {
        $this->assertEquals('MCCXXXIV', $this->converter->convert(1234));
    }

}
