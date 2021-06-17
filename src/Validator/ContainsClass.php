<?php

namespace App\Validator;

class ContainsClass
{
    public function validate(array $data): string
    {
        $className = "App\\Service\\Converter\\" . $data['from'] . 'To' . $data['to'];
        if (!class_exists($className)) {
            return printf("Have no conversion.");
        }
        return '';
    }
}
