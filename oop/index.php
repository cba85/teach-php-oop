<?php

class Model
{
    protected $dates = [];

    public function __get($property)
    {
        dump($this->dates);
        if (in_array($property, $this->dates)) {
            return new DateTime($this->{$property});
        }
        return $this->{property};
    }
}

class User extends Model
{
    protected $name;
    protected $email;

    protected $dates = ['createdAt'];
    protected $createdAt = '2017-01-01 10:00:00';

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail() {
        return strtolower($this->email);
    }

    public function setEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return;
        }
        $this->email = $email;
    }
}

class Comment extends Model
{
    protected $dates = ['createdAt'];
    protected $createdAt = '2017-01-01 10:00:00';
}

$user = new User;
//$user->name = 'Clement';

$user->setName('Clement');
$user->setEmail('clement@example.com');

//echo $user->name;
//echo $user->getName();

//print_r($user);
//var_dump($user);
//dump($user);

dump($user->createdAt->format('d/m/Y'));
$comment = new Comment;
dump($comment->createdAt);