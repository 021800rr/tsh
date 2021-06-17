<?php

namespace App\Service\Converter;

use App\Service\FormatManager;

abstract class AbstractConverter implements ConverterInterface
{
    protected FormatManager $formatManager;

    public function __construct(FormatManager $formatManager)
    {
        $this->formatManager = $formatManager;
    }

    abstract public function compute($number): float;
}
