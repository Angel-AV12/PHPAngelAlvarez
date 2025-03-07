<?php

namespace Domain\valueObject\Password;

use InvalidArgumentException;

final class Password
{

    private string $hash;
    public function __construct(string $password)
    {
        if (!preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z0-9]).{8,}$/', $password)) {
            throw new InvalidArgumentException("La contraseña debe tener al menos 8 caracteres, una mayúscula, un número y un carácter especial.");
        }
        $this->hash = password_hash($password, PASSWORD_BCRYPT);
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function verify(string $password): bool
    {
        return password_verify($password, $this->hash);
    }
    }