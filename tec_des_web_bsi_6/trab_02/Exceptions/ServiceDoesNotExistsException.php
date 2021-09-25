<?php

namespace Exceptions;

class ServiceDoesNotExistsException extends \Exception
{
    public function __construct($code = 0, \Exception $previous = null) {
        $message = "<div class='alert alert-danger'>Servico nao existe!</div>";
        parent::__construct($message, $code, $previous);
    }
}