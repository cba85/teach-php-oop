<?php

interface AuthenticatableInterface
{
    public function getPassword();
    public function setPassword($password);
}

trait Authenticatable
{
    public function getPassword() {

    }

    public function setPassword($password) {

    }
}

class User implements AuthenticatableInterface
{
    use Authenticatable;
}

class Admin implements AuthenticatableInterface
{
    use Authenticatable;
}

/* --- */

trait Shout
{
    public function shout() {
        return 'HELLO!!';
    }
}

class Hello
{
    use Shout;

    public function say() {
        return 'Hello';
    }
}

$hello = new Hello;
echo $hello->shout();