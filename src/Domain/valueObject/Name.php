<?php

namespace Domain\valueObject\Name;

final class Name
{
    private string $name;

    public function __construct(string $name){
        if(strlen($name) < 3 || strlen($name) > 50){
            throw new \InvalidArgumentException("El nombre debe tener entre 3 y 50 caracteres");
        }
        $this->name;
    }

    public function getName()
    {
        return $this->name;
    }

}