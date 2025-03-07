<?php

namespace Domain\valueObject\Email;

use InvalidArgumentException;

final class Email{

    private string $email;
    public function __construct(string $email)
    {
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            throw new InvalidArgumentException("Formato de email invalido");
        }
    }

    public function getEmail()
    {
        return $this->email;
    }

}

