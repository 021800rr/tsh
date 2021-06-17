<?php

namespace App\Validator;

class Validator
{
    private ContainsNumberAsDegree $containsNumberAsDegree;
    private ContainsScale $containsScale;
    private ContainsClass $containsClass;

    public function __construct(
        ContainsNumberAsDegree $containsNumberAsDegree,
        ContainsScale $containsScale,
        ContainsClass $containsClass
    ) {
        $this->containsNumberAsDegree = $containsNumberAsDegree;
        $this->containsScale = $containsScale;
        $this->containsClass = $containsClass;
    }

    public function validate(array $data): string
    {
        if ($errors = $this->containsNumberAsDegree->validate($data['degree'])) {
            return $errors;
        }
        if ($errors = $this->containsScale->validate($data['from'])) {
            return $errors;
        }
        if ($errors = $this->containsScale->validate($data['to'])) {
            return $errors;
        }
        if ($errors = $this->containsClass->validate($data)) {
            return $errors;
        }

        return '';
    }
}
