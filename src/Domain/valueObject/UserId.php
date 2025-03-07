<?php

namespace Domain\valueObject\UserId;

use Ramsey\Uuid\Uuid;

final class UserId
{

    private string $number;

    public function __construct(string $number = null){
        $this->number = $value ?? Uuid::uuid4()->toString();
    }

    public function getValue(){
        return $this->number;
    }

}