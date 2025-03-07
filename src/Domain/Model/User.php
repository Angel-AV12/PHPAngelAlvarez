<?php

namespace Domain\Enty;

use DateTimeImmutable;
use \Domain\valueObject\UserId\UserId;
use \Domain\valueObject\Name\Name;
use \Domain\valueObject\Email\Email;
use \Domain\valueObject\Password\Password;

final class User{
    private UserId $id;
    private  Name $name;
    private Email $email;
    private Password $password;
    private DateTimeImmutable $createdAt;

    public function __construct(UserId $id, Name $name, Email $email, Password $password){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    
    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

}