<?php

namespace App\Tests\Service;

use App\Service\Converter\FahrenheitToKelvin;
use App\Service\FormatManager;
use PHPUnit\Framework\TestCase;

class FahrenheitToKelvinTest extends TestCase
{
    private FahrenheitToKelvin $fahrenheitToKelvin;

    public function testConversion(): void
    {
        // 98.1°F= 309.8722K
        $kelvin = $this->fahrenheitToKelvin
            ->compute(98.1);

        $this->assertSame(309.9, $kelvin);
    }

    public function setUp(): void
    {
        $fahrenheitToKelvin = new FahrenheitToKelvin(new FormatManager());
        $this->fahrenheitToKelvin = $fahrenheitToKelvin;
    }
}
