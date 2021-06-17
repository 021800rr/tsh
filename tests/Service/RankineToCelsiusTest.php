<?php

namespace App\Tests\Service;

use App\Service\FormatManager;
use App\Service\Converter\RankineToCelsius;
use PHPUnit\Framework\TestCase;

class RankineToCelsiusTest extends TestCase
{
    private RankineToCelsius $rankineToCelsius;

    public function testConversion(): void
    {
        // 557.8R = 36.73889C
        $rankine = $this->rankineToCelsius
            ->compute(557.8);
        $this->assertSame(36.7, $rankine);
    }

    public function setUp(): void
    {
        $rankineToCelsius = new RankineToCelsius(new FormatManager());
        $this->rankineToCelsius = $rankineToCelsius;
    }
}
