<?php

namespace App\Tool;

use App\Service\ConversionStrategy;
use Exception;

class Helper
{
    private ConversionStrategy $conversionStrategy;

    public function __construct(ConversionStrategy $conversionStrategy)
    {
        $this->conversionStrategy = $conversionStrategy;
    }
    /** @throws Exception */
    public function getConverted(array $data): float
    {
        $className = $data['from'] . 'To' . $data['to'];
        $degree = (float)$data['degree'];

        return $this->conversionStrategy->convert($className, $degree);
    }
}
