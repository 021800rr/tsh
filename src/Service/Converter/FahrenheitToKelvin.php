<?php

namespace App\Service\Converter;

class FahrenheitToKelvin extends AbstractConverter implements ConverterInterface
{
    public function compute($number): float
    {
        // ((F - 32) / 1.8) + 273.15
        return $this->formatManager
            ->numberAsDegree(
                (($number - 32) / 1.8) + 273.15
            );
    }
}
