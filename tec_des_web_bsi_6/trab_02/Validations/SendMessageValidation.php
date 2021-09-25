<?php

namespace Validations;

require "BaseValidation.php";

class SendMessageValidation extends BaseValidation
{
    protected $requiredFields = ['message', 'email', 'telephone'];
    protected $fields = [];

    public function __construct(array $fields)
    {
        $this->fields = $fields;
        $this->validate();
    }

}