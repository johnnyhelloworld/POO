<?php

class Speedometer
{
    public const CONVERSION_MILES = 0.621;
    public const CONVERSION_KILOMETERS = 1.609;

    public static function convertKmToMiles(float $km): float
    {
        return number_format(($km * self::CONVERSION_MILES), 2);
    }

    public static function convertMilesToKm(float $miles): float
    {
        return number_format(($miles * self::CONVERSION_KILOMETERS), 2);
    }
}

echo Speedometer::convertKmToMiles(10) . "</br>";
echo Speedometer::convertMilesToKm(6.21) . "</br>";