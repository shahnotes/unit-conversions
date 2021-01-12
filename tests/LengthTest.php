<?php

namespace Shahnotes\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Shahnotes\UnitConversions\Constants\LengthUnit;
use Shahnotes\UnitConversions\Units\Length;

class LengthTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_convert_meter_to_centimeter()
    {
        $centimeter = Length::init()->convert(LengthUnit::METER, LengthUnit::CENTIMETER, 100);

        $this->assertEquals(10000, $centimeter);
    }

    /**
     * @test
     */
    public function it_can_convert_centimeter_to_meter()
    {
        $meter = Length::init()->convert(LengthUnit::CENTIMETER, LengthUnit::METER, 100);

        $this->assertEquals(1, $meter);
    }
}
