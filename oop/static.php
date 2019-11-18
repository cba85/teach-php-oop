<?php

class User
{
    public static $username;

    public static function displayUsername()
    {
        echo self::$username;
    }
}

$user = new User;
$user::$username = 'clement';
//echo $user->username;
//echo $user::$username;
echo $user::displayUsername();

$user1 = new User;
$user1::$username = "clement";

$user2 = new User;
$user2::$username = "tomy";

//echo $user1::$username;