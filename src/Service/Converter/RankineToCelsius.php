<?php

namespace App\Service\Converter;

class RankineToCelsius extends AbstractConverter implements ConverterInterface
{
    public function compute($number): float
    {
        // C = (R - 491.67) / 1.8
        return $this->formatManager
            ->numberAsDegree(
                ($number - 491.67) / 1.8
            );
    }
}
