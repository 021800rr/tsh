<?php

namespace App\Validator;

class ContainsNumberAsDegree extends ContainsString
{
    /**
     * @param mixed $value
     * @return string
     */
    public function validate($value): string
    {
        if ($errors = $this->isString($value)) {
            return $errors;
        }

        if (!preg_match('/^-?\d+(.\d)?$/', $value)) {
            return printf("The string \"%s\" contains an illegal character.", $value);
        }

        return '';
    }
}
