<?php

namespace App\Tests\Service;

use App\Service\FormatManager;
use App\Service\Converter\KelvinToRankine;
use PHPUnit\Framework\TestCase;

class KelvinToRankineTest extends TestCase
{
    private KelvinToRankine $kelvinToCelsius;

    public function testConversion(): void
    {
        // 309.9K= 557.8200ºR
        $celsius = $this->kelvinToCelsius
            ->compute(309.9);
        $this->assertSame(557.8, $celsius);
    }

    public function setUp(): void
    {
        $kelvinToCelsius = new KelvinToRankine(new FormatManager());
        $this->kelvinToCelsius = $kelvinToCelsius;
    }
}
