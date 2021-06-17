<?php

namespace App\Service\Converter;

class KelvinToRankine extends AbstractConverter implements ConverterInterface
{
    public function compute($number): float
    {
        // R = ((K - 273.15) * 1.8) + 491.67
        return $this->formatManager
            ->numberAsDegree(
                (($number - 273.15) * 1.8) + 491.67
            );
    }
}
