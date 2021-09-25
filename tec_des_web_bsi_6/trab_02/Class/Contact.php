<?php

namespace Class;

class Contact
{
    private $message;
    private $email;
    private $telephone;

    public function __construct(array $attributes)
    {
        $this->setMessage($attributes['message']);
        $this->setEmail($attributes['email']);
        $this->setTelephone($attributes['telephone']);
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function sendMessage(): void
    {
        //Enviando a mensagem blah blah blah.
    }
}