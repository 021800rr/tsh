<?php

namespace App\Service\Converter;

class CelsiusToRankine extends AbstractConverter implements ConverterInterface
{
    public function compute($number): float
    {
        // R = (C * 1.8) + 491.67
        return $this->formatManager
            ->numberAsDegree(
                ($number * 1.8) + 491.67
            );
    }
}
