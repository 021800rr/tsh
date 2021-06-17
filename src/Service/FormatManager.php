<?php

namespace App\Service;

class FormatManager
{
    /**
     * @param int|float $number
     * @return float \d*.\d
     */
    public function numberAsDegree($number): float
    {
        return round($number, 1);
    }
}
