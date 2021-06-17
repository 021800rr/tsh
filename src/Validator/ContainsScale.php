<?php

namespace App\Validator;

class ContainsScale extends ContainsString
{
    private const ACCEPTABLE_SCALES = ['Celsius', 'Rankine', 'Fahrenheit', 'Kelvin'];

    /**
     * @param mixed $value
     * @return string
     */
    public function validate($value): string
    {
        if ($errors = $this->isString($value)) {
            return $errors;
        }

        if (!in_array($value, self::ACCEPTABLE_SCALES)) {
            return printf("\"%s\" is an unknown scale.", $value);
        }

        return '';
    }
}
