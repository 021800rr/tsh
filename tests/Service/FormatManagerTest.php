<?php

namespace App\Tests\Service;

use App\Service\FormatManager;
use PHPUnit\Framework\TestCase;

class FormatManagerTest extends TestCase
{
    private FormatManager $formatManager;

    public function testIntAsDegree(): void
    {
        $this->assertSame(1.0, $this->formatManager->numberAsDegree(1));
    }

    public function testFloatAsDegree(): void
    {
        $this->assertSame(1.0, $this->formatManager->numberAsDegree(1.02));
        $this->assertSame(3.0, $this->formatManager->numberAsDegree(2.96));
    }

    public function setUp(): void
    {
        $this->formatManager = new FormatManager();
    }
}
