<?php

namespace App\Service;

use App\Service\Converter\CelsiusToRankine;
use App\Service\Converter\FahrenheitToKelvin;
use App\Service\Converter\KelvinToRankine;
use App\Service\Converter\RankineToCelsius;
use Exception;

class ConversionStrategy
{
    private CelsiusToRankine $celsiusToRankine;
    private FahrenheitToKelvin $fahrenheitToKelvin;
    private KelvinToRankine $kelvinToRankine;
    private RankineToCelsius $rankineToCelsius;

    public function __construct(
        CelsiusToRankine $celsiusToRankine,
        FahrenheitToKelvin $fahrenheitToKelvin,
        KelvinToRankine $kelvinToRankine,
        RankineToCelsius $rankineToCelsius
    ) {
        $this->celsiusToRankine = $celsiusToRankine;
        $this->fahrenheitToKelvin = $fahrenheitToKelvin;
        $this->kelvinToRankine = $kelvinToRankine;
        $this->rankineToCelsius = $rankineToCelsius;
    }

    /** @throws Exception */
    public function convert(string $className, float $number): float
    {
        switch ($className) {
            case 'CelsiusToRankine':
                return $this->celsiusToRankine->compute($number);
            case 'FahrenheitToKelvin':
                return $this->fahrenheitToKelvin->compute($number);
            case 'KelvinToRankine':
                return $this->kelvinToRankine->compute($number);
            case 'RankineToCelsius':
                return $this->rankineToCelsius->compute($number);
        }
        throw new Exception("Validation not work!");
    }
}
