<?php

namespace App\Tests\Service;

use App\Service\Converter\CelsiusToRankine;
use App\Service\FormatManager;
use PHPUnit\Framework\TestCase;

class CelsiusToRankineTest extends TestCase
{
    private CelsiusToRankine $celsiusToRankine;

    public function testConversion(): void
    {
        // 100°C = 671.6700ºR
        $celsius = $this->celsiusToRankine
            ->compute(100);
        $this->assertSame(671.7, $celsius);
    }

    public function setUp(): void
    {
        $celsiusToRankine = new CelsiusToRankine(new FormatManager());
        $this->celsiusToRankine = $celsiusToRankine;
    }
}
