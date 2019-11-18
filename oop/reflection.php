<?php

class User
{
    protected $loggedIn = false;

    protected $data = [
        'username' => 'Clement',
    ];

    public function getData($foo)
    {
        echo $foo;
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function isLoggedIn()
    {
        return $this->loggedIn;
    }
}

$user = new User;

$reflectionClass = new ReflectionClass('User');
echo '<pre>' . print_r(get_class_methods($reflectionClass), true) . '</pre>';
echo $reflectionClass->hasMethod('isLoggedIn');

$reflectionMethod = new ReflectionMethod('User', 'getData');
echo '<pre>' . print_r(get_class_methods($reflectionMethod), true) . '</pre>';
//$reflectionMethod->invoke($user);
$reflectionMethod->invokeArgs($user, ['hello']);

$reflectionProperty = new ReflectionProperty('User', 'data');
echo '<pre>' . print_r(get_class_methods($reflectionProperty), true) . '</pre>';
echo $reflectionProperty->getName();

$reflectionParameter = new ReflectionParameter(['User', 'setData'], 0);
echo '<pre>' . print_r(get_class_methods($reflectionParameter), true) . '</pre>';

$reflectionObject = new ReflectionObject($user);
echo '<pre>' . print_r(get_class_methods($reflectionObject), true) . '</pre>';