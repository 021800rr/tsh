<?php

namespace App\Service\Converter;

interface ConverterInterface
{
    /**
     * @param int|float $number
     * @return float
     */
    public function compute($number): float;
}
