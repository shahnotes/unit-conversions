<?php

namespace Shahnotes\UnitConversions\Units;

use Shahnotes\UnitConversions\Constants\LengthUnit;
use Shahnotes\UnitConversions\Exceptions\InvalidConversionException;

class Length
{
    /**
     * Length constructor.
     */
    public function __construct() { }

    /**
     * @return static
     */
    public static function init()
    {
        return new static();
    }

    public function convert($from, $to, float $value)
    {
        switch ($from) {
            case LengthUnit::METER:
                return $this->meterConvertTo($value, $to);
            case LengthUnit::CENTIMETER:
                return $this->centimeterConvertTo($value, $to);
            default:
                return new InvalidConversionException("Invalid conversion");
        }
    }

    private function meterConvertTo(float $value, $to) {
        switch ($to) {
            case LengthUnit::CENTIMETER:
                return $value * 100;
            default:
                return new InvalidConversionException("Invalid conversion");
        }
    }

    private function centimeterConvertTo(float $value, $to) {
        switch ($to) {
            case LengthUnit::METER:
                return $value / 100;
            default:
                return new InvalidConversionException("Invalid conversion");
        }
    }
}
