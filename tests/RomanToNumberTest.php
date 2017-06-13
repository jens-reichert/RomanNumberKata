<?php

use Kata\RomanToDecimalConverter;

class RomanToNumberTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->converter = new RomanToDecimalConverter();
    }

    /**
     * @test
     */
    public function it_converts_I_to_1()
    {
        $this->assertEquals(1, $this->converter->convert('I'));
    }

    /**
     * @test
     */
    public function it_converts_II_to_2()
    {
        $this->assertEquals(2, $this->converter->convert('II'));
    }

    /**
     * @test
     */
    public function it_converts_IV_to_4()
    {
        $this->assertEquals(4, $this->converter->convert('IV'));
    }

    /**
     * @test
     */
    public function it_converts_V_to_5()
    {
        $this->assertEquals(5, $this->converter->convert('V'));
    }

    /**
     * @test
     */
    public function it_converts_VI_to_6()
    {
        $this->assertEquals(6, $this->converter->convert('VI'));
    }

    /**
     * @test
     */
    public function it_converts_VII_to_7()
    {
        $this->assertEquals(7, $this->converter->convert('VII'));
    }

    /**
     * @test
     */
    public function it_converts_IX_to_9()
    {
        $this->assertEquals(9, $this->converter->convert('IX'));
    }

    /**
     * @test
     */
    public function it_converts_X_to_10()
    {
        $this->assertEquals(10, $this->converter->convert('X'));
    }

    /**
     * @test
     */
    public function it_converts_XII_to_12()
    {
        $this->assertEquals(12, $this->converter->convert('XII'));
    }

    /**
     * @test
     */
    public function it_converts_XLVIII_to_48()
    {
        $this->assertEquals(48, $this->converter->convert('XLVIII'));
    }

    /**
     * @test
     */
    public function it_converts_CXXIII_to_123()
    {
        $this->assertEquals(123, $this->converter->convert('CXXIII'));
    }

    /**
     * @test
     */
    public function it_converts_MCCXXXIV_to_1234()
    {
        $this->assertEquals(1234, $this->converter->convert('MCCXXXIV'));
    }

}
