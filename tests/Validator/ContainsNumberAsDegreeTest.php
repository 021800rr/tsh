<?php

namespace App\Tests\Validator;

use App\Validator\ContainsNumberAsDegree;
use PHPUnit\Framework\TestCase;

class ContainsNumberAsDegreeTest extends TestCase
{
    public function testCorrectDegree(): void
    {
        $validator = new ContainsNumberAsDegree();
        $errors = $validator->validate('1.2');
        $this->assertSame('', $errors);
        $errors = $validator->validate('-1.2');
        $this->assertSame('', $errors);
        $errors = $validator->validate('1');
        $this->assertSame('', $errors);
    }
}
