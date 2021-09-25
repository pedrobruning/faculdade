<?php

namespace Validations;

require_once "../Exceptions/MissingRequiredFieldException.php";

abstract class BaseValidation
{
    protected function validate(): bool
    {
        $errors = $this->getErrors();
        if(!empty($errors)){
            throw new \Exceptions\MissingRequiredFieldException($errors);
        }
        return true;
    }

    public function validated(): array
    {
        $result = [];
        foreach($this->requiredFields as $requiredField){
            $result[$requiredField] = $this->fields[$requiredField];
        }
        return $result;
    }

    private function createErrorMessage(string $field): string
    {
        return "The field $field is required<br>";
    }

    private function getErrors(): string 
    {
        $result = "";
        foreach($this->requiredFields as $requiredField){
            if(empty($this->fields[$requiredField])){
                $result .= $this->createErrorMessage($requiredField);
            }
        }
        return $result;
    }

}