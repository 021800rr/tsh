<?php

namespace App\Validator;

abstract class ContainsString
{
    /**
     * @param mixed $value
     * @return string
     */
    protected function isString($value): string
    {
        if (null === $value || '' === $value) {
            return printf("String cannot be empty.");
        }

        if (!is_string($value)) {
            return printf("This \"%s\" is not a string.", $value);
        }

        return '';
    }
}
